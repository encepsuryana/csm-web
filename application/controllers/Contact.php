<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_common');
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

		$recaptcha = $this->input->post('g-recaptcha-response');
		$data = array(
			'widget' => $this->recaptcha->getWidget(),
			'script' => $this->recaptcha->getScriptTag(),
		);
		$data['error'] = '';
		$data['success'] = '';

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => $header['setting']['protocol'],
			'smtp_host' => $header['setting']['smtp_host'],
			'smtp_user' => $header['setting']['receive_email'],    
			'smtp_pass' => $header['setting']['receive_password'], 
			'smtp_port' => $header['setting']['smtp_port'],
			'crlf'      => "\r\n",
			'newline'   => "\r\n"
		];

		$this->load->library('email', $config);

		if(isset($_POST['form_contact'])) {

			$this->form_validation->set_rules('visitor_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('visitor_email', 'Email Address', 'trim|valid_email|required');
			$this->form_validation->set_rules('visitor_phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('visitor_company', 'Company', 'trim|required');
			$this->form_validation->set_rules('visitor_comment', 'Comment', 'trim|required');

			$judul = $_POST['visitor_comment'];
			$string=preg_replace('/<[^>]*>/', '', $judul); 
			$trim=trim($string);
			$visitor_message=$trim;
			
			if($this->form_validation->run() == FALSE) {
				$data['error'] = validation_errors();
			} else {
				if (!empty($recaptcha)) {
					$response = $this->recaptcha->verifyResponse($recaptcha);
					if (isset($response['success']) and $response['success'] === true) {
						$msg = '
						<img src='.$header['setting']['logo_image'].' alt='.$header['setting']['logo_alt'].' height="auto" width="150"> 
						<h4 style="background: #'.$header['setting']['background'].'; color: #'.$header['setting']['text_color'].'; padding: 10px; margin-bottom: 5px;">Informasi Pengirim Pesan</h4>
						<div style="margin: 10px;">
						<b>Nama :</b> '.$_POST['visitor_name'].'<br>
						<b>Email :</b> '.$_POST['visitor_email'].'<br>
						<b>No. Telp :</b> '.$_POST['visitor_phone'].'<br>
						<b>Instansi/Perusahaan :</b> '.$_POST['visitor_company'].'<br><br>
						<b>Pesan :</b> <br>
						'.nl2br($visitor_message).'
						</div>

						<br><br>
						<div style="background: #f2f3f7; color:#999; padding: 10px; margin-top:20px; padding-bottom: 30px; font-size: 10px; text-align: right; border-top: 1px solid #999">
						<b>'.$header['setting']['company_name'].'</b><br><br>
						'.$header['setting']['company_address'].' <br>
						'.$header['setting']['company_telp'].'<br><br>
						'.$header['setting']['company_website'].'
						</div>
						';

						$this->email->from($_POST['visitor_email'], $_POST['visitor_name']);
						$this->email->to($header['setting']['receive_email']);
						$this->email->subject('Email dari '.$_POST['visitor_name'].' - www.ciptasinergi.com');
						$this->email->message($msg);

						if ($this->email->send()) {
							$data['success'] = 'Thank you for sending us the email. We will contact you shortly.';
						} else {
							$data['error'] = 'Error! email cannot be sent.';
						}
					}
				} else {
					$data['error'] = 'Error! Invalid Captcha, you are not human.';
				}
			}

		}

		$this->load->view('view_header',$header);
		$this->load->view('view_contact',$data);
		$this->load->view('view_footer');
		
	}

}