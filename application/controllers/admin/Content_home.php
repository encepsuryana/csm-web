<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class content_home extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_content_home');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if ($this->session->userdata('role') == 'admin') {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['content_home'] = $this->Model_content_home->get_content_home();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_content_home',$data);
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

			$data['content_home'] = $this->Model_content_home->get_content_home();

			if(isset($_POST['form_download'])) {
				
				$valid = 1;
				$path = $_FILES['bg_download']['name'];
				$path_tmp = $_FILES['bg_download']['tmp_name'];
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
					unlink('./public/uploads/'.$data['content_home']['bg_download']);

		    		// updating the data
					$final_name = 'bg-download'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'bg_download' => $final_name
					);
					$this->Model_content_home->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Background Download diupdate pada Konten Utama');

					$data['success'] = 'Background Download telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_product'])) {
				$valid = 1;
				$path = $_FILES['bg_product']['name'];
				$path_tmp = $_FILES['bg_product']['tmp_name'];
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
					unlink('./public/uploads/'.$data['content_home']['bg_product']);

		    		// updating the data
					$final_name = 'bg-product'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'bg_product' => $final_name
					);
					$this->Model_content_home->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Background Produk diupdate pada Konten Utama');

					$data['success'] = 'Background Produk telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_career'])) {
				$valid = 1;
				$path = $_FILES['bg_career']['name'];
				$path_tmp = $_FILES['bg_career']['tmp_name'];
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
					unlink('./public/uploads/'.$data['content_home']['bg_career']);

		    		// updating the data
					$final_name = 'bg-career'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'bg_career' => $final_name
					);
					$this->Model_content_home->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Background Karir diupdate pada Konten Utama');

					$data['success'] = 'Background Karir telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['form_facility'])) {
				$valid = 1;
				$path = $_FILES['bg_facility']['name'];
				$path_tmp = $_FILES['bg_facility']['tmp_name'];
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
					unlink('./public/uploads/'.$data['content_home']['bg_facility']);

		    		// updating the data
					$final_name = 'bg-facility'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'bg_facility' => $final_name
					);
					$this->Model_content_home->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Background Fasilitas diupdate pada Konten Utama');

					$data['success'] = 'Background Fasilitas telah berhasil diupdate!';    	
				}        	
			}

			if(isset($_POST['label_download'])) {			
				$form_data = array(
					'icon_download'	=> $_POST['icon_download'],
					'link_download' => $_POST['link_download']
				);
				$this->Model_content_home->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Label Profil Perusahaan diupdate pada Konten Utama');        	
				
				$data['success'] = 'Label Profil Perusahaan telah berhasil diupdate!';
			}

			if(isset($_POST['label_product'])) {			
				$form_data = array(
					'icon_product'	=> $_POST['icon_product'],
					'link_product'	=> $_POST['link_product']
				);
				$this->Model_content_home->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Label Produk Kami diupdate pada Konten Utama');        	
				
				$data['success'] = 'Label Produk Kami telah berhasil diupdate!';
			}

			if(isset($_POST['label_career'])) {			
				$form_data = array(
					'icon_career'	=> $_POST['icon_career'],
					'link_career'	=> $_POST['link_career']
				);
				$this->Model_content_home->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Label Karir diupdate pada Konten Utama');        	
				
				$data['success'] = 'Label Karir telah berhasil diupdate!';
			}

			if(isset($_POST['label_facility'])) {			
				$form_data = array(
					'icon_facility'	=> $_POST['icon_facility'],
					'link_facility'	=> $_POST['link_facility']
				);
				$this->Model_content_home->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Label Fasilitas diupdate pada Konten Utama');        	
				
				$data['success'] = 'Label Fasilitas telah berhasil diupdate!';
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['content_home'] = $this->Model_content_home->get_content_home();
			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_content_home',$data);
			$this->load->view('admin/view_footer');

		} else {

			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}

		}
	}
	
	public function company_profile() {
		if ( ($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or($this->session->userdata('role') == 'staff') ) {

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';

			if(isset($_POST['form1'])) {
				$valid = 1;

				$path = $_FILES['file1']['name'];
				$path_tmp = $_FILES['file1']['tmp_name'];

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

					$data['content_home'] = $this->Model_content_home->get_file_pdf();

					unlink('./public/uploads/file/'.$data['content_home']['file_pdf1']);

					$final_name = 'profile_perusahaan1'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'file_pdf1' => $final_name
					);
					$this->Model_content_home->update_content_home_company($form_data);	
					
					//Add Log User
					helper_log("edit", '[EDIT] Data Profil Perusahaan Engineering diperbaharui');		

					$data['success'] = 'Profil Perusahaan Engineering telah berhasil diupdate!';
				}
			}

			if(isset($_POST['form2'])) {
				$valid = 1;

				$path = $_FILES['file2']['name'];
				$path_tmp = $_FILES['file2']['tmp_name'];

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

					$data['content_home'] = $this->Model_content_home->get_file_pdf();

					unlink('./public/uploads/file/'.$data['content_home']['file_pdf2']);

					$final_name = 'profile_perusahaan2'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'file_pdf2' => $final_name
					);
					$this->Model_content_home->update_content_home_company($form_data);	
					
					//Add Log User
					helper_log("edit", '[EDIT] Data Profil Perusahaan Divisi Elektronik diperbaharui');		

					$data['success'] = 'Profil Perusahaan Divisi Elektronik telah berhasil diupdate!';
				}
			}

			if(isset($_POST['form3'])) {
				$valid = 1;

				$path = $_FILES['file3']['name'];
				$path_tmp = $_FILES['file3']['tmp_name'];

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

					$data['content_home'] = $this->Model_content_home->get_file_pdf();

					unlink('./public/uploads/file/'.$data['content_home']['file_pdf3']);

					$final_name = 'profile_perusahaan3'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'file_pdf3' => $final_name
					);
					$this->Model_content_home->update_content_home_company($form_data);	
					
					//Add Log User
					helper_log("edit", '[EDIT] Data Profil Perusahaan Engineering & Divisi Elektronik diperbaharui');		

					$data['success'] = 'Profil Perusahaan Engineering & Divisi Elektronik telah berhasil diupdate!';
				}
			}

			if(isset($_POST['form_spanduk1'])) {
				$valid = 1;
				$path = $_FILES['spanduk1']['name'];
				$path_tmp = $_FILES['spanduk1']['tmp_name'];
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
					$data['content_home'] = $this->Model_content_home->get_file_spanduk();
					
		    		// removing the existing photo
					unlink('./public/uploads/file/'.$data['content_home']['spanduk1']);

		    		// updating the data
					$final_name = 'profile_perusahaan1'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'spanduk1' => $final_name
					);

					$this->Model_content_home->update_content_home_company($form_data);	

					helper_log("edit", '[EDIT] Data: Spanduk Profile Perusahaan Engineering diperbaharui');

					$data['success'] = 'Spanduk Profil Perusahaan Engineering telah berhasil diupdate!'; 
				}        	
			}

			if(isset($_POST['form_spanduk2'])) {
				$valid = 1;
				$path = $_FILES['spanduk2']['name'];
				$path_tmp = $_FILES['spanduk2']['tmp_name'];
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
					$data['content_home'] = $this->Model_content_home->get_file_spanduk();
					
		    		// removing the existing photo
					unlink('./public/uploads/file/'.$data['content_home']['spanduk2']);

		    		// updating the data
					$final_name = 'profile_perusahaan2'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'spanduk2' => $final_name
					);

					$this->Model_content_home->update_content_home_company($form_data);	

					helper_log("edit", '[EDIT] Data: Spanduk Profile Perusahaan Divisi Elektronik diperbaharui');

					$data['success'] = 'Spanduk Profil Perusahaan Divisi Elektronik telah berhasil diupdate!'; 
				}        	
			}

			if(isset($_POST['form_spanduk3'])) {
				$valid = 1;
				$path = $_FILES['spanduk3']['name'];
				$path_tmp = $_FILES['spanduk3']['tmp_name'];
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
					
					$data['content_home'] = $this->Model_content_home->get_file_spanduk();
					
		    		// removing the existing photo
					unlink('./public/uploads/file/'.$data['content_home']['spanduk3']);

		    		// updating the data
					$final_name = 'profile_perusahaan3'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/file/'.$final_name );

					$form_data = array(
						'spanduk3' => $final_name
					);

					$this->Model_content_home->update_content_home_company($form_data);	

					helper_log("edit", '[EDIT] Data: Spanduk Profile Perusahaan Engineering & Divisi Elektronik diperbaharui');

					$data['success'] = 'Spanduk Profil Perusahaan Engineering & Divisi Elektronik telah berhasil diupdate!'; 
				}        	
			}

			$data['content_home'] = $this->Model_content_home->get_file_spanduk();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_content_home_company_profile',$data);
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