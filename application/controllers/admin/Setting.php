<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_setting');
	}
	public function index()
	{
		if ($this->session->userdata('role') == 'admin') {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_setting',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}
	public function update()
	{
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'Logo is updated successfully!';		    	
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'logo Art is updated successfully!';		    	
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'Admin Logo is updated successfully!';		    	
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'Favicon is updated successfully!';		    	
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'Login Background Photo is updated successfully!';		    	
				}        	
			}

			if(isset($_POST['form_general'])) {			
				$form_data = array(
					'footer_copyright'    => $_POST['footer_copyright'],
					'footer_address'      => $_POST['footer_address'],
					'footer_phone'        => $_POST['footer_phone'],
					'footer_working_hour' => $_POST['footer_working_hour'],
					'top_bar_email'       => $_POST['top_bar_email'],
					'top_bar_phone'       => $_POST['top_bar_phone'],
					'contact_map_iframe'  => $_POST['contact_map_iframe']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'General Setting is updated successfully!';
			}

			if(isset($_POST['form_email'])) {			
				$form_data = array(
					'receive_email'                => $_POST['receive_email'],
					'reset_password_email_subject' => $_POST['reset_password_email_subject']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Email Setting is updated successfully!';
			}


			if(isset($_POST['form_sidebar_footer'])) {			
				$form_data = array(
					'total_recent_post'  => $_POST['total_recent_post'],
					'total_popular_post' => $_POST['total_popular_post'],
					'total_product_post' => $_POST['total_product_post']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Sidebar and Footer Setting is updated successfully!';
			}

			if(isset($_POST['form_content_home'])) {			
				$form_data = array(
					'content_home_title'    => $_POST['content_home_title'],
					'content_home_subtitle' => $_POST['content_home_subtitle'],
					'content_home_status'   => $_POST['content_home_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Why Choose Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_service'])) {			
				$form_data = array(
					'service_title'    => $_POST['service_title'],
					'service_subtitle' => $_POST['service_subtitle'],
					'service_status'   => $_POST['service_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Service Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_facility'])) {			
				$form_data = array(
					'facility_title'    => $_POST['facility_title'],
					'facility_subtitle' => $_POST['facility_subtitle'],
					'facility_status'   => $_POST['facility_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Facility Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_portfolio'])) {			
				$form_data = array(
					'portfolio_title'    => $_POST['portfolio_title'],
					'portfolio_subtitle' => $_POST['portfolio_subtitle'],
					'portfolio_status'   => $_POST['portfolio_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Portfolio Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_team'])) {			
				$form_data = array(
					'team_title'    => $_POST['team_title'],
					'team_subtitle' => $_POST['team_subtitle'],
					'team_status'   => $_POST['team_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Team Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_testimonial'])) {			
				$form_data = array(
					'testimonial_title'    => $_POST['testimonial_title'],
					'testimonial_subtitle' => $_POST['testimonial_subtitle'],
					'testimonial_status'   => $_POST['testimonial_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Testimonial Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_faq'])) {			
				$form_data = array(
					'faq_title'    => $_POST['faq_title'],
					'faq_subtitle' => $_POST['faq_subtitle'],
					'faq_status'   => $_POST['faq_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'FAQ Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_gallery'])) {			
				$form_data = array(
					'gallery_title'    => $_POST['gallery_title'],
					'gallery_subtitle' => $_POST['gallery_subtitle'],
					'gallery_status'   => $_POST['gallery_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Gallery Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_product'])) {			
				$form_data = array(
					'product_title'    => $_POST['product_title'],
					'product_subtitle' => $_POST['product_subtitle'],
					'product_status'   => $_POST['product_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Product Setting (Home Page) is updated successfully!';
			}


			if(isset($_POST['form_recent_post'])) {			
				$form_data = array(
					'recent_post_title'    => $_POST['recent_post_title'],
					'recent_post_subtitle' => $_POST['recent_post_subtitle'],
					'recent_post_status'   => $_POST['recent_post_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Recent Post Setting (Home Page) is updated successfully!';
			}

			if(isset($_POST['form_partner'])) {			
				$form_data = array(
					'partner_title'    => $_POST['partner_title'],
					'partner_subtitle' => $_POST['partner_subtitle'],
					'partner_status'   => $_POST['partner_status']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Partner Setting (Home Page) is updated successfully!';
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
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
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
					$data['success'] = 'Counter Background Photo is updated successfully!';		    	
				}        	
			}


			if(isset($_POST['form_counter'])) {			
				$form_data = array(
					'counter1_text'  => $_POST['counter1_text'],
					'counter1_value' => $_POST['counter1_value'],
					'counter2_text'  => $_POST['counter2_text'],
					'counter2_value' => $_POST['counter2_value'],
					'counter3_text'  => $_POST['counter3_text'],
					'counter3_value' => $_POST['counter3_value'],
					'counter4_text'  => $_POST['counter4_text'],
					'counter4_value' => $_POST['counter4_value']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Counter Setting (Home Page) is updated successfully!';
			}


			if(isset($_POST['form_total_recent_post_home'])) {			
				$form_data = array(
					'total_recent_post_home' => $_POST['total_recent_post_home']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Total Recent Post (Home Page) is updated successfully!';
			}


			if(isset($_POST['form_color'])) {			
				$form_data = array(
					'theme_color_1' => $_POST['theme_color_1'],
					'theme_color_2' => $_POST['theme_color_2']
				);
				$this->Model_setting->update($form_data);   	
				$data['success'] = 'Theme Colors are updated successfully!';
			}



			if(isset($_POST['form_banner_about'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_about']);
					$final_name = 'banner_about'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_about' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'About Page Banner is updated successfully!';		    	
				}        	
			}


			if(isset($_POST['form_banner_faq'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_faq']);
					$final_name = 'banner_faq'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_faq' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'FAQ Page Banner is updated successfully!';		    	
				}        	
			}


			if(isset($_POST['form_banner_gallery'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_gallery']);
					$final_name = 'banner_gallery'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_gallery' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Gallery Page Banner is updated successfully!';		    	
				}        	
			}
			
			if(isset($_POST['form_banner_product'])) {
				$valid = 1;
				$path = $_FILES['product']['name'];
				$path_tmp = $_FILES['product']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_product']);
					$final_name = 'banner_product'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_product' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Product Page Banner is updated successfully!';		    	
				}        	
			}

			if(isset($_POST['form_banner_service'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_service']);
					$final_name = 'banner_service'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_service' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Service Page Banner is updated successfully!';		    	
				}        	
			}

			if(isset($_POST['form_banner_facility'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_facility']);
					$final_name = 'banner_facility'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_facility' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Facility Page Banner is updated successfully!';		    	
				}        	
			}

			if(isset($_POST['form_banner_portfolio'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_portfolio']);
					$final_name = 'banner_portfolio'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_portfolio' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Portfolio Page Banner is updated successfully!';		    	
				}        	
			}


			if(isset($_POST['form_banner_testimonial'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_testimonial']);
					$final_name = 'banner_testimonial'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_testimonial' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Testimonial Page Banner is updated successfully!';		    	
				}        	
			}


			if(isset($_POST['form_banner_news'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_news']);
					$final_name = 'banner_news'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_news' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'News Page Banner is updated successfully!';		    	
				}
			}


			if(isset($_POST['form_banner_contact'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_contact']);
					$final_name = 'banner_contact'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_contact' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Contact Page Banner is updated successfully!';		    	
				}
			}


			if(isset($_POST['form_banner_search'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_search']);
					$final_name = 'banner_search'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_search' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Search Page Banner is updated successfully!';		    	
				}
			}


			if(isset($_POST['form_banner_category'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_category']);
					$final_name = 'banner_category'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_category' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Category Page Banner is updated successfully!';		    	
				}
			}


			if(isset($_POST['form_banner_terms'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_terms']);
					$final_name = 'banner_terms'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_terms' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Terms and Conditions Page Banner is updated successfully!';		    	
				}
			}


			if(isset($_POST['form_banner_privacy'])) {
				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'You must have to select a photo<br>';
				}
				if($valid == 1) {
					unlink('./public/uploads/'.$header['setting']['banner_privacy']);
					$final_name = 'banner_privacy'.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
					$form_data = array('banner_privacy' => $final_name);
					$this->Model_setting->update($form_data);
					$data['success'] = 'Privacy Policy Page Banner is updated successfully!';		    	
				}
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['setting'] = $this->Model_header->get_setting_data();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_setting',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}
	
}
