<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_home extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_content_home');
		$this->load->model('admin/Model_log');
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

				$this->form_validation->set_rules('heading', 'Ikon', 'trim|required');
				$this->form_validation->set_rules('content', 'Judul', 'trim|required');
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
						$error .= 'Anda harus mengunggah file jpg, jpeg, gif atau png untuk foto unggulan<br>';
					}
				}

				if($valid == 1) 
				{
					$data['content_home'] = $this->Model_content_home->getData($id);

					if($path == '') {
						$form_data = array(
							'heading' => $_POST['heading'],
							'content' => $_POST['content'],
							'link'    => $_POST['link']
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
							'link'    => $_POST['link']
						);
						$this->Model_content_home->update($id,$form_data);
					}
					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['content'].' Berhasil diupdate');
					$data['success'] = ' Konten Beranda telah berhasil diupdate';
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
						$data['error'] = 'Anda harus mengunggah File PDF<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'Anda harus mengunggah File PDF<br>';
				}

				if($valid == 1) {

					$data['content_home'] = $this->Model_content_home->get_photo();

					unlink('./public/uploads/file/'.$data['content_home']['file_pdf']);

					$final_name = 'Company_profile'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'file_pdf' => $final_name
					);
					$this->Model_content_home->update_content_home_photo($form_data);	
					
					//Add Log User
					helper_log("edit", '[EDIT] Company Profile diperbaharui');		

					$data['success'] = 'Konten Beranda (Company Profile) telah berhasil diupdate!';
				}

				$data['content_home'] = $this->Model_content_home->get_photo();

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_commpany_profile',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['content_home'] = $this->Model_content_home->get_photo();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_content_home_commpany_profile',$data);
				$this->load->view('admin/view_footer');
			}
		} else {
			show_404();
		}

	}

}