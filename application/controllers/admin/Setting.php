<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_setting');
		$this->load->model('admin/Model_log');
	}
	
	public function index() {
		if ($this->session->userdata('role') == 'admin') {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_setting',$data);
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

			$header['setting'] = $this->Model_header->get_setting_data();

			if(isset($_POST['form_logo'])) {
				$valid = 1;
				$path = $_FILES['photo_logo']['name'];
				$path_tmp = $_FILES['photo_logo']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['logo']);

		    		// updating the data
					$final_name = 'logo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'logo' => $final_name
					);
					$this->Model_setting->update($form_data);
					//Add Log User
					helper_log("edit", '[EDIT] Data: Logo diupdate pada Settings');
					$data['success'] = 'Logo telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_logo2'])) {
				$valid = 1;
				$path = $_FILES['photo_logo2']['name'];
				$path_tmp = $_FILES['photo_logo2']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['logo2']);

		    		// updating the data
					$final_name = 'logo2'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'logo2' => $final_name
					);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Logo2 diupdate pada Settings');
					$data['success'] = 'logo Art telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_admin_logo'])) {
				$valid = 1;
				$path = $_FILES['photo_logo_admin']['name'];
				$path_tmp = $_FILES['photo_logo_admin']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['logo_admin']);

		    		// updating the data
					$final_name = 'logo_admin'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'logo_admin' => $final_name
					);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Admin Logo diupdate pada Settings');
					$data['success'] = 'Admin Logo telah berhasil diupdate!';		    	
				}        	
			}
			
			if(isset($_POST['form_favicon'])) {
				$valid = 1;
				$path = $_FILES['photo_favicon']['name'];
				$path_tmp = $_FILES['photo_favicon']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['favicon']);

		    		// updating the data
					$final_name = 'favicon'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'favicon' => $final_name
					);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Favicon pada Settings');
					$data['success'] = 'Favicon telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_login_bg'])) {
				$valid = 1;
				$path = $_FILES['login_bg']['name'];
				$path_tmp = $_FILES['login_bg']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['login_bg']);

		    		// updating the data
					$final_name = 'login_bg'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'login_bg' => $final_name
					);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Login Background diupdate pada Settings');
					$data['success'] = 'Login Background Photo telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_general'])) {			
				$form_data = array(
					'general_companyname' => $_POST['general_companyname'],
					'footer_copyright'    => $_POST['footer_copyright'],
					'footer_address'      => $_POST['footer_address'],
					'footer_phone'        => $_POST['footer_phone'],
					'footer_working_hour' => $_POST['footer_working_hour'],
					'top_bar_phone'       => $_POST['top_bar_phone'],
					'contact_map_iframe'  => $_POST['contact_map_iframe']
				);
				$this->Model_setting->update($form_data);   	
				helper_log("edit", '[EDIT] Data: General diupdate pada Settings');
				$data['success'] = 'General Setting telah berhasil diupdate!';
			}

			if(isset($_POST['form_email'])) {			
				$form_data = array(
					'receive_email'                => $_POST['receive_email'],
					'receive_password'             => $_POST['receive_password'],
					'protocol'             		   => $_POST['protocol'],
					'smtp_host'             	   => $_POST['smtp_host'],
					'smtp_port'             	   => $_POST['smtp_port'],
					'logo_image' 				   => $_POST['logo_image'],
					'logo_alt' 					   => $_POST['logo_alt'],
					'background' 	  	     	   => $_POST['background'],
					'text_color' 				   => $_POST['text_color'],
					'company_name' 				   => $_POST['company_name'],
					'company_address' 			   => $_POST['company_address'],
					'company_telp' 				   => $_POST['company_telp'],
					'company_website' 			   => $_POST['company_website'],
					'reset_password_email_subject' => $_POST['reset_password_email_subject']
				);
				$this->Model_setting->update($form_data);
				helper_log("edit", '[EDIT] Data: Email Settings diupdate pada Settings');   	
				$data['success'] = 'Email Setting telah berhasil diupdate!';
			}


			if(isset($_POST['form_sidebar_footer'])) {			
				$form_data = array(
					'total_recent_post'  => $_POST['total_recent_post'],
					'total_popular_post' => $_POST['total_popular_post'],
					'total_product_post' => $_POST['total_product_post']
				);
				$this->Model_setting->update($form_data);
				helper_log("edit", '[EDIT] Data: Sidebar Footer diupdate pada Settings');   	
				$data['success'] = 'Sidebar and Footer Setting telah berhasil diupdate!';
			}

			if(isset($_POST['form_counter_bg'])) {
				$valid = 1;
				$path = $_FILES['counter_bg']['name'];
				$path_tmp = $_FILES['counter_bg']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['counter_bg']);

		    		// updating the data
					$final_name = 'counter_bg'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'counter_bg' => $final_name
					);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Counter Background diupdate pada Settings');
					$data['success'] = 'Counter Background Photo telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_counter'])) {			
				$form_data = array(
					'counter1_value' => $_POST['counter1_value'],
					'counter2_value' => $_POST['counter2_value'],
					'counter3_value' => $_POST['counter3_value'],
					'counter4_value' => $_POST['counter4_value']
				);
				$this->Model_setting->update($form_data);
				helper_log("edit", '[EDIT] Data: Counter diupdate pada Settings');   	
				$data['success'] = 'Counter Setting (Home Page) telah berhasil diupdate!';
			}

			if(isset($_POST['form_color'])) {			
				$form_data = array(
					'theme_color_1' => $_POST['theme_color_1'],
					'theme_color_2' => $_POST['theme_color_2']
				);
				$this->Model_setting->update($form_data);
				helper_log("edit", '[EDIT] Data: Theme Color diupdate pada Settings');   	
				$data['success'] = 'Theme Colors are updated successfully!';
			}

			if(isset($_POST['form_banner'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
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
					unlink('./public/uploads/'.$header['setting']['banner']);
					$final_name = 'banner'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner' => $final_name);
					$this->Model_setting->update($form_data);
					helper_log("edit", '[EDIT] Data: Background diupdate pada Settings');
					$data['success'] = 'Background telah berhasil diupdate!';		    	
				}        	
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['setting'] = $this->Model_header->get_setting_data();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_setting',$data);
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
