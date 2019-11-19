<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_gallery');
	}

	public function index()
	{
		$header['setting'] 							= $this->Model_common->get_setting_data();
		$header['page'] 							= $this->Model_common->get_page_data();
		$header['comment'] 							= $this->Model_common->get_comment_code();
		$header['social'] 							= $this->Model_common->get_social_data();
		$header['language'] 						= $this->Model_common->get_language_data();
		$header['latest_news'] 						= $this->Model_common->get_latest_news();
		$header['popular_news'] 					= $this->Model_common->get_popular_news();
		$header['service'] 							= $this->Model_common->get_service_data();
		$header['facility'] 						= $this->Model_common->get_facility_data();
		$header['facility_category'] 				= $this->Model_common->get_facility_category();
		$header['portfolio_category'] 				= $this->Model_common->get_portfolio_category();
		$header['portfolio'] 						= $this->Model_common->get_portfolio_data();
		$header['partner'] 							= $this->Model_common->get_partner_data();
		$header['product'] 							= $this->Model_common->get_product_data();
		$header['aviation_electronics'] 			= $this->Model_common->get_aviation_electronics_data();
		$header['aviation_electronics_category'] 	= $this->Model_common->get_aviation_electronics_category();
		$header['owner'] 							= $this->Model_common->get_owner_data();
		
		$header['gallery'] 							= $this->Model_gallery->get_gallery_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_gallery');
		$this->load->view('view_footer');
	}
}
