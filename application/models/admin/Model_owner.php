<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_owner extends CI_Model 
{
    
    function get_owner() {
        $sql = 'SELECT * FROM tbl_owner WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }

    function update($data)
    {
        $this->db->where('id',1);
        $this->db->update('tbl_owner',$data);
    }
        
}