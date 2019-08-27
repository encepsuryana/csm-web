<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_designation extends CI_Model 
{
	
    function show() {
        $sql = "SELECT * FROM tbl_designation ORDER BY designation_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_designation',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('designation_id',$id);
        $this->db->update('tbl_designation',$data);
    }

    function delete($id)
    {
        $this->db->where('designation_id',$id);
        $this->db->delete('tbl_designation');
    }

    function delete1($id)
    {
        $this->db->where('designation_id',$id);
        $this->db->delete('tbl_team_member');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_designation WHERE designation_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function getData1($id)
    {
        $sql = 'SELECT * FROM tbl_team_member WHERE designation_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function designation_check($id)
    {
        $sql = 'SELECT * FROM tbl_designation WHERE designation_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function duplicate_check($var1,$var2) {
        $sql = 'SELECT * FROM tbl_designation WHERE designation_name=? and designation_name!=?';
        $query = $this->db->query($sql,array($var1,$var2));
        return $query->num_rows();
    }
    
}