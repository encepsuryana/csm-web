<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

	function change($lang)
	{
		$this->session->set_userdata(array('language'=>$lang));
		 redirect($this->session->flashdata('redirectToCurrent'));
	}
}