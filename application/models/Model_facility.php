<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facility extends CI_Model 
{
    public function get_facility_data()
    {
        $query = $this->db->query("SELECT * from tbl_facility ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_facility_data_order_by_heading()
    {
        $query = $this->db->query("SELECT * from tbl_facility ORDER BY heading ASC");
        return $query->result_array();
    }

    public function get_facility_detail($id) {
    	$sql = 'SELECT * FROM tbl_facility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
}