<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_faq extends CI_Model 
{
    public function get_faq_data()
    {
        $sql = "SELECT * FROM tbl_faq WHERE faq_show=? OR faq_show=? ORDER BY faq_id ASC";
        $query = $this->db->query($sql,array('On Home Page','On Home and FAQ Page'));
        return $query->result_array();
    }
}