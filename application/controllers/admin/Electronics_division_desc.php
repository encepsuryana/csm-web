<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Electronics_division_desc extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_electronics_division_desc');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['electronics_division_desc'] = $this->Model_electronics_division_desc->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_electronics_division_desc',$data);
			$this->load->view('admin/view_footer');

		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function delete_electronics_division_desc_photo()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {

			$t = $this->Model_electronics_division_desc->get_electronics_division_desc_photo_name();
			unlink('./public/uploads/'.$t['electronics_division_desc_photo']);

			$form_data = array(
				'electronics_division_desc_photo' => ''
			);
			$this->Model_electronics_division_desc->electronics_division_desc_photo_update($form_data);

			//Add Log User
			helper_log("Delete", '[HAPUS] Deskripsi Foto Divisi Elektronik dihapus');
			
			redirect(base_url().'admin/electronics_division_desc');
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

			$data['electronics_division_desc'] = $this->Model_electronics_division_desc->show();

			if(isset($_POST['form_electronics_division_desc_photo'])) {
				$valid = 1;
				$path = $_FILES['electronics_division_desc_photo']['name'];
				$path_tmp = $_FILES['electronics_division_desc_photo']['tmp_name'];
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

					if($_POST['current_electronics_division_desc_photo'] != '')
					{
			    	
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_electronics_division_desc_photo']);	
					}

		    		// updating the data
					$final_name = 'electronics_division_desc_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'electronics_division_desc_photo' => $final_name
					);
					$this->Model_electronics_division_desc->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto Des. Divisi Elektronik diupdate');

					$data['success'] = 'Des. Divisi Elektronik Photo telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_electronics_division_desc'])) {			
				$form_data = array(
					'electronics_division_desc_heading' => $_POST['electronics_division_desc_heading'],
					'electronics_division_desc_content' => $_POST['electronics_division_desc_content'],
					'mt_electronics_division_desc'      => $_POST['electronics_division_desc_heading'],
					'mk_electronics_division_desc'      => $_POST['mk_electronics_division_desc'],
					'md_electronics_division_desc'      => $_POST['md_electronics_division_desc']
				);
				$this->Model_electronics_division_desc->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Divisi Elektronik diupdate');        	
				
				$data['success'] = 'Des. Divisi Elektronik telah berhasil diupdate!';
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['electronics_division_desc'] = $this->Model_electronics_division_desc->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_electronics_division_desc',$data);
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
