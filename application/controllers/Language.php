<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

	function lang($lang)
	{
		$this->session->set_userdata(array('language'=>$lang));
		 redirect($_SERVER['HTTP_REFERER']);
	}
}