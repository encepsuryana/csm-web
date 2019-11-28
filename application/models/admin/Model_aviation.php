<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aviation extends CI_Model {

	function get_auto_increment_id() {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_aviation_electronics'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_auto_increment_id1() {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_aviation_electronics_photo'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * 
				FROM tbl_aviation_electronics t1
				JOIN tbl_aviation_electronics_category t2
				ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function get_all_photos_by_category_id($id) {
        $sql = "SELECT * 
    			FROM tbl_aviation_electronics_photo 
    			WHERE aviation_electronics_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category() {
        $sql = "SELECT * 
				FROM tbl_aviation_electronics_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_aviation_electronics',$data);
        return $this->db->insert_id();
    }

    function add_photos($data) {
        $this->db->insert('tbl_aviation_electronics_photo',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_aviation_electronics',$data);
    }

    function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('tbl_aviation_electronics');
    }

    function delete_photos($id) {
        $this->db->where('aviation_electronics_id',$id);
        $this->db->delete('tbl_aviation_electronics_photo');
    }

    function getData($id) {
        $sql = 'SELECT * FROM tbl_aviation_electronics WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function aviation_electronics_check($id) {
        $sql = 'SELECT * FROM tbl_aviation_electronics WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function aviation_electronics_photo_by_id($id) {
        $sql = 'SELECT * FROM tbl_aviation_electronics_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
    function delete_aviation_electronics_photo($id) {
        $this->db->where('id',$id);
        $this->db->delete('tbl_aviation_electronics_photo');
    }
    
}