<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_news');
	}

	public function page()
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


		$this->load->library('pagination');

		$config = array();
		$config["base_url"] 		= base_url() . "news/page";
		$config["total_rows"] 		= $this->Model_news->get_total_news();
		$config['first_url'] 		= base_url() . 'news/page/1';
		$config["per_page"] 		= 12;
		$config["uri_segment"] 		= 3;
		$config['use_page_numbers'] = TRUE;

		$this->pagination->initialize($config);

		$offset 			= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] 	= $this->Model_news->fetch_books($config["per_page"], $offset);
		$data["links"] 		= $this->pagination->create_links();

		$this->load->view('view_header',$header);
		$this->load->view('view_news',$data);
		$this->load->view('view_footer');
	}

	public function view($slug)
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

		$data['news'] 								= $this->Model_news->get_news_detail($slug);
		$data['news_category'] 						= $this->Model_news->get_news_category();

		$this->add_count($slug);
		$this->load->view('view_header',$header);
		$this->load->view('view_news_detail',$data);
		$this->load->view('view_footer');
	}

	function add_count($slug)
	{
        $this->load->helper('cookie');
        $check_visitor = $this->input->cookie(urldecode($slug), FALSE);
        $ip = $this->input->ip_address();
        if ($check_visitor == false) {
			$cookie = array("name" => urldecode($slug), "value" => "$ip", "expire" => time() + 7200, "secure" => false);
			$this->input->set_cookie($cookie);
			$this->Model_news->update_counter(urldecode($slug));
		}
	}
}
