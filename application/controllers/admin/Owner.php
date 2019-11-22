<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_owner');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if ($this->session->userdata('role') == 'admin') {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['owner'] = $this->Model_owner->get_owner();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_owner',$data);
			$this->load->view('admin/view_footer');

		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function update() {

		if ($this->session->userdata('role') == 'admin') {
			$data['error'] = '';
			$data['success'] = '';

			$data['owner'] = $this->Model_owner->get_owner();

			if(isset($_POST['form_owner1'])) {
				$valid = 1;
				$path = $_FILES['img_owner1']['name'];
				$path_tmp = $_FILES['img_owner1']['tmp_name'];
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
					// removing the existing photo
					unlink('./public/uploads/'.$data['owner']['img_owner1']);

		    		// updating the data
					$final_name = 'img-owner1'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'img_owner1' => $final_name
					);
					$this->Model_owner->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Owner 1 diupdate pada Owner');

					$data['success'] = 'Owner 1 telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_owner2'])) {
				$path = $_FILES['img_owner2']['name'];
				$path_tmp = $_FILES['img_owner2']['tmp_name'];
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
					// removing the existing photo
					unlink('./public/uploads/'.$data['owner']['img_owner2']);

		    		// updating the data
					$final_name = 'img-owner2'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'img_owner2' => $final_name
					);
					$this->Model_owner->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Owner 2 diupdate pada Owner');

					$data['success'] = 'Owner 2 telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_owner3'])) {
				$valid = 1;
				$path = $_FILES['img_owner3']['name'];
				$path_tmp = $_FILES['img_owner3']['tmp_name'];
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
					// removing the existing photo
					unlink('./public/uploads/'.$data['owner']['img_owner3']);

		    		// updating the data
					$final_name = 'img-owner3'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'img_owner3' => $final_name
					);
					$this->Model_owner->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Owner 3 diupdate pada Owner');

					$data['success'] = 'Owner 3 telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_owner4'])) {
				
				$valid = 1;
				$path = $_FILES['img_owner4']['name'];
				$path_tmp = $_FILES['img_owner4']['tmp_name'];
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
					// removing the existing photo
					unlink('./public/uploads/'.$data['owner']['img_owner4']);

		    		// updating the data
					$final_name = 'img-owner4'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'img_owner4' => $final_name
					);
					$this->Model_owner->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Owner 4 diupdate pada Owner');

					$data['success'] = 'Owner 4 telah berhasil diupdate!';    	
				}        	
			}
			
			if(isset($_POST['label_owner1'])) {			
				$form_data = array(
					'des_owner1'	=> $_POST['des_owner1']
				);
				$this->Model_owner->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Owner 1 diupdate pada Owner');        	
				
				$data['success'] = 'Des. Owner 1 telah berhasil diupdate!';
			}

			if(isset($_POST['label_owner2'])) {			
				$form_data = array(
					'des_owner2'	=> $_POST['des_owner2']
				);
				$this->Model_owner->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Owner 2 diupdate pada Owner');        	
				
				$data['success'] = 'Des. Owner 2 telah berhasil diupdate!';
			}

			if(isset($_POST['label_owner3'])) {			
				$form_data = array(
					'des_owner3'	=> $_POST['des_owner3']
				);
				$this->Model_owner->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Owner 3 diupdate pada Owner');        	
				
				$data['success'] = 'Des. Owner 3 telah berhasil diupdate!';
			}

			if(isset($_POST['label_owner4'])) {			
				$form_data = array(
					'des_owner4'	=> $_POST['des_owner4']
				);
				$this->Model_owner->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Des. Owner 4 diupdate pada Owner');        	
				
				$data['success'] = 'Des. Owner 4 telah berhasil diupdate!';
			}

			$header['setting'] 	= $this->Model_header->get_setting_data();
			$data['owner'] 		= $this->Model_owner->get_owner();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_owner',$data);
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