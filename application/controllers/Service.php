<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_service');
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

		$header['service'] = $this->Model_service->get_service_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_service');
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

		$header['service_by_heading'] = $this->Model_service->get_service_data_order_by_heading();

		$data['res'] = $this->Model_service->get_service_detail($id);

		$this->load->view('view_header',$header);
		$this->load->view('view_service_detail',$data);
		$this->load->view('view_footer');
	}
}
