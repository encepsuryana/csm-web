<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_home');
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
		
		$header['slider'] = $this->Model_home->get_slider_data();
		$header['content_home'] = $this->Model_home->get_content_home_data();
		$header['content_home_photo'] = $this->Model_home->get_content_home_photo();
		$header['service'] = $this->Model_home->get_service_data();
		$header['electronics_division'] = $this->Model_home->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_home->get_electronics_division_category();
		$header['facility'] = $this->Model_home->get_facility_data();
		$header['facility_category'] = $this->Model_home->get_facility_category();
		$header['portfolio_category'] = $this->Model_home->get_portfolio_category();
		$header['portfolio'] = $this->Model_home->get_portfolio_data();
		$header['team'] = $this->Model_home->get_team_member_data();
		$header['testimonial'] = $this->Model_home->get_testimonial_data();
		$header['testimonial_photo'] = $this->Model_home->get_testimonial_photo();
		$header['gallery'] = $this->Model_home->get_gallery_data();
		$header['partner'] = $this->Model_home->get_partner_data();
		$header['product'] = $this->Model_home->get_product_data();
		
		$this->load->view('view_header', $header);
		$this->load->view('view_home');
		$this->load->view('view_footer');
	}
}
