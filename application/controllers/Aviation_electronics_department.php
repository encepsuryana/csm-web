<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aviation_electronics_department extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_aviation');
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
		$header['facility_category'] 				= $this->Model_common->get_facility_category();
		$header['facility'] 						= $this->Model_common->get_facility_data();
		$header['portfolio_category'] 				= $this->Model_common->get_portfolio_category();
		$header['portfolio'] 						= $this->Model_common->get_portfolio_data();
		$header['partner'] 							= $this->Model_common->get_partner_data();
		$header['product'] 							= $this->Model_common->get_product_data();
		
		$header['aviation_electronics'] 			= $this->Model_aviation->get_ae_data();
		$header['aviation_electronics_desc'] 		= $this->Model_aviation->show_ae_desc();
		$header['aviation_electronics_category'] 	= $this->Model_aviation->get_ae_category();

		$this->load->view('view_header',$header);
		$this->load->view('view_aviation_electronics');
		$this->load->view('view_footer');
	}

	public function view($slug)
	{
		$header['setting'] 								= $this->Model_common->get_setting_data();
		$header['page'] 								= $this->Model_common->get_page_data();
		$header['comment'] 								= $this->Model_common->get_comment_code();
		$header['social'] 								= $this->Model_common->get_social_data();
		$header['language'] 							= $this->Model_common->get_language_data();
		$header['latest_news'] 							= $this->Model_common->get_latest_news();
		$header['popular_news'] 						= $this->Model_common->get_popular_news();
		$header['service'] 								= $this->Model_common->get_service_data();
		$header['facility_category'] 					= $this->Model_common->get_facility_category();
		$header['facility'] 							= $this->Model_common->get_facility_data();
		$header['portfolio_category'] 					= $this->Model_common->get_portfolio_category();
		$header['portfolio'] 							= $this->Model_common->get_portfolio_data();
		$header['partner'] 								= $this->Model_common->get_partner_data();
		$header['product'] 								= $this->Model_common->get_product_data();

		$header['aviation_electronics_order_by_name'] 	= $this->Model_aviation->get_ae_data_order_by_name();
		$data['aviation_electronics'] 					= $this->Model_aviation->get_ae_detail($slug);
		$data['aviation_electronics_photo'] 			= $this->Model_aviation->get_ae_photo($slug);
		$data['aviation_electronics_photo_total'] 		= $this->Model_aviation->get_ae_photo_number($slug);
		$header['aviation_electronics_category'] 		= $this->Model_aviation->get_ae_category();

		$this->load->view('view_header',$header);
		$this->load->view('view_aviation_electronics_detail',$data);
		$this->load->view('view_footer');
	}
}
