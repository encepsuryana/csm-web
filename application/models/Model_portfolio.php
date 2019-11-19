<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_portfolio extends CI_Model {

    public function get_portfolio_category() {
        $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    public function get_portfolio_data() {
        $query = $this->db->query("SELECT * from tbl_portfolio");
        return $query->result_array();
    }

    public function get_portfolio_data_order_by_name() {
        $query = $this->db->query("SELECT * from tbl_portfolio ORDER BY name ASC");
        return $query->result_array();
    }

    public function get_portfolio_detail($slug) {
    	$sql = "SELECT * FROM tbl_portfolio WHERE slug_portfolio='$slug'";
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }

    public function get_portfolio_photo($slug) {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE slug_portfolio='$slug'",array($slug));
        return $query->result_array();
    }
    
    public function get_portfolio_photo_number($slug) {
        $query = $this->db->query("SELECT * from tbl_portfolio_photo WHERE slug_portfolio='$slug'",array($slug));
        return $query->num_rows();
    }

}