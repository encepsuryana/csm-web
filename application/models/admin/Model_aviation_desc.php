<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_aviation_desc extends CI_Model 
{
	public function show()
	{
        $query = $this->db->query("SELECT * from tbl_aviation_electronics_desc WHERE id=1");
        return $query->first_row('array');
    }

    public function update($data)
	{
        $this->db->where('id',1);
        $this->db->update('tbl_aviation_electronics_desc',$data);
    }

    public function get_aviation_electronics_desc_photo_name()
    {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics_desc WHERE id=1");
        return $query->first_row('array');
    }

    function aviation_electronics_desc_photo_update($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_aviation_electronics_desc',$data);
    }
}