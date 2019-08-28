<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newfacility extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_newfacility');
    }

	public function index()
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$header['newfacility_category'] = $this->Model_newfacility->get_newfacility_category();
		$header['newfacility'] = $this->Model_newfacility->get_newfacility_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_newfacility');
		$this->load->view('view_footer');
	}

	public function view($id)
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$header['newfacility_order_by_name'] = $this->Model_newfacility->get_newfacility_data_order_by_name();

		$data['newfacility'] = $this->Model_newfacility->get_newfacility_detail($id);
		$data['newfacility_photo'] = $this->Model_newfacility->get_newfacility_photo($id);
		$data['newfacility_photo_total'] = $this->Model_newfacility->get_newfacility_photo_number($id);

		$this->load->view('view_header',$header);
		$this->load->view('view_newfacility_detail',$data);
		$this->load->view('view_footer');
	}
}
