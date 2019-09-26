<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_product');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['product'] = $this->Model_product->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_product',$data);
			$this->load->view('admin/view_footer');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function add()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('product_caption', 'Judul', 'trim|required');
				$this->form_validation->set_rules('product_style', 'Ukuran Foto', 'trim|required');
				$this->form_validation->set_rules('product_desc', 'Deskripsi Produk', 'trim|required');


				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}

				$path = $_FILES['product']['name'];
				$path_tmp = $_FILES['product']['tmp_name'];

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

				if($valid == 1) 
				{
					$next_id = $this->Model_product->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'product-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/products/'.$final_name );

					$form_data = array(
						'product_caption' => $_POST['product_caption'],
						'product_style' => $_POST['product_style'],
						'product_name' => $final_name,
						'product_desc' => $_POST['product_desc'],
						'product_show_home' => $_POST['product_show_home']
					);
					$this->Model_product->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['product_caption'].' ditambahkan ke Produk');
					
					$data['success'] = 'Produk berhasil ditambahkan!';

				} 
				else
				{
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_product_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_product_add',$data);
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


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

    	// If there is no service in this id, then redirect
			$tot = $this->Model_product->product_check($id);
			if(!$tot) {
				redirect(base_url().'admin/product');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('product_caption', 'Judul', 'trim|required');
				$this->form_validation->set_rules('product_style', 'Ukuran Foto', 'trim|required');
				$this->form_validation->set_rules('product_desc', 'Deskripsi Produk', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}

				$path = $_FILES['product']['name'];
				$path_tmp = $_FILES['product']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$error .= 'Anda harus mengunggah file jpg, jpeg, gif atau png untuk foto unggulan<br>';
					}
				}


				if($valid == 1) 
				{
					$data['product'] = $this->Model_product->getData($id);

					if($path == '') {
						$form_data = array(
							'product_caption' => $_POST['product_caption'],
							'product_style' => $_POST['product_style'],
							'product_desc' => $_POST['product_desc'],
							'product_show_home' => $_POST['product_show_home']
						);
						$this->Model_product->update($id,$form_data);
					}
					else {

						unlink('./public/uploads/products/'.$data['product']['product_name']);

						$final_name = 'product-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/products/'.$final_name );

						$form_data = array(
							'product_caption' => $_POST['product_caption'],
							'product_style' => $_POST['product_style'],
							'product_name' => $final_name,
							'product_desc' => $_POST['product_desc'],
							'product_show_home' => $_POST['product_show_home']
						);
						$this->Model_product->update($id,$form_data);
					}

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['product_caption'].' diupdate pada Produk');

					$data['success'] = 'Produk telah berhasil diupdate';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['product'] = $this->Model_product->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_product_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['product'] = $this->Model_product->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_product_edit',$data);
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


	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {

		// If there is no product in this id, then redirect
			$tot = $this->Model_product->product_check($id);
			if(!$tot) {
				redirect(base_url().'admin/product');
				exit;
			}

			$data['product'] = $this->Model_product->getData($id);
			if($data['product']) {
				unlink('./public/uploads/products/'.$data['product']['product_name']);
			}

			$this->Model_product->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data Id: '.$data['product']['product_caption'].' dihapus dari Produk');

			redirect(base_url().'admin/product');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}
}