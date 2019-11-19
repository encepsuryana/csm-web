<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_category extends CI_Model {

    public function get_category_data($slug) {
        $sql = "SELECT * FROM tbl_news_category WHERE slug_news_category='$slug'";
        $query = $this->db->query($sql,array($slug));
        return $query->result_array();
    }

    public function get_news_data($slug) {
        $sql = "SELECT * FROM tbl_news WHERE slug_news_category='$slug' ORDER BY news_id DESC";
        $query = $this->db->query($sql,array($slug));
        return $query->result_array();
    }

}