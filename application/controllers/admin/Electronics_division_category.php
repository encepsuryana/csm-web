<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Electronics_division_category extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_electronics_division_category');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['electronics_division_category'] = $this->Model_electronics_division_category->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_electronics_division_category',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
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

				$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

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
					$this->Model_electronics_division_category->add($form_data);

					$data['success'] = 'electronics_division category is added successfully!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_category_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_category_add',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
		
    	// If there is no service in this id, then redirect
			$tot = $this->Model_electronics_division_category->electronics_division_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/electronics_division-category');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				} else {

            	// Duplicate Category Checking
					$data['electronics_division_category'] = $this->Model_electronics_division_category->getData($id);
					$total = $this->Model_electronics_division_category->duplicate_check($_POST['category_name'],$data['electronics_division_category']['category_name']);				
					if($total) {
						$valid = 0;
						$data['error'] = 'Category name already exists';
					}
				}

				if($valid == 1) 
				{
		    	// Updating Data
					$form_data = array(
						'category_name'=> $_POST['category_name'],
						'status'       => $_POST['status']
					);
					$this->Model_electronics_division_category->update($id,$form_data);

					$data['success'] = 'electronics_division Category is updated successfully';
				}

				$data['electronics_division_category'] = $this->Model_electronics_division_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_category_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['electronics_division_category'] = $this->Model_electronics_division_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_category_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

		// If there is no electronics_division category in this id, then redirect
			$tot = $this->Model_electronics_division_category->electronics_division_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/electronics_division-category');
				exit;
			}


			$result = $this->Model_electronics_division_category->getData1($id);
			foreach ($result as $row) {
				$result1 = $this->Model_electronics_division_category->show_electronics_division_by_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
					$banner = $row1['banner'];
				}
				if($photo!='') {
					unlink('./public/uploads/'.$photo);
				}
				if($banner!='') {
					unlink('./public/uploads/'.$banner);
				}
				$result1 = $this->Model_electronics_division_category->show_electronics_division_photo_by_electronics_division_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
					unlink('./public/uploads/electronics_division_photos/'.$photo);
				}

				$this->Model_electronics_division_category->delete1($row['id']);
				$this->Model_electronics_division_category->delete2($row['id']);
			}
			$this->Model_electronics_division_category->delete($id);

			redirect(base_url().'admin/electronics_division-category');
		} else {
			show_404();
		}
	}

}