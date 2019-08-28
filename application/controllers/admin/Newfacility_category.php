<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newfacility_category extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_newfacility_category');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['newfacility_category'] = $this->Model_newfacility_category->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_newfacility_category',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}

	public function add()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {
		
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
					$this->Model_newfacility_category->add($form_data);

					$data['success'] = 'newfacility category is added successfully!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_newfacility_category_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_newfacility_category_add',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {
		
    	// If there is no service in this id, then redirect
			$tot = $this->Model_newfacility_category->newfacility_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/newfacility-category');
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
					$data['newfacility_category'] = $this->Model_newfacility_category->getData($id);
					$total = $this->Model_newfacility_category->duplicate_check($_POST['category_name'],$data['newfacility_category']['category_name']);				
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
					$this->Model_newfacility_category->update($id,$form_data);

					$data['success'] = 'newfacility Category is updated successfully';
				}

				$data['newfacility_category'] = $this->Model_newfacility_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_newfacility_category_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['newfacility_category'] = $this->Model_newfacility_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_newfacility_category_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if ($this->session->userdata('role') == 'admin') {

		// If there is no newfacility category in this id, then redirect
			$tot = $this->Model_newfacility_category->newfacility_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/newfacility-category');
				exit;
			}


			$result = $this->Model_newfacility_category->getData1($id);
			foreach ($result as $row) {
				$result1 = $this->Model_newfacility_category->show_newfacility_by_id($row['id']);
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
				$result1 = $this->Model_newfacility_category->show_newfacility_photo_by_newfacility_id($row['id']);
				foreach ($result1 as $row1) {
					$photo = $row1['photo'];
					unlink('./public/uploads/facility_photos/'.$photo);
				}

				$this->Model_newfacility_category->delete1($row['id']);
				$this->Model_newfacility_category->delete2($row['id']);
			}
			$this->Model_newfacility_category->delete($id);

			redirect(base_url().'admin/newfacility-category');
		} else {
			show_404();
		}
	}

}