<?php 
class Download extends CI_Controller{
	public function index(){
		$this->load->helper('download');

		$data = file_get_contents(base_url().'public/uploads/file/Company_profile.pdf');
		$name = 'CV. Cipta Sinergi Manufacturing-Company Profile.pdf';

		force_download($name,$data);

	}
}
?>