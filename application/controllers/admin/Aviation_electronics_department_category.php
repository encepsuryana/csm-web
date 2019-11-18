<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviation_electronics_department_category extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_aviation_category');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['aviation_electronics_category'] = $this->Model_aviation_category->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_aviation_electronics_category',$data);
			$this->load->view('admin/view_footer');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function add()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) 
				{

					$form_data = array(
						'category_name'=> $_POST['category_name'],
						'status'       => $_POST['status']
					);
					$this->Model_aviation_category->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['category_name'].' ditambahkan ke Kategori Departemen Aviasi & Elektronik');

					$data['success'] = 'Kategori Departemen Aviasi & Elektronik berhasil ditambahkan!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_aviation_electronics_category_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_aviation_electronics_category_add',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

    		$tot = $this->Model_aviation_category->aviation_electronics_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/aeronautical-electronics-engineering-category');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{
				$valid = 1;

				$this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				} else {

            		// Duplicate Category Checking
					$data['aviation_electronics_category'] = $this->Model_aviation_category->getData($id);
					$total = $this->Model_aviation_category->duplicate_check($_POST['category_name'],$data['aviation_electronics_category']['category_name']);				
					if($total) {
						$valid = 0;
						$data['error'] = 'Nama Kategori sudah ada';
					}
				}

				if($valid == 1) 
				{
		    		// Updating Data
					$form_data = array(
						'category_name'=> $_POST['category_name'],
						'status'       => $_POST['status']
					);
					$this->Model_aviation_category->update($id,$form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['category_name'].' diupdate pada Kategori Departemen Aviasi & Elektronik');

					$data['success'] = 'Kategori Departemen Aviasi & Elektronik telah berhasil diupdate';
				}

				$data['aviation_electronics_category'] = $this->Model_aviation_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_aviation_electronics_category_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['aviation_electronics_category'] = $this->Model_aviation_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_aviation_electronics_category_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

			// If there is no aviation_electronics category in this id, then redirect
			$tot = $this->Model_aviation_category->aviation_electronics_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/aeronautical-electronics-engineering-category');
				exit;
			}

			$data['aviation_electronics_category'] = $this->Model_aviation_category->getData($id);

			$result = $this->Model_aviation_category->getData1($id);
			foreach ($result as $row) {
				$result1 = $this->Model_aviation_category->show_aviation_electronics_by_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
				}
				if($photo!='') {
					unlink('./public/uploads/'.$photo);
				}
				$result1 = $this->Model_aviation_category->show_aviation_electronics_photo_by_aviation_electronics_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
					unlink('./public/uploads/aviation_electronics_photos/'.$photo);
				}

				$this->Model_aviation_category->delete1($row['id']);
				$this->Model_aviation_category->delete2($row['id']);
			}
			$this->Model_aviation_category->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['aviation_electronics_category']['category_name'].' dihapus dari kategori Departemen Aviasi & Elektronik');

			redirect(base_url().'admin/aeronautical-electronics-engineering-category');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

}