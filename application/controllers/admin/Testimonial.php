<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_testimonial');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['testimonial'] = $this->Model_testimonial->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_testimonial',$data);
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
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
				$this->form_validation->set_rules('company', 'Company', 'trim|required');
				$this->form_validation->set_rules('comment', 'Comment', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}

				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
					}
				} else {
					$valid = 0;
					$error .= 'You must have to select a photo for featured photo<br>';
				}

				if($valid == 1) 
				{
					$next_id = $this->Model_testimonial->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'testimonial-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'name'        => $_POST['name'],
						'designation' => $_POST['designation'],
						'company'     => $_POST['company'],
						'photo'       => $final_name,
						'comment'     => $_POST['comment']
					);
					$this->Model_testimonial->add($form_data);

					$data['success'] = 'Testimonial is added successfully!';

					unset($_POST['name']);
					unset($_POST['designation']);
					unset($_POST['company']);
					unset($_POST['comment']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_add',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

    	// If there is no testimonial in this id, then redirect
			$tot = $this->Model_testimonial->testimonial_check($id);
			if(!$tot) {
				redirect(base_url().'admin/testimonial');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
				$this->form_validation->set_rules('company', 'Company', 'trim|required');
				$this->form_validation->set_rules('comment', 'Comment', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}

				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
					}
				}

				if($valid == 1) 
				{
					$data['testimonial'] = $this->Model_testimonial->getData($id);

					if($path == '') {
						$form_data = array(
							'name'        => $_POST['name'],
							'designation' => $_POST['designation'],
							'company'     => $_POST['company'],
							'comment'     => $_POST['comment']
						);
						$this->Model_testimonial->update($id,$form_data);
					}
					else {
						unlink('./public/uploads/'.$data['testimonial']['photo']);

						$final_name = 'testimonial-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'name'        => $_POST['name'],
							'designation' => $_POST['designation'],
							'company'     => $_POST['company'],
							'photo'       => $final_name,
							'comment'     => $_POST['comment']
						);
						$this->Model_testimonial->update($id,$form_data);
					}

					$data['success'] = 'Testimonial is updated successfully';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['testimonial'] = $this->Model_testimonial->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['testimonial'] = $this->Model_testimonial->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin')) {

		// If there is no testimonial in this id, then redirect
			$tot = $this->Model_testimonial->testimonial_check($id);
			if(!$tot) {
				redirect(base_url().'admin/testimonial');
				exit;
			}

			$data['testimonial'] = $this->Model_testimonial->getData($id);
			if($data['testimonial']) {
				unlink('./public/uploads/'.$data['testimonial']['photo']);
			}

			$this->Model_testimonial->delete($id);
			redirect(base_url().'admin/testimonial');
		} else {
			show_404();
		}
	}

	public function main_photo() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

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

					$data['testimonial'] = $this->Model_testimonial->get_photo();

					unlink('./public/uploads/'.$data['testimonial']['main_photo']);

					$final_name = 'testimonial-main-photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'main_photo' => $final_name
					);
					$this->Model_testimonial->update_testimonial_photo($form_data);			   

					$data['success'] = 'Testimonial (Main Photo) is updated successfully!';
				}

				$data['testimonial'] = $this->Model_testimonial->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_photo',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['testimonial'] = $this->Model_testimonial->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_testimonial_photo',$data);
				$this->load->view('admin/view_footer');
			}
		}
		else {
			show_404();
		}
	}
}