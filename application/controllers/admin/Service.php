<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_service');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['service'] = $this->Model_service->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_service',$data);
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
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$judul = $_POST['heading'];
				$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
				$slug=$pre_slug.'.html';

				$this->form_validation->set_rules('heading', 'Judul', 'trim|required');
				$this->form_validation->set_rules('short_content', 'Konten Singkat', 'trim|required');
				$this->form_validation->set_rules('content', 'Konten', 'trim|required');

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


				if($valid == 1) 
				{
					$next_id = $this->Model_service->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'service-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					
					$form_data = array(
						'heading' 			=> $_POST['heading'],
						'short_content' 	=> $_POST['short_content'],
						'content' 			=> $_POST['content'],
						'photo' 			=> $final_name,
						'meta_title' 		=> $_POST['heading'],
						'meta_keyword' 		=> $_POST['meta_keyword'],
						'meta_description' 	=> $_POST['meta_description'],
						'slug_service' 		=> $slug
					);
					$this->Model_service->add($form_data);
					
					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['heading'].' ditambahkan ke Layanan');

					$data['success'] = 'Layanan berhasil ditambahkan!';
					unset($_POST['heading']);
					unset($_POST['short_content']);
					unset($_POST['content']);
					unset($_POST['meta_keyword']);
					unset($_POST['meta_description']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_service_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_service_add',$data);
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
			$tot = $this->Model_service->service_check($id);
			if(!$tot) {
				redirect(base_url().'admin/service');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{
				$judul = $_POST['heading'];
				$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
				$slug=$pre_slug.'.html';
				$valid = 1;

				$this->form_validation->set_rules('heading', 'Judul', 'trim|required');
				$this->form_validation->set_rules('short_content', 'Konten Singkat', 'trim|required');
				$this->form_validation->set_rules('content', 'Konten', 'trim|required');

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

				if($valid == 1) 
				{
					$data['service'] = $this->Model_service->getData($id);

					if($path == '') {
						$form_data = array(
							'heading' 			=> $_POST['heading'],
							'short_content' 	=> $_POST['short_content'],
							'content' 			=> $_POST['content'],
							'meta_title' 		=> $_POST['heading'],
							'meta_keyword' 		=> $_POST['meta_keyword'],
							'meta_description' 	=> $_POST['meta_description'],
							'slug_service' 		=> $slug
						);
						$this->Model_service->update($id,$form_data);
					} else {
						unlink('./public/uploads/'.$data['service']['photo']);

						$final_name = 'service-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'heading' 			=> $_POST['heading'],
							'short_content' 	=> $_POST['short_content'],
							'content' 			=> $_POST['content'],
							'photo' 			=> $final_name,
							'meta_title' 		=> $_POST['heading'],
							'meta_keyword' 		=> $_POST['meta_keyword'],
							'meta_description'	=> $_POST['meta_description'],
							'slug_service'		=> $slug
						);
						$this->Model_service->update($id,$form_data);
					}

					$data['success'] = 'Layanan telah berhasil diupdate';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['service'] = $this->Model_service->getData($id);

				//Add Log User
				helper_log("edit", '[EDIT] Data: '.$_POST['heading'].' diupdate pada Layanan');

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_service_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['service'] = $this->Model_service->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_service_edit',$data);
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

		// If there is no service in this id, then redirect
			$tot = $this->Model_service->service_check($id);
			if(!$tot) {
				redirect(base_url().'admin/service');
				exit;
			}

			$data['service'] = $this->Model_service->getData($id);
			if($data['service']) {
				unlink('./public/uploads/'.$data['service']['photo']);
			}

			$this->Model_service->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data Id: '.$data['service']['heading'].' dihapus dari Layanan');

			redirect(base_url().'admin/service');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

}