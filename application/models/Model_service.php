<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_service extends CI_Model  {
    public function get_service_data()  {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_service_data_order_by_heading() {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY heading ASC");
        return $query->result_array();
    }

    public function get_service_detail($slug) {
    	$sql = "SELECT * FROM tbl_service WHERE slug_service='$slug'";
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }
}