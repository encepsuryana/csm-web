<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_product extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_product'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function show() {
        $sql = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_product',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('product_id',$id);
        $this->db->update('tbl_product',$data);
    }

    function delete($id)
    {
        $this->db->where('product_id',$id);
        $this->db->delete('tbl_product');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_product WHERE product_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function product_check($id)
    {
        $sql = 'SELECT * FROM tbl_product WHERE product_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    
}