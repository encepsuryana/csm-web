<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aviation_category extends CI_Model 
{
	
    function show() {
        $sql = "SELECT * FROM tbl_aviation_electronics_category ORDER BY category_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show_aviation_electronics_by_id($id) {
        $sql = "SELECT * FROM tbl_aviation_electronics WHERE id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function show_aviation_electronics_photo_by_aviation_electronics_id($id) {
        $sql = "SELECT * FROM tbl_aviation_electronics_photo WHERE aviation_electronics_id=?";
        $query = $this->db->query($sql,$id);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_aviation_electronics_category',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('category_id',$id);
        $this->db->update('tbl_aviation_electronics_category',$data);
    }

    function delete($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tbl_aviation_electronics_category');
    }

    function delete1($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_aviation_electronics');
    }

    function delete2($id)
    {
        $this->db->where('aviation_electronics_id',$id);
        $this->db->delete('tbl_aviation_electronics_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_aviation_electronics_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function getData1($id)
    {
        $sql = 'SELECT * FROM tbl_aviation_electronics WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function aviation_electronics_category_check($id)
    {
        $sql = 'SELECT * FROM tbl_aviation_electronics_category WHERE category_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function duplicate_check($var1,$var2) {
        $sql = 'SELECT * FROM tbl_aviation_electronics_category WHERE category_name=? and category_name!=?';
        $query = $this->db->query($sql,array($var1,$var2));
        return $query->num_rows();
    }
    
}