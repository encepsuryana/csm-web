<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility_category extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_facility_category');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['facility_category'] = $this->Model_facility_category->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_facility_category',$data);
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
					$this->Model_facility_category->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['category_name'].' ditambahkan ke Kategori Fasilitas');

					$data['success'] = 'Kategori Fasilitas berhasil ditambahkan!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_facility_category_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_facility_category_add',$data);
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

    	// If there is no service in this id, then redirect
			$tot = $this->Model_facility_category->facility_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/facility-category');
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
					$data['facility_category'] = $this->Model_facility_category->getData($id);
					$total = $this->Model_facility_category->duplicate_check($_POST['category_name'],$data['facility_category']['category_name']);				
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
					$this->Model_facility_category->update($id,$form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['category_name'].' diupdate pada Kategori Fasilitas');

					$data['success'] = 'Kategori Fasilitas telah berhasil diupdate';
				}

				$data['facility_category'] = $this->Model_facility_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_facility_category_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['facility_category'] = $this->Model_facility_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_facility_category_edit',$data);
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
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) {

			$tot = $this->Model_facility_category->facility_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/facility-category');
				exit;
			}
			$data['facility_category'] = $this->Model_facility_category->getData($id);
			
			$result = $this->Model_facility_category->getData1($id);
			foreach ($result as $row) {
				$result1 = $this->Model_facility_category->show_facility_by_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
				}
				if($photo!='') {
					unlink('./public/uploads/'.$photo);
				}
				$result1 = $this->Model_facility_category->show_facility_photo_by_facility_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
					unlink('./public/uploads/facility_photos/'.$photo);
				}

				$this->Model_facility_category->delete1($row['id']);
				$this->Model_facility_category->delete2($row['id']);
			}
			$this->Model_facility_category->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['facility_category']['category_name'].' dihapus dari Kategori Fasilitas');

			redirect(base_url().'admin/facility-category');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

}