<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_category');
	}

	public function view($id)
	{
		// If there is no id after category in URL, redirect to the category page
		if(!$id)
		{
			redirect(base_url());
			exit;
		}

		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$data['category'] = $this->Model_category->get_category_data($id);
		$data['news'] = $this->Model_category->get_news_data($id);

		$header['service'] = $this->Model_category->get_service_data();
		$header['facility'] = $this->Model_category->get_facility_data();
		$header['facility_category'] = $this->Model_category->get_facility_category();
		$header['portfolio_category'] = $this->Model_category->get_portfolio_category();
		$header['portfolio'] = $this->Model_category->get_portfolio_data();
		$header['partner'] = $this->Model_category->get_partner_data();
		$header['product'] = $this->Model_category->get_product_data();
		$header['electronics_division'] = $this->Model_category->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_category->get_electronics_division_category();

		$this->load->view('view_header',$header);
		$this->load->view('view_category',$data);
		$this->load->view('view_footer');
	}

}
