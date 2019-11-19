<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gallery extends CI_Model {

	public function get_gallery_data() {
		$query = $this->db->query("SELECT * 
			FROM tbl_photo
			WHERE photo_show_home=?
			ORDER BY photo_id DESC",array('Yes'));
		return $query->result_array();
	}
	
}