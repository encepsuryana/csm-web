<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_newfacility extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_newfacility'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_newfacility_photo'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_newfacility t1
				JOIN tbl_newfacility_category t2
				ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_all_photos_by_category_id($id)
    {
        $sql = "SELECT * 
    			FROM tbl_newfacility_photo 
    			WHERE newfacility_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category()
    {
        $sql = "SELECT * 
				FROM tbl_newfacility_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_newfacility',$data);
        return $this->db->insert_id();
    }

    function add_photos($data) {
        $this->db->insert('tbl_newfacility_photo',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_newfacility',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_newfacility');
    }

    function delete_photos($id)
    {
        $this->db->where('newfacility_id',$id);
        $this->db->delete('tbl_newfacility_photo');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_newfacility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function newfacility_check($id)
    {
        $sql = 'SELECT * FROM tbl_newfacility WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function newfacility_photo_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_newfacility_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    function delete_newfacility_photo($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_newfacility_photo');
    }
    
}