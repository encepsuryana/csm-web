<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_home extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_content_home');
	}

	public function index()
	{
		if ($this->session->userdata('role') == 'admin') {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['content_home'] = $this->Model_content_home->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_content_home',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}

	public function add()
	{
		if ($this->session->userdata('role') == 'admin') {
			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('heading', 'Heading', 'trim|required');
				$this->form_validation->set_rules('content', 'Content', 'trim|required');
				$this->form_validation->set_rules('link', 'Link', 'trim|required');

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
					$next_id = $this->Model_content_home->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'content-home-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'photo'   => $final_name,
						'heading' => $_POST['heading'],
						'content' => $_POST['content'],
						'link' => $_POST['link']

					);
					$this->Model_content_home->add($form_data);

					$data['success'] = 'Why Choose Us is added successfully!';

					unset($_POST['heading']);
					unset($_POST['content']);
					unset($_POST['link']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_add',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}

	}


	public function edit($id)
	{
		if ($this->session->userdata('role') == 'admin') {

    	// If there is no why choose in this id, then redirect
			$tot = $this->Model_content_home->content_home_check($id);
			if(!$tot) {
				redirect(base_url().'admin/content-home');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('heading', 'Heading', 'trim|required');
				$this->form_validation->set_rules('content', 'Content', 'trim|required');
				$this->form_validation->set_rules('link', 'Link', 'trim|required');

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
					$data['content_home'] = $this->Model_content_home->getData($id);

					if($path == '') {
						$form_data = array(
							'heading' => $_POST['heading'],
							'content' => $_POST['content'],
							'link' => $_POST['link']
						);
						$this->Model_content_home->update($id,$form_data);
					}
					else {
						unlink('./public/uploads/'.$data['content_home']['photo']);

						$final_name = 'content-home-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'photo'   => $final_name,
							'heading' => $_POST['heading'],
							'content' => $_POST['content'],
							'link' => $_POST['link']
						);
						$this->Model_content_home->update($id,$form_data);
					}

					$data['success'] = 'Content Main is updated successfully';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['content_home'] = $this->Model_content_home->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['content_home'] = $this->Model_content_home->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_edit',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}

	}


	public function delete($id) 
	{
		if ($this->session->userdata('role') == 'admin') {
			// If there is no why choose in this id, then redirect
			$tot = $this->Model_content_home->content_home_check($id);
			if(!$tot) {
				redirect(base_url().'admin/content-home');
				exit;
			}

			$data['content_home'] = $this->Model_content_home->getData($id);
			if($data['content_home']) {
				unlink('./public/uploads/'.$data['content_home']['photo']);
			}

			$this->Model_content_home->delete($id);
			redirect(base_url().'admin/content-home');
		} else {
			show_404();
		}
	}

	public function main_photo() {
		if ($this->session->userdata('role') == 'admin') {
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

					$data['content_home'] = $this->Model_content_home->get_photo();

					unlink('./public/uploads/'.$data['content_home']['main_photo']);

					$final_name = 'content-home-main-photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'main_photo' => $final_name
					);
					$this->Model_content_home->update_content_home_photo($form_data);			   

					$data['success'] = 'Content (Main Photo) is updated successfully!';
				}

				$data['content_home'] = $this->Model_content_home->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_main_photo',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['content_home'] = $this->Model_content_home->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_main_photo',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}

	}

	public function item_bg() {
		if ( ($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or($this->session->userdata('role') == 'staff') ) {

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
					$ext_check = $this->Model_header->extension_check_file($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload PDF Files<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a PDF Files<br>';
				}

				if($valid == 1) {

					$data['content_home'] = $this->Model_content_home->get_photo();

					unlink('./public/uploads/file/'.$data['content_home']['item_bg']);

					$final_name = 'Company_profile'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'item_bg' => $final_name
					);
					$this->Model_content_home->update_content_home_photo($form_data);			   

					$data['success'] = 'Content Home (Company Profile) is updated successfully!';
				}

				$data['content_home'] = $this->Model_content_home->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_item_bg',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['content_home'] = $this->Model_content_home->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_item_bg',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}

	}

}