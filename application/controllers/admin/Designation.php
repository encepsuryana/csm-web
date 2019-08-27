<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_designation');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['designation'] = $this->Model_designation->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_designation',$data);
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

				$this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) 
				{
					$form_data = array(
						'designation_name'=> $_POST['designation_name']
					);
					$this->Model_designation->add($form_data);

					$data['success'] = 'Designation is added successfully!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_designation_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_designation_add',$data);
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
			$tot = $this->Model_designation->designation_check($id);
			if(!$tot) {
				redirect(base_url().'admin/designation');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('designation_name', 'Designation Name', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				} else {

            	// Duplicate designation Checking
					$data['designation'] = $this->Model_designation->getData($id);
					$total = $this->Model_designation->duplicate_check($_POST['designation_name'],$data['designation']['designation_name']);
					if($total) {
						$valid = 0;
						$data['error'] = 'Designation name already exists';
					}
				}

				if($valid == 1) 
				{
		    	// Updating Data
					$form_data = array(
						'designation_name'=> $_POST['designation_name']
					);
					$this->Model_designation->update($id,$form_data);

					$data['success'] = 'Designation Name is updated successfully';
				}

				$data['designation'] = $this->Model_designation->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_designation_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['designation'] = $this->Model_designation->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_designation_edit',$data);
				$this->load->view('admin/view_footer');
			}	
		}
		else {
			show_404();
		}
	}

	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
		// If there is no designation in this id, then redirect
			$tot = $this->Model_designation->designation_check($id);
			if(!$tot) {
				redirect(base_url().'admin/designation');
				exit;
			}

			$result = $this->Model_designation->getData1($id);
			foreach ($result as $row) {			
				unlink('./public/uploads/'.$row['photo']);
			}
			$this->Model_designation->delete($id);
			$this->Model_designation->delete1($id);

			redirect(base_url().'admin/designation');
		}
		else {
			show_404();
		}

	}
}