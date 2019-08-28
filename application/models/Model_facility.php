<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facility extends CI_Model 
{
    public function get_facility_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_facility_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_facility_data()
    {
        $query = $this->db->query("SELECT * from tbl_facility");
        return $query->result_array();
    }
    public function get_facility_data_order_by_name()
    {
        $query = $this->db->query("SELECT * from tbl_facility ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_facility_detail($id) {
    	$sql = 'SELECT * FROM tbl_facility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_facility_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_facility_photo WHERE facility_id=?",array($id));
        return $query->result_array();
    }
    public function get_facility_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_facility_photo WHERE facility_id=?",array($id));
        return $query->num_rows();
    }
}