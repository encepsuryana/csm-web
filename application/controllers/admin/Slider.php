<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_slider');
		$this->load->model('admin/Model_log');
	}

	public function index() {
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) {		
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['slider'] = $this->Model_slider->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_slider',$data);
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
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff')) {		

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';

			if(isset($_POST['form1'])) {

				$valid = 1;

				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'Anda harus mengunggah file jpg, jpeg, gif atau png untuk foto unggulan<br>';
					}
				} else {
					$valid = 0;
					$data['error'] = 'Anda harus memilih foto untuk foto unggulan<br>';
				}

				if($valid == 1) {

					$next_id = $this->Model_slider->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'slider-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'photo'        => $final_name,
						'heading'      => $_POST['heading'],
						'heading_idn'  => $_POST['heading_idn'],
						'content'      => $_POST['content'],
						'content_idn'  => $_POST['content_idn'],
						'button1_text' => $_POST['button1_text'],
						'button1_url'  => $_POST['button1_url'],
						'button2_text' => $_POST['button2_text'],
						'button2_url'  => $_POST['button2_url']
					);
					
					$this->Model_slider->add($form_data);
					
					//Add Log User
					helper_log("add", '[TAMBAH] Data: '.$_POST['heading'].' ditambahkan ke Slider');

					$data['success'] = 'Slider is uploaded successfully!';

					unset($_POST['heading']);
					unset($_POST['heading_idn']);
					unset($_POST['content']);
					unset($_POST['content_idn']);
					unset($_POST['button1_text']);
					unset($_POST['button1_url']);
					unset($_POST['button2_text']);
					unset($_POST['button2_url']);
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_slider_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_slider_add',$data);
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

    		// If there is no slider in this id, then redirect
			$tot = $this->Model_slider->slider_check($id);
			if(!$tot) {
				redirect(base_url().'admin/slider');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) {
				$valid = 1;

				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];

				if($path!='') {
					$ext = pathinfo( $path, PATHINFO_EXTENSION );
					$file_name = basename( $path, '.' . $ext );
					$ext_check = $this->Model_header->extension_check_photo($ext);
					if($ext_check == FALSE) {
						$valid = 0;
						$data['error'] = 'Anda harus mengunggah file jpg, jpeg, gif atau png untuk foto unggulan<br>';
					}
				}

				if($valid == 1) {
					$data['slider'] = $this->Model_slider->getData($id);

					if($path == '') {
						$form_data = array(
							'heading'      => $_POST['heading'],
							'heading_idn'  => $_POST['heading_idn'],
							'content'      => $_POST['content'],
							'content_idn'  => $_POST['content_idn'],
							'button1_text' => $_POST['button1_text'],
							'button1_url'  => $_POST['button1_url'],
							'button2_text' => $_POST['button2_text'],
							'button2_url'  => $_POST['button2_url']
						);
						$this->Model_slider->update($id,$form_data);
					} else {
						unlink('./public/uploads/'.$data['slider']['photo']);

						$final_name = 'slider-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'photo'        => $final_name,
							'heading'      => $_POST['heading'],
							'heading_idn'  => $_POST['heading_idn'],
							'content'      => $_POST['content'],
							'content_idn'  => $_POST['content_idn'],
							'button1_text' => $_POST['button1_text'],
							'button1_url'  => $_POST['button1_url'],
							'button2_text' => $_POST['button2_text'],
							'button2_url'  => $_POST['button2_url']
						);
						$this->Model_slider->update($id,$form_data);
					}

					$data['success'] = 'Slider telah berhasil diupdate';
				}

				$data['slider'] = $this->Model_slider->getData($id);
				
				//Add Log User
				helper_log("edit", '[EDIT] Data: '.$_POST['heading'].' diupdate pada Slider');

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_slider_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				
				$data['slider'] = $this->Model_slider->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_slider_edit',$data);
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
			
			// If there is no slider in this id, then redirect
			$tot = $this->Model_slider->slider_check($id);
			
			if(!$tot) {
				redirect(base_url().'admin/slider');
				exit;
			}

			$data['slider'] = $this->Model_slider->getData($id);
			
			if($data['slider']) {
				unlink('./public/uploads/'.$data['slider']['photo']);
			}

			$this->Model_slider->delete($id);

			//Add Log User
			helper_log("Delete", '[HAPUS] Data: '.$data['slider']['heading'].' dihapus dari Slider');

			redirect(base_url().'admin/slider');
		} else {
			
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}

	}
}