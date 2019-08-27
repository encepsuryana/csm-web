<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facility extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_facility'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_facility";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_facility',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_facility',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_facility');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_facility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function facility_check($id)
    {
        $sql = 'SELECT * FROM tbl_facility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}