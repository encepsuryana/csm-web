<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model  {

	public function get_product_data() {
		$query = $this->db->query("SELECT * 
			FROM tbl_product
			WHERE product_show_home=?
			ORDER BY product_id DESC",array('Yes'));
		return $query->result_array();
	}

}