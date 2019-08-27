<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_service extends CI_Model 
{
    public function get_service_data()
    {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_service_data_order_by_heading()
    {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY heading ASC");
        return $query->result_array();
    }

    public function get_service_detail($id) {
    	$sql = 'SELECT * FROM tbl_service WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
}