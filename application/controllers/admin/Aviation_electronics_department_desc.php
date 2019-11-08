<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviation_electronics_department_desc extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_electronics_desc');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['aviation_electronics_desc'] = $this->Model_electronics_desc->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_aviation_electronics_desc',$data);
			$this->load->view('admin/view_footer');

		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function delete_aviation_electronics_desc_photo()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {

			$t = $this->Model_electronics_desc->get_aviation_electronics_desc_photo_name();
			unlink('./public/uploads/'.$t['aviation_electronics_desc_photo']);

			$form_data = array(
				'aviation_electronics_desc_photo' => ''
			);
			$this->Model_electronics_desc->aviation_electronics_desc_photo_update($form_data);

			//Add Log User
			helper_log("Delete", '[HAPUS] Deskripsi Foto Departemen Aviasi & Elektronik dihapus');
			
			redirect(base_url().'admin/aviation-electronics-department-desc');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function update()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff'))  {
			$data['error'] = '';
			$data['success'] = '';

			$data['aviation_electronics_desc'] = $this->Model_electronics_desc->show();

			if(isset($_POST['form_aviation_electronics_desc_photo'])) {
				$valid = 1;
				$path = $_FILES['aviation_electronics_desc_photo']['name'];
				$path_tmp = $_FILES['aviation_electronics_desc_photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'Anda harus mengunggah file jpg, jpeg, gif atau png<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'Anda harus memilih foto<br>';
				}
				if($valid == 1) {

					if($_POST['current_aviation_electronics_desc_photo'] != '')
					{
			    	
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_aviation_electronics_desc_photo']);	
					}

		    		// updating the data
					$final_name = 'aviation_electronics_desc_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'aviation_electronics_desc_photo' => $final_name
					);
					$this->Model_electronics_desc->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto Des. Departemen Aviasi & Elektronik diupdate');

					$data['success'] = 'Des. Departemen Aviasi & Elektronik Photo telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_aviation_electronics_desc'])) {			
				$form_data = array(
					'aviation_electronics_desc_heading' => $_POST['aviation_electronics_desc_heading'],
					'ed_desc_heading_idn' 				=> $_POST['ed_desc_heading_idn'],
					'aviation_electronics_desc_content' => $_POST['aviation_electronics_desc_content'],
					'ed_desc_content_idn' 				=> $_POST['ed_desc_content_idn'],
					'mt_aviation_electronics_desc'      => $_POST['aviation_electronics_desc_heading'],
					'mk_aviation_electronics_desc'      => $_POST['mk_aviation_electronics_desc'],
					'md_aviation_electronics_desc'      => $_POST['md_aviation_electronics_desc']
				);
				$this->Model_electronics_desc->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Departemen Aviasi & Elektronik diupdate');        	
				
				$data['success'] = 'Des. Departemen Aviasi & Elektronik telah berhasil diupdate!';
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['aviation_electronics_desc'] = $this->Model_electronics_desc->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_aviation_electronics_desc',$data);
			$this->load->view('admin/view_footer');

		} else {

			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			
			} else {
				show_404();
			}
		}
	}

}
