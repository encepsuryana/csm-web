<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_language');
	}

	public function index()
	{
		if ($this->session->userdata('role') == 'admin') {
			$header['setting'] = $this->Model_header->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{

				foreach ($_POST['new_arr'] as $val) {
					$new_arr2[] = $val;
				}

				foreach ($_POST['new_arr1'] as $val) {
					$new_arr3[] = $val;
				}

				for($i=0;$i<count($new_arr2);$i++) {
					$form_data = array(
						'eng' => $new_arr2[$i]
					);
					$this->Model_language->update($new_arr3[$i],$form_data);
				}

				$data['success'] = 'Language data is updated successfully';

				$data['language'] = $this->Model_language->show();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_language',$data);
				$this->load->view('admin/view_footer');

			} elseif(isset($_POST['form2'])) 
			{

				foreach ($_POST['new_arr'] as $val) {
					$new_arr2[] = $val;
				}

				foreach ($_POST['new_arr1'] as $val) {
					$new_arr3[] = $val;
				}

				for($i=0;$i<count($new_arr2);$i++) {
					$form_data = array(
						'idn' => $new_arr2[$i]
					);
					$this->Model_language->update($new_arr3[$i],$form_data);
				}

				$data['success'] = 'Language data is updated successfully';

				$data['language'] = $this->Model_language->show();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_language',$data);
				$this->load->view('admin/view_footer');

			} else {
				$data['language'] = $this->Model_language->show();
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_language',$data);
				$this->load->view('admin/view_footer');
			}

		}
		else {
			show_404();
		}
	}
}