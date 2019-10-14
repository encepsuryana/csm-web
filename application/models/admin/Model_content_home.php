<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_content_home extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_content_home'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT * FROM tbl_content_home ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_content_home',$data);
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_content_home WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function content_home_check($id)
    {
        $sql = 'SELECT * FROM tbl_content_home WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_file_spanduk()
    {
        $sql = 'SELECT * FROM tbl_content_home_company_profile WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }

    function get_file_pdf()
    {
        $sql = 'SELECT * FROM tbl_content_home_company_profile WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }
    
    function update_content_home_company($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_content_home_company_profile',$data);
    }
    
}