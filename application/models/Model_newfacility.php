<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_newfacility extends CI_Model 
{
    public function get_newfacility_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_newfacility_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_newfacility_data()
    {
        $query = $this->db->query("SELECT * from tbl_newfacility");
        return $query->result_array();
    }
    public function get_newfacility_data_order_by_name()
    {
        $query = $this->db->query("SELECT * from tbl_newfacility ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_newfacility_detail($id) {
    	$sql = 'SELECT * FROM tbl_newfacility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_newfacility_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_newfacility_photo WHERE newfacility_id=?",array($id));
        return $query->result_array();
    }
    public function get_newfacility_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_newfacility_photo WHERE newfacility_id=?",array($id));
        return $query->num_rows();
    }
}