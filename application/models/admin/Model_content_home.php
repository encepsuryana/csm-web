<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_content_home extends CI_Model 
{

    function get_content_home() {
        $sql = 'SELECT * FROM tbl_content_home WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }

    function update($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_content_home',$data);
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