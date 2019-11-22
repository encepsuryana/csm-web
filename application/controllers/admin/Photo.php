<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_photo');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['photo'] = $this->Model_photo->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_photo',$data);
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

				$this->form_validation->set_rules('photo_caption', 'Judul', 'trim|required');
				$this->form_validation->set_rules('photo_style', 'Ukuran Foto', 'trim|required');
				$this->form_validation->set_rules('photo_desc', 'Deskripsi Foto', 'trim|required');

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
					$next_id = $this->Model_photo->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'photo-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'photo_caption' 	=> $_POST['photo_caption'],
						'photo_caption_idn'	=> $_POST['photo_caption_idn'],
						'photo_style' 		=> $_POST['photo_style'],
						'photo_name' 		=> $final_name,
						'photo_desc'		=> $_POST['photo_desc'],
						'photo_desc_idn'	=> $_POST['photo_desc_idn'],
						'photo_show_home' 	=> $_POST['photo_show_home']
					);
					$this->Model_photo->add($form_data);

					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['photo_caption'].' ditambahkan ke Galeri');

					$data['success'] = 'Foto berhasil ditambahkan!';

				} else {
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_photo_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_photo_add',$data);
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
    		
    		// If there is no service in this id, then redirect
			$tot = $this->Model_photo->photo_check($id);
			if(!$tot) {
				redirect(base_url().'admin/photo');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) {
				$valid = 1;

				$this->form_validation->set_rules('photo_caption', 'Judul', 'trim|required');
				$this->form_validation->set_rules('photo_style', 'Foto Style', 'trim|required');
				$this->form_validation->set_rules('photo_desc', 'Deskripsi Foto', 'trim|required');


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
					$data['photo'] = $this->Model_photo->getData($id);

					if($path == '') {
						$form_data = array(
							'photo_caption' 	=> $_POST['photo_caption'],
							'photo_caption_idn'	=> $_POST['photo_caption_idn'],
							'photo_style' 		=> $_POST['photo_style'],
							'photo_desc_idn'	=> $_POST['photo_desc_idn'],
							'photo_show_home' 	=> $_POST['photo_show_home']
						);
						$this->Model_photo->update($id,$form_data);
					
					} else {

						unlink('./public/uploads/'.$data['photo']['photo_name']);

						$final_name = 'photo-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'photo_caption' 	=> $_POST['photo_caption'],
							'photo_caption_idn'	=> $_POST['photo_caption_idn'],
							'photo_style' 		=> $_POST['photo_style'],
							'photo_name' 		=> $final_name,
							'photo_desc' 		=> $_POST['photo_desc'],
							'photo_desc_idn'	=> $_POST['photo_desc_idn'],
							'photo_show_home' 	=> $_POST['photo_show_home']
						);
						$this->Model_photo->update($id,$form_data);
					}

					//Add Log User
					helper_log("edit", '[EDIT] Data: '.$_POST['photo_caption'].' diupdate pada Galeri');

					$data['success'] = 'Foto telah berhasil diupdate';
				} else {
					$data['error'] = $error;
				}

				$data['photo'] = $this->Model_photo->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_photo_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['photo'] = $this->Model_photo->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_photo_edit',$data);
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
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			// If there is no photo in this id, then redirect
			$tot = $this->Model_photo->photo_check($id);
			if(!$tot) {
				redirect(base_url().'admin/photo');
				exit;
			}

			$data['photo'] = $this->Model_photo->getData($id);
			
			if($data['photo']) {
				unlink('./public/uploads/'.$data['photo']['photo_name']);
			}

			$this->Model_photo->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['photo']['photo_caption'].' dihapus dari Galeri');

			redirect(base_url().'admin/photo');
		} else {
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}
}