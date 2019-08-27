<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_member extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_team_member');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

			$header['setting'] = $this->Model_header->get_setting_data();

			$data['team_member'] = $this->Model_team_member->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_team_member',$data);
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

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('designation_id', 'Designation', 'trim|required');

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
					$next_id = $this->Model_team_member->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'team-member-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'name'           => $_POST['name'],
						'designation_id' => $_POST['designation_id'],
						'photo'          => $final_name,
						'facebook'       => $_POST['facebook'],
						'twitter'        => $_POST['twitter'],
						'linkedin'       => $_POST['linkedin'],
						'youtube'        => $_POST['youtube'],
						'google_plus'    => $_POST['google_plus'],
						'instagram'      => $_POST['instagram'],
						'flickr'         => $_POST['flickr']
					);
					$this->Model_team_member->add($form_data);

					$data['success'] = 'Team Member is added successfully!';

					unset($_POST['name']);
					unset($_POST['facebook']);
					unset($_POST['twitter']);
					unset($_POST['linkedin']);
					unset($_POST['youtube']);
					unset($_POST['google_plus']);
					unset($_POST['instagram']);
					unset($_POST['flickr']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$data['all_designation'] = $this->Model_team_member->get_designation();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_team_member_add',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['all_designation'] = $this->Model_team_member->get_designation();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_team_member_add',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

    	// If there is no service in this id, then redirect
			$tot = $this->Model_team_member->team_member_check($id);
			if(!$tot) {
				redirect(base_url().'admin/team-member');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';


			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('designation_id', 'Designation', 'trim|required');

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
					$data['team_member'] = $this->Model_team_member->getData($id);

					if($path == '') {
						$form_data = array(
							'name'           => $_POST['name'],
							'designation_id' => $_POST['designation_id'],
							'facebook'       => $_POST['facebook'],
							'twitter'        => $_POST['twitter'],
							'linkedin'       => $_POST['linkedin'],
							'youtube'        => $_POST['youtube'],
							'google_plus'    => $_POST['google_plus'],
							'instagram'      => $_POST['instagram'],
							'flickr'         => $_POST['flickr']
						);
						$this->Model_team_member->update($id,$form_data);
					}
					else {
						unlink('./public/uploads/'.$data['team_member']['photo']);

						$final_name = 'team-member-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'name'           => $_POST['name'],
							'designation_id' => $_POST['designation_id'],
							'photo'          => $final_name,
							'facebook'       => $_POST['facebook'],
							'twitter'        => $_POST['twitter'],
							'linkedin'       => $_POST['linkedin'],
							'youtube'        => $_POST['youtube'],
							'google_plus'    => $_POST['google_plus'],
							'instagram'      => $_POST['instagram'],
							'flickr'         => $_POST['flickr']
						);
						$this->Model_team_member->update($id,$form_data);
					}				

					$data['success'] = 'Team Member is updated successfully';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['team_member'] = $this->Model_team_member->getData($id);
				$data['all_designation'] = $this->Model_team_member->get_designation();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_team_member_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['team_member'] = $this->Model_team_member->getData($id);
				$data['all_designation'] = $this->Model_team_member->get_designation();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_team_member_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {

		// If there is no team member in this id, then redirect
			$tot = $this->Model_team_member->team_member_check($id);
			if(!$tot) {
				redirect(base_url().'admin/team-member');
				exit;
			}

			$data['team_member'] = $this->Model_team_member->getData($id);
			if($data['team_member']) {
				unlink('./public/uploads/'.$data['team_member']['photo']);
			}

			$this->Model_team_member->delete($id);
			redirect(base_url().'admin/team-member');
		} else {
			show_404();
		}
	}


}