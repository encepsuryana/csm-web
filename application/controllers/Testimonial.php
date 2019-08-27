<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_testimonial');
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

		$header['testimonial'] = $this->Model_testimonial->get_testimonial_data();

		$this->load->view('view_header',$header);
		$this->load->view('view_testimonial');
		$this->load->view('view_footer');
	}
}
