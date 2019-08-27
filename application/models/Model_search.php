<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_search extends CI_Model
{
    public function search($search_string)
    {
        $search_string = '%' . $search_string . '%';
        $sql = "SELECT * 
				FROM tbl_news
				WHERE news_title like ? OR news_content like ?
				ORDER BY news_id ASC";
        $query = $this->db->query($sql,array($search_string,$search_string));
        return $query->result_array();
    }
    public function search_total($search_string)
    {
        $search_string = '%' . $search_string . '%';
        $sql = "SELECT * 
				FROM tbl_news
				WHERE news_title like ? OR news_content like ?
				ORDER BY news_id ASC";
        $query = $this->db->query($sql,array($search_string,$search_string));
        return $query->num_rows();
    }
}