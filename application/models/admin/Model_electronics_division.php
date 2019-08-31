<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_electronics_division extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_electronics_division'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_electronics_division_photo'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_electronics_division t1
				JOIN tbl_electronics_division_category t2
				ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_all_photos_by_category_id($id)
    {
        $sql = "SELECT * 
    			FROM tbl_electronics_division_photo 
    			WHERE electronics_division_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category()
    {
        $sql = "SELECT * 
				FROM tbl_electronics_division_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_electronics_division',$data);
        return $this->db->insert_id();
    }

    function add_photos($data) {
        $this->db->insert('tbl_electronics_division_photo',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_electronics_division',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_electronics_division');
    }

    function delete_photos($id)
    {
        $this->db->where('electronics_division_id',$id);
        $this->db->delete('tbl_electronics_division_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_electronics_division WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function electronics_division_check($id)
    {
        $sql = 'SELECT * FROM tbl_electronics_division WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function electronics_division_photo_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_electronics_division_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    function delete_electronics_division_photo($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_electronics_division_photo');
    }
    
}