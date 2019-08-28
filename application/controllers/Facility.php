<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_facility');
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

		$header['facility_category'] = $this->Model_facility->get_facility_category();
		$header['facility'] = $this->Model_facility->get_facility_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_facility');
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

		$header['facility_order_by_name'] = $this->Model_facility->get_facility_data_order_by_name();

		$data['facility'] = $this->Model_facility->get_facility_detail($id);
		$data['facility_photo'] = $this->Model_facility->get_facility_photo($id);
		$data['facility_photo_total'] = $this->Model_facility->get_facility_photo_number($id);

		$this->load->view('view_header',$header);
		$this->load->view('view_facility_detail',$data);
		$this->load->view('view_footer');
	}
}
