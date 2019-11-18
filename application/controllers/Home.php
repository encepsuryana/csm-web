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
		$header['aviation_electronics'] = $this->Model_home->get_aviation_electronics_data();
		$header['aviation_electronics_category'] = $this->Model_home->get_aviation_electronics_category();
		$header['aviation_electronics_desc'] = $this->Model_home->show_ae_desc();
		$header['facility'] = $this->Model_home->get_facility_data();
		$header['facility_category'] = $this->Model_home->get_facility_category();
		$header['portfolio_category'] = $this->Model_home->get_portfolio_category();
		$header['portfolio'] = $this->Model_home->get_portfolio_data();
		$header['testimonial'] = $this->Model_home->get_testimonial_data();
		$header['gallery'] = $this->Model_home->get_gallery_data();
		$header['partner'] = $this->Model_home->get_partner_data();
		$header['product'] = $this->Model_home->get_product_data();
		$header['product'] = $this->Model_home->get_product_data_star();
		
		$this->load->view('view_header', $header);
		$this->load->view('view_home');
		$this->load->view('view_footer');
	}
}
