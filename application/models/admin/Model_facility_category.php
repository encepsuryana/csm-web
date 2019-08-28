<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_facility_category extends CI_Model 
{
	
    function show() {
        $sql = "SELECT * FROM tbl_facility_category ORDER BY category_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show_facility_by_id($id) {
        $sql = "SELECT * FROM tbl_facility WHERE id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function show_facility_photo_by_facility_id($id) {
        $sql = "SELECT * FROM tbl_facility_photo WHERE facility_id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_facility_category',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('category_id',$id);
        $this->db->update('tbl_facility_category',$data);
    }

    function delete($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tbl_facility_category');
    }

    function delete1($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_facility');
    }

    function delete2($id)
    {
        $this->db->where('facility_id',$id);
        $this->db->delete('tbl_facility_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_facility_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function getData1($id)
    {
        $sql = 'SELECT * FROM tbl_facility WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function facility_category_check($id)
    {
        $sql = 'SELECT * FROM tbl_facility_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function duplicate_check($var1,$var2) {
        $sql = 'SELECT * FROM tbl_facility_category WHERE category_name=? and category_name!=?';
        $query = $this->db->query($sql,array($var1,$var2));
        return $query->num_rows();
    }
    
}