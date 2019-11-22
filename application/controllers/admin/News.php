<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_news');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['news'] = $this->Model_news->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_news',$data);
			$this->load->view('admin/view_footer');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function add() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;
				$this->form_validation->set_rules('news_title', 'Judul', 'trim|required');
				$this->form_validation->set_rules('news_style', 'Gaya Berita', 'trim|required');
				$this->form_validation->set_rules('news_short_content', 'Berita Singkat', 'trim|required');
				$this->form_validation->set_rules('news_content', 'Konten', 'trim|required');
				$this->form_validation->set_rules('news_date', 'Tanggal', 'trim|required');
				$this->form_validation->set_rules('slug_news_category', 'Kategori', 'trim|required');

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
				} else {
					$valid = 0;
					$error .= 'Anda harus memilih foto untuk foto unggulan<br>';
				}

				if($valid == 1) {
					$next_id = $this->Model_news->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'news-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$judul = $_POST['news_title'];
					$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
					$trim=trim($string);
					$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
					$slug=$pre_slug.'.html';

					$form_data = array(
						'news_title'         	=> $_POST['news_title'],
						'news_title_idn'     	=> $_POST['news_title_idn'],
						'news_style'          	=> $_POST['news_style'],
						'news_content'       	=> $_POST['news_content'],
						'news_content_idn'      => $_POST['news_content_idn'],
						'news_short_content' 	=> $_POST['news_short_content'],
						'news_short_content_idn'=> $_POST['news_short_content_idn'],
						'news_date'          	=> $_POST['news_date'],
						'photo'              	=> $final_name,
						'slug_news_category' 	=> $_POST['slug_news_category'],
						'total_view'         	=> '',
						'comment'            	=> $_POST['comment'],
						'meta_title'         	=> $_POST['news_title'],
						'meta_keyword'       	=> $_POST['meta_keyword'],
						'meta_description'   	=> $_POST['meta_description'],
						'user_update'   	 	=> $_POST['user_update'],
						'post_slug'   	 	 	=> $slug
					);
					$this->Model_news->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['news_title'].' ditambahkan ke Berita');

					$data['success'] = 'Berita berhasil ditambahkan!';
					unset($_POST['news_title']);
					unset($_POST['news_title_idn']);
					unset($_POST['news_style']);
					unset($_POST['news_content']);
					unset($_POST['news_content_idn']);
					unset($_POST['news_short_content']);
					unset($_POST['news_short_content_idn']);
					unset($_POST['meta_keyword']);
					unset($_POST['meta_description']);
					unset($_POST['user_update']);
					unset($_POST['post_slug']);
				} else {
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
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}


	public function edit($id) {

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

			if(isset($_POST['form1'])) {

				$judul = $_POST['news_title'];
				$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul);
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim));
				$slug=$pre_slug.'.html';

				$valid = 1;
				$this->form_validation->set_rules('news_title', 'News Title', 'trim|required');
				$this->form_validation->set_rules('news_style', 'Gaya Berita', 'trim|required');
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
						$error .= 'Anda harus mengunggah file jpg, jpeg, gif atau png untuk foto unggulan<br>';
					}
				}

				if($valid == 1) {
					$data['news'] = $this->Model_news->getData($id);

					if($path == '') {
						$form_data = array(
							'news_title'         	=> $_POST['news_title'],
							'news_title_idn'     	=> $_POST['news_title_idn'],
							'news_style'          	=> $_POST['news_style'],
							'news_content'       	=> $_POST['news_content'],
							'news_content_idn'      => $_POST['news_content_idn'],
							'news_short_content' 	=> $_POST['news_short_content'],
							'news_short_content_idn'=> $_POST['news_short_content_idn'],
							'news_date'          	=> $_POST['news_date'],
							'slug_news_category' 	=> $_POST['slug_news_category'],
							'comment'            	=> $_POST['comment'],
							'meta_title'         	=> $_POST['news_title'],
							'meta_keyword'       	=> $_POST['meta_keyword'],
							'meta_description'   	=> $_POST['meta_description'],
							'post_slug'  		 	=> $slug
						);
						$this->Model_news->update($id,$form_data);
					} else {
						unlink('./public/uploads/'.$data['news']['photo']);

						$final_name = 'news-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$data['news'] = $this->Model_news->getData($id);

						$form_data = array(
							'news_title'         	=> $_POST['news_title'],
							'news_title_idn'     	=> $_POST['news_title_idn'],
							'news_style'          	=> $_POST['news_style'],
							'news_content'       	=> $_POST['news_content'],
							'news_content_idn'      => $_POST['news_content_idn'],
							'news_short_content' 	=> $_POST['news_short_content'],
							'news_short_content_idn'=> $_POST['news_short_content_idn'],
							'news_date'          	=> $_POST['news_date'],
							'photo'              	=> $final_name,
							'slug_news_category' 	=> $_POST['slug_news_category'],
							'comment'            	=> $_POST['comment'],
							'meta_title'         	=> $_POST['news_title'],
							'meta_keyword'       	=> $_POST['meta_keyword'],
							'meta_description'   	=> $_POST['meta_description'],
							'post_slug'  		 	=> $slug
						);
						$this->Model_news->update($id,$form_data);
					}

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['news_title'].' diupdate pada Berita');

					$data['success'] = 'News telah berhasil diupdate';
				} else {
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
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}


	public function delete($id) {
	
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

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['news']['news_title'].' dihapus dari Berita');

			redirect(base_url().'admin/news');
		} else {
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

}