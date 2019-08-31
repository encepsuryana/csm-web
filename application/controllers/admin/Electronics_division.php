<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Electronics_division extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_electronics_division');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['electronics_division'] = $this->Model_electronics_division->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_electronics_division',$data);
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

				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
				$this->form_validation->set_rules('content', 'Content', 'trim|required');

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

				$path1 = $_FILES['banner']['name'];
				$path_tmp1 = $_FILES['banner']['tmp_name'];

				if($path1!='') {
					$ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
					$file_name1 = basename( $path1, '.' . $ext1 );
					$ext_check1 = $this->Model_header->extension_check_photo($ext1);
					if($ext_check1 == FALSE) {
						$valid = 0;
						$error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
					}
				} else {
					$valid = 0;
					$error .= 'You must have to select a photo for banner<br>';
				}

				if($valid == 1) 
				{
					$next_id = $this->Model_electronics_division->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'electronics_division-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$final_name1 = 'electronics_division-banner-'.$ai_id.'.'.$ext1;
					move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

					$form_data = array(
						'name'             => $_POST['name'],
						'short_content'    => $_POST['short_content'],
						'content'          => $_POST['content'],
						'category_id'      => $_POST['category_id'],
						'photo'            => $final_name,
						'banner'           => $final_name1,
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description']
					);
					$this->Model_electronics_division->add($form_data);


					if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
					{
						$photos = array();
						$photos = $_FILES['photos']["name"];
						$photos = array_values(array_filter($photos));

						$photos_temp = array();
						$photos_temp = $_FILES['photos']["tmp_name"];
						$photos_temp = array_values(array_filter($photos_temp));

						$next_id1 = $this->Model_electronics_division->get_auto_increment_id1();
						foreach ($next_id1 as $row1) {
							$ai_id1 = $row1['Auto_increment'];
						}

						$z = $ai_id1;

						$m=0;
						$final_names = array();
						for($i=0;$i<count($photos);$i++)
						{

							$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
							$ext_check = $this->Model_header->extension_check_photo($ext);
							if($ext_check == FALSE) {
				        	// Nothing to do, just skip
							} else {
								$final_names[$m] = $z.'.'.$ext;
								move_uploaded_file($photos_temp[$i],"./public/uploads/electronics_division_photos/".$final_names[$m]);
								$m++;
								$z++;
							}
						}
					}

					for($i=0;$i<count($final_names);$i++)
					{
						$form_data = array(
							'electronics_division_id' => $ai_id,
							'photo'        => $final_names[$i]
						);
						$this->Model_electronics_division->add_photos($form_data);
					}


					$data['success'] = 'electronics_division is added successfully!';

					unset($_POST['name']);
					unset($_POST['short_content']);
					unset($_POST['content']);
					unset($_POST['meta_title']);
					unset($_POST['meta_keyword']);
					unset($_POST['meta_description']);
				} 
				else
				{
					$data['error'] = $error;
				}

				$data['all_photo_category'] = $this->Model_electronics_division->get_all_photo_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_add',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['all_photo_category'] = $this->Model_electronics_division->get_all_photo_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_add',$data);
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
			$tot = $this->Model_electronics_division->electronics_division_check($id);
			if(!$tot) {
				redirect(base_url().'admin/electronics_division');
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
				$this->form_validation->set_rules('short_content', 'Short Content', 'trim|required');
				$this->form_validation->set_rules('content', 'Content', 'trim|required');

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

				$path1 = $_FILES['banner']['name'];
				$path_tmp1 = $_FILES['banner']['tmp_name'];

				if($path1!='') {
					$ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
					$file_name1 = basename( $path1, '.' . $ext1 );
					$ext_check1 = $this->Model_header->extension_check_photo($ext1);
					if($ext_check1 == FALSE) {
						$valid = 0;
						$error .= 'You must have to upload jpg, jpeg, gif or png file for banner<br>';
					}
				}

				if($valid == 1) 
				{
					$data['electronics_division'] = $this->Model_electronics_division->getData($id);

					if($path == '' && $path1 == '') {
						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description']
						);
						$this->Model_electronics_division->update($id,$form_data);
					}
					if($path != '' && $path1 == '') {
						unlink('./public/uploads/'.$data['electronics_division']['photo']);

						$final_name = 'electronics_division-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'photo'            => $final_name,
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description']
						);
						$this->Model_electronics_division->update($id,$form_data);
					}
					if($path == '' && $path1 != '') {
						unlink('./public/uploads/'.$data['electronics_division']['banner']);

						$final_name1 = 'electronics_division-banner-'.$id.'.'.$ext1;
						move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'banner'           => $final_name1,
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description']
						);
						$this->Model_electronics_division->update($id,$form_data);
					}
					if($path != '' && $path1 != '') {

						unlink('./public/uploads/'.$data['electronics_division']['photo']);
						unlink('./public/uploads/'.$data['electronics_division']['banner']);

						$final_name = 'electronics_division-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$final_name1 = 'electronics_division-banner-'.$id.'.'.$ext1;
						move_uploaded_file( $path_tmp1, './public/uploads/'.$final_name1 );

						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'photo'            => $final_name,
							'banner'           => $final_name1,
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description']
						);
						$this->Model_electronics_division->update($id,$form_data);
					}

					if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
					{
						$photos = array();
						$photos = $_FILES['photos']["name"];
						$photos = array_values(array_filter($photos));

						$photos_temp = array();
						$photos_temp = $_FILES['photos']["tmp_name"];
						$photos_temp = array_values(array_filter($photos_temp));

						$next_id1 = $this->Model_electronics_division->get_auto_increment_id1();
						foreach ($next_id1 as $row1) {
							$ai_id1 = $row1['Auto_increment'];
						}

						$z = $ai_id1;

						$m=0;
						$final_names = array();
						for($i=0;$i<count($photos);$i++)
						{

							$ext = pathinfo( $photos[$i], PATHINFO_EXTENSION );
							$ext_check = $this->Model_header->extension_check_photo($ext);
							if($ext_check == FALSE) {
				        	// Nothing to do, just skip
							} else {
								$final_names[$m] = $z.'.'.$ext;
								move_uploaded_file($photos_temp[$i],"./public/uploads/electronics_division_photos/".$final_names[$m]);
								$m++;
								$z++;
							}
						}
					}

					for($i=0;$i<count($final_names);$i++)
					{
						$form_data = array(
							'electronics_division_id' => $id,
							'photo'        => $final_names[$i]
						);
						$this->Model_electronics_division->add_photos($form_data);
					}

					$data['success'] = 'electronics_division is updated successfully';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['electronics_division'] = $this->Model_electronics_division->getData($id);
				$data['all_photo_category'] = $this->Model_electronics_division->get_all_photo_category();
				$data['all_photos_by_id'] = $this->Model_electronics_division->get_all_photos_by_category_id($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['electronics_division'] = $this->Model_electronics_division->getData($id);
				$data['all_photo_category'] = $this->Model_electronics_division->get_all_photo_category();
				$data['all_photos_by_id'] = $this->Model_electronics_division->get_all_photos_by_category_id($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_electronics_division_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if ($this->session->userdata('role') == 'admin') {
		// If there is no electronics_division in this id, then redirect
			$tot = $this->Model_electronics_division->electronics_division_check($id);
			if(!$tot) {
				redirect(base_url().'admin/electronics_division');
				exit;
			}

			$data['electronics_division'] = $this->Model_electronics_division->getData($id);
			if($data['electronics_division']) {
				unlink('./public/uploads/'.$data['electronics_division']['photo']);
				unlink('./public/uploads/'.$data['electronics_division']['banner']);
			}

			$electronics_division_photos = $this->Model_electronics_division->get_all_photos_by_category_id($id);
			foreach($electronics_division_photos as $row) {
				unlink('./public/uploads/electronics_division_photos/'.$row['photo']);
			}

			$this->Model_electronics_division->delete($id);
			$this->Model_electronics_division->delete_photos($id);

			redirect(base_url().'admin/electronics_division');
		} else {
			show_404();
		}
	}

	public function single_photo_delete($photo_id=0,$electronics_division_id=0) {
		if ($this->session->userdata('role') == 'admin') {

			$electronics_division_photo = $this->Model_electronics_division->electronics_division_photo_by_id($photo_id);
			unlink('./public/uploads/electronics_division_photos/'.$electronics_division_photo['photo']);

			$this->Model_electronics_division->delete_electronics_division_photo($photo_id);

			redirect(base_url().'admin/electronics_division/edit/'.$electronics_division_id);

		} else {
			show_404();
		}
	}

}