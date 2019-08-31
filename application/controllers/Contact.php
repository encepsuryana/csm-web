<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_contact');
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

		$header['service'] = $this->Model_contact->get_service_data();
		$header['facility'] = $this->Model_contact->get_facility_data();
		$header['facility_category'] = $this->Model_contact->get_facility_category();
		$header['portfolio_category'] = $this->Model_contact->get_portfolio_category();
		$header['portfolio'] = $this->Model_contact->get_portfolio_data();
		$header['partner'] = $this->Model_contact->get_partner_data();
		$header['product'] = $this->Model_contact->get_product_data();
		
		$header['electronics_division'] = $this->Model_contact->get_electronics_division_data();
		$header['electronics_division_category'] = $this->Model_contact->get_electronics_division_category();

		$data['error'] = '';
		$data['success'] = '';

		if(isset($_POST['form_contact'])) {

			$this->form_validation->set_rules('visitor_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('visitor_email', 'Email Address', 'trim|valid_email|required');
			$this->form_validation->set_rules('visitor_phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('visitor_comment', 'Comment', 'trim|required');
			
			if($this->form_validation->run() == FALSE) {
				$data['error'] = validation_errors();
			} else {
				$msg = '
				<h3>Visitor Information</h3>
				Name<br>
				'.$_POST['visitor_name'].'<br><br>
				Email<br>
				'.$_POST['visitor_email'].'<br><br>
				Phone<br>
				'.$_POST['visitor_phone'].'<br><br>
				Comment<br>
				'.nl2br($_POST['visitor_comment']).'
				';
				$this->load->library('email');

				$this->email->from($_POST['visitor_email'], $_POST['visitor_name']);
				$this->email->to($header['setting']['receive_email']);

				$this->email->subject('Contact Form Email - www.ciptasinergi.com');
				$this->email->message($msg);

				$this->email->send();

				$data['success'] = 'Thank you for sending us the email. We will contact you shortly.';
			}

		}

		$this->load->view('view_header',$header);
		$this->load->view('view_contact',$data);
		$this->load->view('view_footer');
		
	}

}