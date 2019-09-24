<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_portfolio');
	}

	public function index()
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff') or ($this->session->userdata('role') == 'hrd')) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['portfolio'] = $this->Model_portfolio->show();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_portfolio',$data);
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
				$judul = $_POST['name'];
				$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
				$slug=$pre_slug.'.html';
				$this->form_validation->set_rules('name', 'Judul', 'trim|required');
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
					$next_id = $this->Model_portfolio->get_auto_increment_id();
					foreach ($next_id as $row) {
						$ai_id = $row['Auto_increment'];
					}

					$final_name = 'portfolio-'.$ai_id.'.'.$ext;
					move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

					$form_data = array(
						'name'             => $_POST['name'],
						'short_content'    => $_POST['short_content'],
						'content'          => $_POST['content'],
						'category_id'      => $_POST['category_id'],
						'photo'            => $final_name,
						'meta_title'       => $_POST['meta_title'],
						'meta_keyword'     => $_POST['meta_keyword'],
						'meta_description' => $_POST['meta_description'],
						'slug_portfolio' => $slug,

					);
					$this->Model_portfolio->add($form_data);


					if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
					{
						$photos = array();
						$photos = $_FILES['photos']["name"];
						$photos = array_values(array_filter($photos));

						$photos_temp = array();
						$photos_temp = $_FILES['photos']["tmp_name"];
						$photos_temp = array_values(array_filter($photos_temp));

						$next_id1 = $this->Model_portfolio->get_auto_increment_id1();
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
								move_uploaded_file($photos_temp[$i],"./public/uploads/portfolio_photos/".$final_names[$m]);
								$m++;
								$z++;
							}
						}
					}

					for($i=0;$i<count($final_names);$i++)
					{
						$form_data = array(
							'product_id' 	 => $ai_id,
							'slug_portfolio' => $slug,
							'photo'        	 => $final_names[$i]
						);
						$this->Model_portfolio->add_photos($form_data);
					}


					$data['success'] = 'Portofolio berhasil ditambahkan!';

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

				$data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_portfolio_add',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_portfolio_add',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}

	public function edit($id)
	{
		if (($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'staff')) {
			$tot = $this->Model_portfolio->portfolio_check($id);
			if(!$tot) {
				redirect(base_url().'admin/portfolio');
				exit;
			}

			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{
				$valid = 1;

				$this->form_validation->set_rules('name', 'Judul', 'trim|required');
				$this->form_validation->set_rules('short_content', 'Konten Singkat', 'trim|required');
				$this->form_validation->set_rules('content', 'Konten', 'trim|required');

				$judul = $_POST['name'];
				$string=preg_replace('/[^A-Za-z0-9\- ]/', '', $judul); 
				$trim=trim($string);
				$pre_slug=strtolower(str_replace(" ", "-", $trim)); 
				$slug=$pre_slug.'.html';

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
					$data['portfolio'] = $this->Model_portfolio->getData($id);

					if($path == '') {
						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description'],
							'slug_portfolio'   => $slug
						);
						$this->Model_portfolio->update($id,$form_data);
					}
					else {
						unlink('./public/uploads/'.$data['portfolio']['photo']);

						$final_name = 'portfolio-'.$id.'.'.$ext;
						move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

						$form_data = array(
							'name'             => $_POST['name'],
							'short_content'    => $_POST['short_content'],
							'content'          => $_POST['content'],
							'category_id'      => $_POST['category_id'],
							'photo'            => $final_name,
							'meta_title'       => $_POST['meta_title'],
							'meta_keyword'     => $_POST['meta_keyword'],
							'meta_description' => $_POST['meta_description'],
							'slug_portfolio'   => $slug
						);
						$this->Model_portfolio->update($id,$form_data);
					}

					if( isset($_FILES['photos']["name"]) && isset($_FILES['photos']["tmp_name"]) )
					{
						$photos = array();
						$photos = $_FILES['photos']["name"];
						$photos = array_values(array_filter($photos));

						$photos_temp = array();
						$photos_temp = $_FILES['photos']["tmp_name"];
						$photos_temp = array_values(array_filter($photos_temp));

						$next_id1 = $this->Model_portfolio->get_auto_increment_id1();
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
							} else {
								$final_names[$m] = $z.'.'.$ext;
								move_uploaded_file($photos_temp[$i],"./public/uploads/portfolio_photos/".$final_names[$m]);
								$m++;
								$z++;
							}
						}
					}

					for($i=0;$i<count($final_names);$i++)
					{
						$form_data = array(
							'portfolio_id' => $id,
							'slug_portfolio' => $slug,
							'photo'        => $final_names[$i]
						);
						$this->Model_portfolio->add_photos($form_data);
					}



					$data['success'] = 'Portofolio telah berhasil diupdate';
				}
				else
				{
					$data['error'] = $error;
				}

				$data['portfolio'] = $this->Model_portfolio->getData($id);
				$data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
				$data['all_photos_by_id'] = $this->Model_portfolio->get_all_photos_by_category_id($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_portfolio_edit',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['portfolio'] = $this->Model_portfolio->getData($id);
				$data['all_photo_category'] = $this->Model_portfolio->get_all_photo_category();
				$data['all_photos_by_id'] = $this->Model_portfolio->get_all_photos_by_category_id($id);
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_portfolio_edit',$data);
				$this->load->view('admin/view_footer');
			}

		} else {
			show_404();
		}
	}


	public function delete($id) 
	{
		if ($this->session->userdata('role') == 'admin') {
		// If there is no portfolio in this id, then redirect
			$tot = $this->Model_portfolio->portfolio_check($id);
			if(!$tot) {
				redirect(base_url().'admin/portfolio');
				exit;
			}

			$data['portfolio'] = $this->Model_portfolio->getData($id);
			if($data['portfolio']) {
				unlink('./public/uploads/'.$data['portfolio']['photo']);
			}

			$portfolio_photos = $this->Model_portfolio->get_all_photos_by_category_id($id);
			foreach($portfolio_photos as $row) {
				unlink('./public/uploads/portfolio_photos/'.$row['photo']);
			}

			$this->Model_portfolio->delete($id);
			$this->Model_portfolio->delete_photos($id);

			redirect(base_url().'admin/portfolio');
		} else {
			show_404();
		}
	}

	public function single_photo_delete($photo_id=0,$portfolio_id=0) {
		if ($this->session->userdata('role') == 'admin') {

			$portfolio_photo = $this->Model_portfolio->portfolio_photo_by_id($photo_id);
			unlink('./public/uploads/portfolio_photos/'.$portfolio_photo['photo']);

			$this->Model_portfolio->delete_portfolio_photo($photo_id);

			redirect(base_url().'admin/portfolio/edit/'.$portfolio_id);

		} else {
			show_404();
		}
	}

}