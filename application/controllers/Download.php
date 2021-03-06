<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_download');
		$this->load->helper('download');
	}

	public function index() {
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

		$header['content_home'] 					= $this->Model_download->get_dataspanduk();

		$this->load->view('view_header',$header);
		$this->load->view('view_download');
		$this->load->view('view_footer');
	}

	public function file_mechanic() {
		$data = file_get_contents(base_url().'public/uploads/file/profile_perusahaan1.pdf');
		$name = 'CV. Cipta Sinergi Manufacturing Mechanic Company Profile.pdf';

		force_download($name,$data);
	}

	public function file_electronic() {
		$data = file_get_contents(base_url().'public/uploads/file/profile_perusahaan2.pdf');
		$name = 'CV. Cipta Sinergi Manufacturing Aeronutical & Electronics Engineering Company Profile.pdf';

		force_download($name,$data);
	}

	public function file_mechanic_electronic() {
		$data = file_get_contents(base_url().'public/uploads/file/profile_perusahaan3.pdf');
		$name = 'CV. Cipta Sinergi Manufacturing Mechanic & Aeronutical & Electronics Engineering Company Profile.pdf';

		force_download($name,$data);
	}
}
