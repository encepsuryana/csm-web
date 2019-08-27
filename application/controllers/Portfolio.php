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

		$this->load->view('view_header',$header);
		$this->load->view('view_portfolio_detail',$data);
		$this->load->view('view_footer');
	}
}
