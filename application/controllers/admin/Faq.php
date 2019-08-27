<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_faq');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['faq'] = $this->Model_faq->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_faq',$data);
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
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('faq_title', 'FAQ title', 'trim|required');
				$this->form_validation->set_rules('faq_content', 'FAQ content', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1)
				{				
					$form_data = array(
						'faq_title' => $_POST['faq_title'],
						'faq_content' => $_POST['faq_content'],
						'faq_show' => $_POST['faq_show']
					);
					$this->Model_faq->add($form_data);

					$data['success'] = 'FAQ is added successfully!';

					unset($_POST['faq_title']);
					unset($_POST['faq_content']);
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_add',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
    	// If there is no FAQ in this id, then redirect
			$tot = $this->Model_faq->faq_check($id);
			if(!$tot) {
				redirect(base_url().'admin/faq');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('faq_title', 'FAQ title', 'trim|required');
				$this->form_validation->set_rules('faq_content', 'FAQ content', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) 
				{
					$data['faq'] = $this->Model_faq->getData($id);

					$form_data = array(
						'faq_title'  => $_POST['faq_title'],
						'faq_content'=> $_POST['faq_content'],
						'faq_show'   => $_POST['faq_show']
					);
					$this->Model_faq->update($id,$form_data);

					$data['success'] = 'FAQ is updated successfully';
				}

				$data['faq'] = $this->Model_faq->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['faq'] = $this->Model_faq->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}

	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd')) {
		// If there is no FAQ in this id, then redirect
			$tot = $this->Model_faq->faq_check($id);
			if(!$tot) {
				redirect(base_url().'admin/faq');
				exit;
			}

			$this->Model_faq->delete($id);
			redirect(base_url().'admin/faq');
		} else {
			show_404();
		}
	}

	public function main_photo() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd')) { 
			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';

			if(isset($_POST['form1'])) {
				$valid = 1;
				
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo for featured photo<br>';
				}

				if($valid == 1) {

					$data['faq'] = $this->Model_faq->get_photo();

					unlink('./public/uploads/'.$data['faq']['main_photo']);

					$final_name = 'faq-main-photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'main_photo' => $final_name
					);
					$this->Model_faq->update_faq_photo($form_data);			   

					$data['success'] = 'FAQ (Main Photo) is updated successfully!';
				}

				$data['faq'] = $this->Model_faq->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_photo',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['faq'] = $this->Model_faq->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_faq_photo',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}
	}

}