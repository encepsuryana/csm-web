<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_dashboard');
		$this->load->model('admin/Model_log');
	}

	public function index()
	{
		if ( ($this->session->userdata('role') == 'admin') or ($this->session->userdata('role') == 'hrd') or ($this->session->userdata('role') == 'staff') ) {
			$header['setting'] = $this->Model_header->get_setting_data();
			
			$data['log_aktivitas'] = $this->Model_dashboard->show_log();
			$data['total_news_category'] = $this->Model_dashboard->show_total_news_category();
			$data['total_news'] = $this->Model_dashboard->show_total_news();
			$data['total_portfolio'] = $this->Model_dashboard->show_total_portfolio();
			$data['total_testimonial'] = $this->Model_dashboard->show_total_testimonial();
			$data['total_slider'] = $this->Model_dashboard->show_total_slider();
			$data['total_log'] = $this->Model_dashboard->show_total_log();

			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_dashboard',$data);
			$this->load->view('admin/view_footer');
		}
		else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function ciptasin_log(){
		
		if ($this->session->userdata('role') == 'admin') {

			// file name
			$filename = 'ciptasinlog_'.date('d_F_Y').'.csv';

			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/csv; "); 

			// get data
			$usersData = $this->Model_dashboard->getAlldata_log();

			// file creation
			$file = fopen('php://output', 'w');

			$header = array("No","Waktu","User","Tipe","Deskripsi","IP Address","User Agent");
			fputcsv($file, $header);

			foreach ($usersData as $key=>$line){
				fputcsv($file,$line);
			}

			fclose($file);
			exit;
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}

	public function truncate_log()
	{
		if ($this->session->userdata('role') == 'admin') {
			$this->db->truncate('tbl_logging');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			if(!$this->session->userdata('id')) {
				redirect(base_url().'admin/login');
			} else {
				show_404();
			}
		}
	}
}