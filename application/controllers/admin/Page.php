<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_page');
	}
	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['page'] = $this->Model_page->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_page',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}

	public function delete_about_photo()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd'))  {

			$t = $this->Model_page->get_about_photo_name();
			unlink('./public/uploads/'.$t['about_photo']);

			$form_data = array(
				'about_photo' => ''
			);
			$this->Model_page->about_photo_update($form_data);

			redirect(base_url().'admin/page');
		} else {
			show_404();
		}
	}

	public function delete_structure_photo()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$t = $this->Model_page->get_structure_photo_name();
			unlink('./public/uploads/'.$t['structure_photo']);

			$form_data = array(
				'structure_photo' => ''
			);
			$this->Model_page->about_photo_update($form_data);

			redirect(base_url().'admin/page');
		} else {
			show_404();
		} 
	}

	public function update()
	{
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
					$data['success'] = 'Struktur Organisasi telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_home'])) {			
				$form_data = array(
					'mt_home' => $_POST['mt_home'],
					'mk_home' => $_POST['mk_home'],
					'md_home' => $_POST['md_home']
				);
				$this->Model_page->update($form_data);
				$data['success'] = 'Seting Halaman telah berhasil diupdate!';
			}

			if(isset($_POST['form_about'])) {			
				$form_data = array(
					'about_content' => $_POST['about_content'],
					'profile_content' => $_POST['profile_content'],
					'culture_content' => $_POST['culture_content'],
					'quality_content' => $_POST['quality_content'],
					'mission_heading' => $_POST['mission_heading'],
					'mission_content' => $_POST['mission_content'],
					'vision_heading' => $_POST['vision_heading'],
					'vision_content' => $_POST['vision_content'],
					'mt_about'      => $_POST['mt_about'],
					'mk_about'      => $_POST['mk_about'],
					'md_about'      => $_POST['md_about']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Tentang telah berhasil diupdate!';
			}

			if(isset($_POST['form_gallery'])) {			
				$form_data = array(
					'mt_gallery'      => $_POST['mt_gallery'],
					'mk_gallery'      => $_POST['mk_gallery'],
					'md_gallery'      => $_POST['md_gallery']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Galeri telah berhasil diupdate!';
			}

			if(isset($_POST['form_product'])) {			
				$form_data = array(
					'mt_product'      => $_POST['mt_product'],
					'mk_product'      => $_POST['mk_product'],
					'md_product'      => $_POST['md_product']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Produk telah berhasil diupdate!';
			}

			if(isset($_POST['form_service'])) {			
				$form_data = array(
					'mt_service'      => $_POST['mt_service'],
					'mk_service'      => $_POST['mk_service'],
					'md_service'      => $_POST['md_service']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Hamalan Layanan telah berhasil diupdate!';
			}

			if(isset($_POST['form_facility'])) {			
				$form_data = array(
					'mt_facility'      => $_POST['mt_facility'],
					'mk_facility'      => $_POST['mk_facility'],
					'md_facility'      => $_POST['md_facility']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Pelayanan telah berhasil diupdate!';
			}


			if(isset($_POST['form_portfolio'])) {			
				$form_data = array(
					'mt_portfolio'      => $_POST['mt_portfolio'],
					'mk_portfolio'      => $_POST['mk_portfolio'],
					'md_portfolio'      => $_POST['md_portfolio']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Portofolio telah berhasil diupdate!';
			}


			if(isset($_POST['form_testimonial'])) {			
				$form_data = array(
					'mt_testimonial'      => $_POST['mt_testimonial'],
					'mk_testimonial'      => $_POST['mk_testimonial'],
					'md_testimonial'      => $_POST['md_testimonial']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Testimonial telah berhasil diupdate!';
			}


			if(isset($_POST['form_news'])) {			
				$form_data = array(
					'mt_news'      => $_POST['mt_news'],
					'mk_news'      => $_POST['mk_news'],
					'md_news'      => $_POST['md_news']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Berita telah berhasil diupdate!';
			}


			if(isset($_POST['form_contact'])) {			
				$form_data = array(
					'mt_contact'      => $_POST['mt_contact'],
					'mk_contact'      => $_POST['mk_contact'],
					'md_contact'      => $_POST['md_contact']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Beranda telah berhasil diupdate!';
			}

			if(isset($_POST['form_carrier'])) {			
				$form_data = array(
					'mt_carrier'      => $_POST['mt_carrier'],
					'mk_carrier'      => $_POST['mk_carrier'],
					'md_carrier'      => $_POST['md_carrier']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Karir telah berhasil diupdate!';
			}

			if(isset($_POST['form_electronic_division'])) {			
				$form_data = array(
					'mt_electronics_division'      => $_POST['mt_electronics_division'],
					'mk_electronics_division'      => $_POST['mk_electronics_division'],
					'md_electronics_division'      => $_POST['md_electronics_division']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Divisi Elektronik telah berhasil diupdate!';
			}


			if(isset($_POST['form_search'])) {			
				$form_data = array(
					'mt_search'      => $_POST['mt_search'],
					'mk_search'      => $_POST['mk_search'],
					'md_search'      => $_POST['md_search']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Pencarian telah berhasil diupdate!';
			}


			if(isset($_POST['form_term'])) {			
				$form_data = array(
					'term_content' => $_POST['term_content'],
					'mt_term'      => $_POST['mt_term'],
					'mk_term'      => $_POST['mk_term'],
					'md_term'      => $_POST['md_term']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Term telah berhasil diupdate!';
			}

			if(isset($_POST['form_privacy'])) {			
				$form_data = array(
					'privacy_content' => $_POST['privacy_content'],
					'mt_privacy'      => $_POST['mt_privacy'],
					'mk_privacy'      => $_POST['mk_privacy'],
					'md_privacy'      => $_POST['md_privacy']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Setting Halaman Privacy telah berhasil diupdate!';
			}

			if(isset($_POST['form_site'])) {			
				$form_data = array(
					'mt_site_maps'      => $_POST['mt_site_maps'],
					'mk_site_maps'      => $_POST['mk_site_maps'],
					'md_site_maps'      => $_POST['md_site_maps']
				);
				$this->Model_page->update($form_data);        	
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
					$data['success'] = 'Struktur Organisasi telah berhasil diupdate!';		    	
				}        	
			}

			if(isset($_POST['form_about'])) {			
				$form_data = array(
					'about_content' => $_POST['about_content'],
					'profile_content' => $_POST['profile_content'],
					'culture_content' => $_POST['culture_content'],
					'quality_content' => $_POST['quality_content'],
					'mission_heading' => $_POST['mission_heading'],
					'mission_content' => $_POST['mission_content'],
					'vision_heading' => $_POST['vision_heading'],
					'vision_content' => $_POST['vision_content'],
					'mt_about'      => $_POST['mt_about'],
					'mk_about'      => $_POST['mk_about'],
					'md_about'      => $_POST['md_about']
				);
				$this->Model_page->update($form_data);        	
				$data['success'] = 'Halaman Tentang Setting telah berhasil diupdate!';
			}


			$header['setting'] = $this->Model_header->get_setting_data();
			$data['page'] = $this->Model_page->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_page',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}

}
