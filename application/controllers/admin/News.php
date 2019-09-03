<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_news');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['news'] = $this->Model_news->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_news',$data);
			$this->load->view('admin/view_footer');
		} else {
			show_404();
		}
	}

	public function add()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;
				$this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
				$this->form_validation->set_rules('slug', 'Slug News', 'trim|required');
				$this->form_validation->set_rules('news_short_content', 'News Short Content', 'trim|required');
				$this->form_validation->set_rules('news_content', 'News Content', 'trim|required');
				$this->form_validation->set_rules('slug_news_category', 'Category', 'trim|required');

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
					$next_id = $this->Model_news->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'news-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

				

					$judul = $_POST['news_title'];
					$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul); 
					$trim=trim($string);
					$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
					$slug=$pre_slug.'.html';

					$form_data = array(
						'news_title'         => $_POST['news_title'],
						'slug'          	 => $_POST['slug'],
						'news_content'       => $_POST['news_content'],
						'news_short_content' => $_POST['news_short_content'],
						'news_date'          => $_POST['news_date'],
						'photo'              => $final_name,
						'slug_news_category' => $_POST['slug_news_category'],
						'total_view'         => '',
						'comment'            => $_POST['comment'],
						'meta_title'         => $_POST['meta_title'],
						'meta_keyword'       => $_POST['meta_keyword'],
						'meta_description'   => $_POST['meta_description'],
						'user_update'   	 => $_POST['user_update'],
						'post_slug'   	 	 => $slug
					);
					$this->Model_news->add($form_data);

					$data['success'] = 'News is added successfully!';
					unset($_POST['news_title']);
					unset($_POST['slug']);
					unset($_POST['news_content']);
					unset($_POST['news_short_content']);
					unset($_POST['meta_title']);
					unset($_POST['meta_keyword']);
					unset($_POST['meta_description']);
					unset($_POST['user_update']);
					unset($_POST['post_slug']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$data['all_category'] = $this->Model_news->get_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_add',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['all_category'] = $this->Model_news->get_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_add',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
    	// If there is no news in this id, then redirect
			$tot = $this->Model_news->news_check($id);
			if(!$tot) {
				redirect(base_url().'admin/news');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{

				$judul = $_POST['news_title'];
				$string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim));
				$slug=$pre_slug.'.html';

				$valid = 1;
				$this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
				$this->form_validation->set_rules('slug', 'Slug News', 'trim|required');
				$this->form_validation->set_rules('news_short_content', 'News Short Content', 'trim|required');
				$this->form_validation->set_rules('news_content', 'News Content', 'trim|required');

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
					$data['news'] = $this->Model_news->getData($id);

					if($path == '') {
						$form_data = array(
							'news_title'         => $_POST['news_title'],
							'slug' 		         => $_POST['slug'],
							'news_content'       => $_POST['news_content'],
							'news_short_content' => $_POST['news_short_content'],
							'news_date'          => $_POST['news_date'],
							'slug_news_category' => $_POST['slug_news_category'],
							'comment'            => $_POST['comment'],
							'meta_title'         => $_POST['meta_title'],
							'meta_keyword'       => $_POST['meta_keyword'],
							'meta_description'   => $_POST['meta_description'],
							'post_slug'  		 => $slug
						);
						$this->Model_news->update($id,$form_data);
					}
					if($path != '') {
						unlink('./public/uploads/'.$data['news']['photo']);

						$final_name = 'news-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$data['news'] = $this->Model_news->getData($id);

						$form_data = array(
							'news_title'         => $_POST['news_title'],
							'slug'	 	         => $_POST['slug'],
							'news_content'       => $_POST['news_content'],
							'news_short_content' => $_POST['news_short_content'],
							'news_date'          => $_POST['news_date'],
							'photo'              => $final_name,
							'slug_news_category' => $_POST['slug_news_category'],
							'comment'            => $_POST['comment'],
							'meta_title'         => $_POST['meta_title'],
							'meta_keyword'       => $_POST['meta_keyword'],
							'meta_description'   => $_POST['meta_description'],
							'post_slug'  		 => $slug
						);
						$this->Model_news->update($id,$form_data);
					}
					if($path == '') {

						$form_data = array(
							'news_title'         => $_POST['news_title'],
							'slug'         		 => $_POST['slug'],
							'news_content'       => $_POST['news_content'],
							'news_short_content' => $_POST['news_short_content'],
							'news_date'          => $_POST['news_date'],
							'slug_news_category'        => $_POST['slug_news_category'],
							'comment'            => $_POST['comment'],
							'meta_title'         => $_POST['meta_title'],
							'meta_keyword'       => $_POST['meta_keyword'],
							'meta_description'   => $_POST['meta_description'],
							'post_slug'   => $slug
						);
						$this->Model_news->update($id,$form_data);
					}
					if($path != '') {

						unlink('./public/uploads/'.$data['news']['photo']);

						$final_name = 'news-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );


						$form_data = array(
							'news_title'         => $_POST['news_title'],
							'slug'		         => $_POST['slug'],
							'news_content'       => $_POST['news_content'],
							'news_short_content' => $_POST['news_short_content'],
							'news_date'          => $_POST['news_date'],
							'photo'              => $final_name,
							'slug_news_category'        => $_POST['slug_news_category'],
							'comment'            => $_POST['comment'],
							'meta_title'         => $_POST['meta_title'],
							'meta_keyword'       => $_POST['meta_keyword'],
							'meta_description'   => $_POST['meta_description'],
							'post_slug'  		 => $slug
						);
						$this->Model_news->update($id,$form_data);
					}

					$data['success'] = 'News is updated successfully';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['news'] = $this->Model_news->getData($id);
				$data['all_category'] = $this->Model_news->get_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['news'] = $this->Model_news->getData($id);
				$data['all_category'] = $this->Model_news->get_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if ($this->session->userdata('role') == 'admin') {
		// If there is no team member in this id, then redirect
			$tot = $this->Model_news->news_check($id);
			if(!$tot) {
				redirect(base_url().'admin/news');
				exit;
			}

			$data['news'] = $this->Model_news->getData($id);
			if($data['news']) {
				unlink('./public/uploads/'.$data['news']['photo']);
			}

			$this->Model_news->delete($id);
			redirect(base_url().'admin/news');
		} else {
			show_404();
		}
	}

}