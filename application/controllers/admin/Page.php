<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_page');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['page'] = $this->Model_page->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_page',$data);
			$this->load->view('admin/view_footer');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function delete_about_photo() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {

			$t = $this->Model_page->get_about_photo_name();
			unlink('./public/uploads/'.$t['about_photo']);

			$form_data = array(
				'about_photo' => ''
			);
			$this->Model_page->about_photo_update($form_data);

			//Add Log User
			helper_log("Delete", '[HAPUS] Foto tentang perusahaan telah dihapus');

			redirect(base_url().'admin/page');
		} else {
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function delete_structure_photo() {
		
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$t = $this->Model_page->get_structure_photo_name();
			unlink('./public/uploads/'.$t['structure_photo']);

			$form_data = array(
				'structure_photo' => ''
			);
			$this->Model_page->about_photo_update($form_data);

			//Add Log User
			helper_log("Delete", '[HAPUS] Foto struktur perusahaan telah dihapus');

			redirect(base_url().'admin/page');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		} 
	}

	public function update() {
		if ($this->session->userdata('role') == 'admin')  {
			$data['error'] = '';
			$data['success'] = '';

			$data['page'] = $this->Model_page->show();

			if(isset($_POST['form_about_photo'])) {
				$valid = 1;
				$path = $_FILES['about_photo']['name'];
				$path_tmp = $_FILES['about_photo']['tmp_name'];
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

					if($_POST['current_about_photo'] != '') {
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_about_photo']);	
					}

		    		// updating the data
					$final_name = 'about_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'about_photo' => $final_name
					);
					$this->Model_page->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto Tentang Perusahaan telah diupdate');

					$data['success'] = 'Foto Perusahaan telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_structure_photo'])) {
				$valid = 1;
				$path = $_FILES['structure_photo']['name'];
				$path_tmp = $_FILES['structure_photo']['tmp_name'];
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

					if($_POST['current_structure_photo'] != '')
					{
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_structure_photo']);	
					}

		    		// updating the data
					$final_name = 'structure_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'structure_photo' => $final_name
					);
					
					$this->Model_page->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto Struktur Perusahaan telah diupdate');
					
					$data['success'] = 'Struktur Organisasi telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_home'])) {			
				$form_data = array(
					'mk_home' => $_POST['mk_home'],
					'md_home' => $_POST['md_home']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Beranda telah diupdate');

				$data['success'] = 'Seting Halaman telah berhasil diupdate!';
			}

			if(isset($_POST['form_about'])) {			
				$form_data = array(
					'about_content' 		=> $_POST['about_content'],
					'about_content_idn' 	=> $_POST['about_content_idn'],
					'profile_content' 		=> $_POST['profile_content'],
					'profile_content_idn' 	=> $_POST['profile_content_idn'],
					'culture_content' 		=> $_POST['culture_content'],
					'culture_content_idn' 	=> $_POST['culture_content_idn'],
					'quality_content' 		=> $_POST['quality_content'],
					'quality_content_idn' 	=> $_POST['quality_content_idn'],
					'mission_content' 		=> $_POST['mission_content'],
					'mission_content_idn' 	=> $_POST['mission_content_idn'],
					'vision_content' 		=> $_POST['vision_content'],
					'vision_content_idn' 	=> $_POST['vision_content_idn'],
					'mk_about'      		=> $_POST['mk_about'],
					'md_about'      		=> $_POST['md_about']
				);
				$this->Model_page->update($form_data);
				
				//Add Log User
				helper_log("edit", '[EDIT] Halaman Tentang Perusahaan telah diupdate');

				$data['success'] = 'Setting Halaman Tentang telah berhasil diupdate!';
			}

			if(isset($_POST['form_gallery'])) {			
				$form_data = array(
					'mk_gallery' => $_POST['mk_gallery'],
					'md_gallery' => $_POST['md_gallery']
				);
				$this->Model_page->update($form_data);
				
				//Add Log User
				helper_log("edit", '[EDIT] Halaman Galeri telah diupdate');

				$data['success'] = 'Setting Halaman Galeri telah berhasil diupdate!';
			}

			if(isset($_POST['form_product'])) {			
				$form_data = array(
					'mk_product' => $_POST['mk_product'],
					'md_product' => $_POST['md_product']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Produk telah diupdate');

				$data['success'] = 'Setting Halaman Produk telah berhasil diupdate!';
			}

			if(isset($_POST['form_service'])) {			
				$form_data = array(
					'mk_service' => $_POST['mk_service'],
					'md_service' => $_POST['md_service']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Layanan telah diupdate');

				$data['success'] = 'Setting Halaman Layanan telah berhasil diupdate!';
			}

			if(isset($_POST['form_facility'])) {			
				$form_data = array(
					'mk_facility' => $_POST['mk_facility'],
					'md_facility' => $_POST['md_facility']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Fasilitas telah diupdate');

				$data['success'] = 'Setting Halaman Fasilitas telah berhasil diupdate!';
			}

			if(isset($_POST['form_portfolio'])) {			
				$form_data = array(
					'mk_portfolio' => $_POST['mk_portfolio'],
					'md_portfolio' => $_POST['md_portfolio']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Portofolio telah diupdate');

				$data['success'] = 'Setting Halaman Portofolio telah berhasil diupdate!';
			}

			if(isset($_POST['form_testimonial'])) {			
				$form_data = array(
					'mk_testimonial' => $_POST['mk_testimonial'],
					'md_testimonial' => $_POST['md_testimonial']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Testimonial telah diupdate');

				$data['success'] = 'Setting Halaman Testimonial telah berhasil diupdate!';
			}

			if(isset($_POST['form_news'])) {			
				$form_data = array(
					'mk_news' => $_POST['mk_news'],
					'md_news' => $_POST['md_news']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Berita telah diupdate');

				$data['success'] = 'Setting Halaman Berita telah berhasil diupdate!';
			}

			if(isset($_POST['form_contact'])) {			
				$form_data = array(
					'mk_contact' => $_POST['mk_contact'],
					'md_contact' => $_POST['md_contact']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Kontak telah diupdate');

				$data['success'] = 'Setting Halaman Beranda telah berhasil diupdate!';
			}

			if(isset($_POST['form_carrier'])) {			
				$form_data = array(
					'mk_carrier' => $_POST['mk_carrier'],
					'md_carrier' => $_POST['md_carrier']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Karir telah diupdate');

				$data['success'] = 'Setting Halaman Karir telah berhasil diupdate!';
			}

			if(isset($_POST['form_aviation_electronics'])) {			
				$form_data = array(
					'mk_aviation_electronics' => $_POST['mk_aviation_electronics'],
					'md_aviation_electronics' => $_POST['md_aviation_electronics']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Departemen Aviasi & Elektronik telah diupdate');

				$data['success'] = 'Setting Halaman Departemen Aviasi & Elektronik telah berhasil diupdate!';
			}


			if(isset($_POST['form_search'])) {			
				$form_data = array(
					'mk_search' => $_POST['mk_search'],
					'md_search' => $_POST['md_search']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Pencarian telah diupdate');

				$data['success'] = 'Setting Halaman Pencarian telah berhasil diupdate!';
			}

			if(isset($_POST['form_term'])) {			
				$form_data = array(
					'term_content' => $_POST['term_content'],
					'mk_term'      => $_POST['mk_term'],
					'md_term'      => $_POST['md_term']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Term telah diupdate');

				$data['success'] = 'Setting Halaman Term telah berhasil diupdate!';
			}

			if(isset($_POST['form_privacy'])) {			
				$form_data = array(
					'privacy_content' => $_POST['privacy_content'],
					'mk_privacy'      => $_POST['mk_privacy'],
					'md_privacy'      => $_POST['md_privacy']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Privacy telah diupdate');

				$data['success'] = 'Setting Halaman Privacy telah berhasil diupdate!';
			}

			if(isset($_POST['form_site'])) {			
				$form_data = array(
					'mk_site_maps' => $_POST['mk_site_maps'],
					'md_site_maps' => $_POST['md_site_maps']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Site Maps telah diupdate');

				$data['success'] = 'Setting Halaman Site Maps telah berhasil diupdate!';
			}


			$header['setting'] = $this->Model_header->get_setting_data();
			$data['page'] = $this->Model_page->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_page',$data);
			$this->load->view('admin/view_footer');

		} elseif (($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {
			$data['error'] = '';
			$data['success'] = '';

			$data['page'] = $this->Model_page->show();

			if(isset($_POST['form_about_photo'])) {
				$valid = 1;
				$path = $_FILES['about_photo']['name'];
				$path_tmp = $_FILES['about_photo']['tmp_name'];
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

					if($_POST['current_about_photo'] != '')
					{
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_about_photo']);	
					}

		    		// updating the data
					$final_name = 'about_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'about_photo' => $final_name
					);
					$this->Model_page->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto Perusahaan telah diupdate');

					$data['success'] = 'Foto Perusahaan telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_structure_photo'])) {
				$valid = 1;
				$path = $_FILES['structure_photo']['name'];
				$path_tmp = $_FILES['structure_photo']['tmp_name'];
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

					if($_POST['current_structure_photo'] != '') {
			    	// removing the existing photo
						unlink('./public/uploads/'.$_POST['current_structure_photo']);	
					}

		    		// updating the data
					$final_name = 'structure_photo'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'structure_photo' => $final_name
					);
					$this->Model_page->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Struktur Perusahaan telah diupdate');

					$data['success'] = 'Struktur Organisasi telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_about'])) {			
				$form_data = array(
					'about_content' 		=> $_POST['about_content'],
					'about_content_idn' 	=> $_POST['about_content_idn'],
					'profile_content' 		=> $_POST['profile_content'],
					'profile_content_idn' 	=> $_POST['profile_content_idn'],
					'culture_content' 		=> $_POST['culture_content'],
					'culture_content_idn' 	=> $_POST['culture_content_idn'],
					'quality_content' 		=> $_POST['quality_content'],
					'quality_content_idn' 	=> $_POST['quality_content_idn'],
					'mission_content' 		=> $_POST['mission_content'],
					'mission_content_idn' 	=> $_POST['mission_content_idn'],
					'vision_content' 		=> $_POST['vision_content'],
					'vision_content_idn' 	=> $_POST['vision_content_idn'],
					'mk_about'      		=> $_POST['mk_about'],
					'md_about'      		=> $_POST['md_about']
				);
				$this->Model_page->update($form_data);

				//Add Log User
				helper_log("edit", '[EDIT] Halaman Tentang Perusahaan telah diupdate');

				$data['success'] = 'Halaman Tentang Setting telah berhasil diupdate!';
			}


			$header['setting'] = $this->Model_header->get_setting_data();
			$data['page'] = $this->Model_page->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_page',$data);
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
