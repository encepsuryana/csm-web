<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aviation extends CI_Model {

    public function get_ae_category() {
        $query = $this->db->query("SELECT * FROM tbl_aviation_electronics_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    public function get_ae_data() {
       $sql = "SELECT * 
                FROM tbl_aviation_electronics t1
                JOIN tbl_aviation_electronics_category t2
                ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function show_ae_desc() {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics_desc WHERE id=1");
        return $query->first_row('array');
    }

    public function get_ae_data_order_by_name() {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics ORDER BY name ASC");
        return $query->result_array();
    }

    public function get_ae_detail($slug) {
    	$sql = "SELECT * FROM tbl_aviation_electronics WHERE slug_electronics='$slug'";
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }

    public function get_ae_photo($slug) {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics_photo WHERE slug_electronics='$slug'",array($slug));
        return $query->result_array();
    }
    
    public function get_ae_photo_number($slug) {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics_photo WHERE  slug_electronics='$slug'",array($slug));
        return $query->num_rows();
    }    

}