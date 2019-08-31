<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_portfolio');
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

		$header['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$header['portfolio'] = $this->Model_portfolio->get_portfolio_data();

		$header['service'] = $this->Model_portfolio->get_service_data();
		$header['facility'] = $this->Model_portfolio->get_facility_data();
		$header['facility_category'] = $this->Model_portfolio->get_facility_category();
		$header['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$header['portfolio'] = $this->Model_portfolio->get_portfolio_data();
		$header['partner'] = $this->Model_portfolio->get_partner_data();
		$header['product'] = $this->Model_portfolio->get_product_data();
		$header['electronics_division'] = $this->Model_portfolio->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_portfolio->get_electronics_division_category();

		$this->load->view('view_header',$header);
		$this->load->view('view_portfolio');
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

		$header['portfolio_order_by_name'] = $this->Model_portfolio->get_portfolio_data_order_by_name();

		$data['portfolio'] = $this->Model_portfolio->get_portfolio_detail($id);
		$data['portfolio_photo'] = $this->Model_portfolio->get_portfolio_photo($id);
		$data['portfolio_photo_total'] = $this->Model_portfolio->get_portfolio_photo_number($id);

		$header['service'] = $this->Model_portfolio->get_service_data();
		$header['facility'] = $this->Model_portfolio->get_facility_data();
		$header['facility_category'] = $this->Model_portfolio->get_facility_category();
		$header['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$header['portfolio'] = $this->Model_portfolio->get_portfolio_data();
		$header['partner'] = $this->Model_portfolio->get_partner_data();
		$header['product'] = $this->Model_portfolio->get_product_data();
		$header['electronics_division'] = $this->Model_portfolio->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_portfolio->get_electronics_division_category();

		$this->load->view('view_header',$header);
		$this->load->view('view_portfolio_detail',$data);
		$this->load->view('view_footer');
	}
}
