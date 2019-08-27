<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_team_member extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_team_member'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT
                t1.id,
                t1.name,
                t1.designation_id,
                t1.photo,
                t2.designation_id,
                t2.designation_name
                FROM tbl_team_member t1
                JOIN tbl_designation t2
                ON t1.designation_id = t2.designation_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function add($data) {
        $this->db->insert('tbl_team_member',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_team_member',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_team_member');
    }

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_team_member WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_designation()
    {
        $sql = 'SELECT * FROM tbl_designation ORDER BY designation_name ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function team_member_check($id)
    {
        $sql = 'SELECT * FROM tbl_team_member WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
   
}