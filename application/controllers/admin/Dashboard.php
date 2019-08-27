<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_dashboard');
	}
	public function index()
	{
		if ( ($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff') ) {
			$header['setting'] = $this->Model_header->get_setting_data();

			$data['total_news_category'] = $this->Model_dashboard->show_total_news_category();
			$data['total_news'] = $this->Model_dashboard->show_total_news();
			$data['total_team_member'] = $this->Model_dashboard->show_total_team_member();
			$data['total_portfolio'] = $this->Model_dashboard->show_total_portfolio();
			$data['total_testimonial'] = $this->Model_dashboard->show_total_testimonial();
			$data['total_slider'] = $this->Model_dashboard->show_total_slider();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_dashboard',$data);
			$this->load->view('admin/view_footer');
		}
		else {
			show_404();
		}
	}
}