<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_product');
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
			show_404();
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

				$this->form_validation->set_rules('product_caption', 'Product Caption', 'trim|required');
				$this->form_validation->set_rules('product_style', 'Product Style', 'trim|required');
				$this->form_validation->set_rules('product_desc', 'Product Description', 'trim|required');


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
						$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
					}
				} else {
					$valid = 0;
					$error .= 'You must have to select a photo for featured photo<br>';
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

					$data['success'] = 'Product is added successfully!';

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
			show_404();
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

				$this->form_validation->set_rules('product_caption', 'Product Caption', 'trim|required');
				$this->form_validation->set_rules('product_style', 'Product Style', 'trim|required');
				$this->form_validation->set_rules('product_desc', 'Product Description', 'trim|required');

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
						$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
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


					$data['success'] = 'Product is updated successfully';
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
			show_404();
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
			redirect(base_url().'admin/product');
		} else {
			show_404();
		}
	}
}