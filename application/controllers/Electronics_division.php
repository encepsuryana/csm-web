<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Electronics_division extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_electronics_division');
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

		$header['electronics_division'] = $this->Model_electronics_division->get_electronics_division_data();
		$header['electronics_division_desc'] = $this->Model_electronics_division->show_electronics_division_desc();
		$header['electronics_division_category'] = $this->Model_electronics_division->get_electronics_division_category();

		$header['service'] = $this->Model_electronics_division->get_service_data();
		$header['facility_category'] = $this->Model_electronics_division->get_facility_category();
		$header['facility'] = $this->Model_electronics_division->get_facility_data();
		$header['portfolio_category'] = $this->Model_electronics_division->get_portfolio_category();
		$header['portfolio'] = $this->Model_electronics_division->get_portfolio_data();
		$header['partner'] = $this->Model_electronics_division->get_partner_data();
		$header['product'] = $this->Model_electronics_division->get_product_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_electronics_division');
		$this->load->view('view_footer');
	}

	public function view($slug)
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$header['electronics_division_order_by_name'] = $this->Model_electronics_division->get_electronics_division_data_order_by_name();

		$data['electronics_division'] = $this->Model_electronics_division->get_electronics_division_detail($slug);
		$data['electronics_division_photo'] = $this->Model_electronics_division->get_electronics_division_photo($slug);
		$data['electronics_division_photo_total'] = $this->Model_electronics_division->get_electronics_division_photo_number($slug);

		$header['service'] = $this->Model_electronics_division->get_service_data();
		$header['facility'] = $this->Model_electronics_division->get_facility_data();
		$header['facility_category'] = $this->Model_electronics_division->get_facility_category();
		$header['electronics_division'] = $this->Model_electronics_division->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_electronics_division->get_electronics_division_category();
		$header['portfolio_category'] = $this->Model_electronics_division->get_portfolio_category();
		$header['portfolio'] = $this->Model_electronics_division->get_portfolio_data();
		$header['partner'] = $this->Model_electronics_division->get_partner_data();
		$header['product'] = $this->Model_electronics_division->get_product_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_electronics_division_detail',$data);
		$this->load->view('view_footer');
	}
}
