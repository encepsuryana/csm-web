<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_common extends CI_Model 
{
    public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }
    public function get_page_data()
    {
        $query = $this->db->query("SELECT * from tbl_page WHERE id=1");
        return $query->first_row('array');
    }   
    
    public function get_comment_code()
    {
        $query = $this->db->query("SELECT * from tbl_comment WHERE id=1");
        return $query->first_row('array');
    }
    public function get_social_data()
    {
        $query = $this->db->query("SELECT * from tbl_social");
        return $query->result_array();
    }
    public function get_language_data()
    {
        $query = $this->db->query("SELECT * from tbl_language");
        return $query->result_array();
    }
    public function get_latest_news()
    {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY news_id DESC");
        return $query->result_array();
    }
    public function get_popular_news()
    {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY total_view DESC");
        return $query->result_array();
    }

    public function get_single_service_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_service WHERE id=?",array($id));
        return $query->result_array();
    }
    public function get_single_facility_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_facility WHERE id=?",array($id));
        return $query->result_array();
    }
    public function get_single_electronics_division_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division WHERE id=?",array($id));
        return $query->result_array();
    }
    public function get_single_portfolio_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_portfolio WHERE id=?",array($id));
        return $query->result_array();
    }
    public function get_single_news_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_news WHERE news_id=?",array($id));
        return $query->result_array();
    }

    public function get_single_category_data($id)
    {
        $query = $this->db->query("SELECT * from tbl_news_category WHERE category_id=?",array($id));
        return $query->result_array();
    }

}