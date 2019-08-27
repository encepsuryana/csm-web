<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model 
{
    public function get_category_data($id)
    {
        $sql = "SELECT * FROM tbl_news_category WHERE category_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
    public function get_news_data($id)
    {
        $sql = "SELECT * FROM tbl_news WHERE category_id=? ORDER BY news_id DESC";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
}