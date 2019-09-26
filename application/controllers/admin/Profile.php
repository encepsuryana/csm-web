<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_profile');
		$this->load->model('admin/Model_log');
	}
	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['users'] = $this->Model_profile->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_profile',$data);
			$this->load->view('admin/view_footer');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function update()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_header->get_setting_data();

			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('full_name', 'Nama Lengkap', 'trim|required');
				$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
				$this->form_validation->set_rules('phone', 'No. Telp', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) {
					$form_data = array(
						'full_name' => $_POST['full_name'],
						'email'     => $_POST['email'],
						'phone'     => $_POST['phone']
					);
					$this->Model_profile->update($form_data);
					
					//Add Log User
					helper_log("edit", '[EDIT] Data Informasi: '.$_POST['full_name'].' telah diubah.');

					$data['success'] = 'Informasi Profil telah berhasil diupdate!';

					$this->session->set_userdata($form_data);
				}
			}

			if(isset($_POST['form2'])) {

				$valid = 1;
				$path = $_FILES['photo']['name'];
				$path_tmp = $_FILES['photo']['tmp_name'];
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
		    	// removing the existing photo
					unlink('./public/uploads/'.$this->session->userdata('photo'));

		    	// updating the data
					$final_name = 'avatar-'.$this->session->userdata('id').'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'photo' => $final_name
					);
					$this->Model_profile->update($form_data);

					//Add Log User
					helper_log("edit", '[EDIT] Foto: '.$this->session->userdata('full_name').' telah diubah');

					$data['success'] = 'Photo telah berhasil diupdate!';

					$this->session->set_userdata($form_data);
				}        	
			}

			if(isset($_POST['form3'])) {
				$valid = 1;

				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[password]');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) {

					$form_data = array(
						'password' => md5($_POST['password'])
					);
					$this->Model_profile->update($form_data);
					
					//Add Log User
					helper_log("edit", '[EDIT] Password: '.$this->session->userdata('full_name').', Role: '.$this->session->userdata('role').' telah diubah.');

					$data['success'] = 'Password telah berhasil diupdate!';

					$this->session->set_userdata($form_data);
				}
			}

			$header['setting'] = $this->Model_header->get_setting_data();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_profile',$data);
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
		if ($this->session->userdata('role') == 'admin') {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form_add'])) {

				$valid = 1;

				$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');				
				$this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[password]');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$error .= validation_errors();
				}

				$path = $_FILES['photo_avatar']['name'];
				$path_tmp = $_FILES['photo_avatar']['tmp_name'];

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
					$next_id = $this->Model_profile->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'avatar-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'full_name'	=> $_POST['full_name'],
						'email' 	=> $_POST['email'],
						'phone'     => $_POST['phone'],
						'password'  => md5($_POST['password']),
						'photo'     => $final_name,
						'role'     	=> $_POST['role'],
						'status'    => $_POST['status'],
						'token'     => $_POST['token']
					);
					$this->Model_profile->add_user($form_data);
					
					//Add Log User
					helper_log("add", '[TAMBAH] User:'.$_POST['full_name'].' ditambahkan oleh '.$this->session->userdata('full_name'));
					
					$data['success'] = 'profile berhasil ditambahkan!';

					unset($_POST['full_name']);
					unset($_POST['email']);
					unset($_POST['phone']);
					unset($_POST['password']);
					unset($_POST['re_password']);
					unset($_POST['role']);
					unset($_POST['status']);
					unset($_POST['token']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_profile_add',$data);
				$this->load->view('admin/view_footer');

			} else {

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_profile_add',$data);
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
		if ($this->session->userdata('role') == 'admin') {

    		// If there is no profile in this id, then redirect
			$tot = $this->Model_profile->profile_check($id);
			if(!$tot) {
				redirect(base_url().'admin/profile');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form_update'])) 
			{
				$valid = 1;

				$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');				
				$this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[password]');

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
					$data['profile'] = $this->Model_profile->getData($id);
					
					if($path == '') {
						$form_data = array(
							'full_name'	=> $_POST['full_name'],
							'email' 	=> $_POST['email'],
							'phone'     => $_POST['phone'],
							'password'  => md5($_POST['password']),
							'role'     	=> $_POST['role'],
							'status'    => $_POST['status'],
							'token'     => $_POST['token']
						);
						$this->Model_profile->update_user($id,$form_data);
					}
					else {
						unlink('./public/uploads/'.$data['profile']['photo']);

						$final_name = 'avatar-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'full_name'	=> $_POST['full_name'],
							'email' 	=> $_POST['email'],
							'phone'     => $_POST['phone'],
							'password'  => md5($_POST['password']),
							'photo'     => $final_name,
							'role'     	=> $_POST['role'],
							'status'    => $_POST['status'],
							'token'     => $_POST['token']
						);
						$this->Model_profile->update_user($id,$form_data);
					}

					//Add Log User
					helper_log("edit", '[EDIT] Data User:'.$_POST['full_name'].' diubah oleh '.$this->session->userdata('full_name'));

					$data['success'] = 'profile telah berhasil diupdate';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['profile'] = $this->Model_profile->getData($id);
				
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_profile_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['profile'] = $this->Model_profile->getData($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_profile_edit',$data);
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
		if (($this->session->userdata('role') == 'admin')) {

		// If there is no profile in this id, then redirect
			$tot = $this->Model_profile->profile_check($id);
			if(!$tot) {
				redirect(base_url().'admin/profile');
				exit;
			}

			$data['profile'] = $this->Model_profile->getData($id);

			if($data['profile']) {
				unlink('./public/uploads/'.$data['profile']['photo']);
			}

			$this->Model_profile->delete_user($id);

			//Add Log User
			helper_log("delete", '[HAPUS] Data User Id:'.$data['profile']['full_name'].' dihapus oleh '.$this->session->userdata('full_name'));

			redirect(base_url().'admin/profile');
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}	
}
