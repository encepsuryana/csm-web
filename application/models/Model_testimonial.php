<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimonial extends CI_Model 
{
    public function get_testimonial_data()
    {
        $query = $this->db->query("SELECT * from tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }
}