<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_category extends CI_Controller  {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_news_category');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['news_category'] = $this->Model_news_category->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_news_category',$data);
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

			if(isset($_POST['form1'])) {

				$valid = 1;
				$judul = $_POST['category_name'];
				$string = preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim = trim($string);
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); 
				$slug_news_category = $pre_slug;

				$this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) {
					$form_data = array(
						'category_name'    		=> $_POST['category_name'],
						'meta_title'      		=> $_POST['meta_title'],
						'meta_keyword'     		=> $_POST['meta_keyword'],
						'meta_description' 		=> $_POST['meta_description'],
						'slug_news_category' 	=> $slug_news_category
					);
					$this->Model_news_category->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['category_name'].' ditambahkan ke Kategori Berita');

					$data['success'] = 'Kategory Berita berhasil ditambahkan!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_category_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_category_add',$data);
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
    		
    		// If there is no new category in this id, then redirect
			$tot = $this->Model_news_category->news_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/news-category');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) {

				$valid = 1;
				$judul = $_POST['category_name'];
				$string = preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim = trim($string);
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); 
				$slug_news_category = $pre_slug;
				$this->form_validation->set_rules('category_name', 'Nama Kategori', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				} else {

            		// Duplicate category Checking
					$data['news_category'] = $this->Model_news_category->getData($id);
					$total = $this->Model_news_category->duplicate_check($_POST['category_name'],$data['news_category']['category_name']);
					if($total) {
						$valid = 0;
						$data['error'] = 'Nama Kategori sudah ada';
					}
				}

				if($valid == 1) {
		    		// Updating Data
					$form_data = array(
						'category_name'    		=> $_POST['category_name'],
						'meta_title'       		=> $_POST['meta_title'],
						'meta_keyword'     		=> $_POST['meta_keyword'],
						'meta_description' 		=> $_POST['meta_description'],
						'slug_news_category' 	=> $slug_news_category

					);
					$this->Model_news_category->update($id,$form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['category_name'].' diupdate pada Kategori Berita');

					$data['success'] = 'Nama Kategori telah berhasil diupdate';
				}

				$data['news_category'] = $this->Model_news_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_category_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['news_category'] = $this->Model_news_category->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_news_category_edit',$data);
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
			$tot = $this->Model_news_category->news_category_check($id);
			if(!$tot) {
				redirect(base_url().'admin/news-category');
				exit;
			}
			
			$data['news_category'] = $this->Model_news_category->getData($id);

			$result = $this->Model_news_category->getData1($id);
			foreach ($result as $row) {			
				unlink('./public/uploads/'.$row['photo']);
			}
			$this->Model_news_category->delete($id);
			$this->Model_news_category->delete1($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['news_category']['category_name'].' dihapus dari Kategori Berita');

			redirect(base_url().'admin/news-category');
		} else {
		
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		} 
	}
}