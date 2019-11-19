<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_common extends CI_Model {

    public function get_setting_data() {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }

    public function get_page_data() {
        $query = $this->db->query("SELECT * from tbl_page WHERE id=1");
        return $query->first_row('array');
    }   
    
    public function get_comment_code() {
        $query = $this->db->query("SELECT * from tbl_comment WHERE id=1");
        return $query->first_row('array');
    }

    public function get_social_data() {
        $query = $this->db->query("SELECT * from tbl_social");
        return $query->result_array();
    }

    public function get_language_data() {
        $query = $this->db->query("SELECT * from tbl_language");
        return $query->result_array();
    }

    public function get_latest_news() {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY news_id DESC");
        return $query->result_array();
    }

    public function get_popular_news() {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY total_view DESC");
        return $query->result_array();
    }

    public function get_single_service_data($slug) {
        $query = $this->db->query("SELECT * from tbl_service WHERE slug_service='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_single_facility_data($slug) {
        $query = $this->db->query("SELECT * from tbl_facility WHERE slug_facility='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_single_aviation_electronics_data($slug) {
        $query = $this->db->query("SELECT * from tbl_aviation_electronics WHERE slug_electronics='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_single_portfolio_data($slug) {
        $query = $this->db->query("SELECT * from tbl_portfolio WHERE slug_portfolio='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_single_news_data($slug) {
        $query = $this->db->query("SELECT * from tbl_news WHERE post_slug='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_single_category_data($slug) {
        $query = $this->db->query("SELECT * from tbl_news_category WHERE slug_news_category='$slug'",array($slug));
        return $query->result_array();
    }

    public function get_service_data() {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_facility_category() {
        $query = $this->db->query("SELECT * FROM tbl_facility_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    public function get_facility_data() {
        $query = $this->db->query("SELECT * from tbl_facility");
        return $query->result_array();
    }

    public function get_portfolio_category() {
        $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    public function get_portfolio_data() {
        $query = $this->db->query("SELECT * from tbl_portfolio");
        return $query->result_array();
    }

    public function get_partner_data() {
        $query = $this->db->query("SELECT * FROM tbl_partner ORDER BY id ASC");
        return $query->result_array();
    }

    public function get_product_data() {
        $query = $this->db->query("SELECT * 
            FROM tbl_product
            WHERE product_show_home=?
            ORDER BY product_id DESC",array('Yes'));
        return $query->result_array();
    }

    public function get_aviation_electronics_data() {
        $sql = "SELECT * 
        FROM tbl_aviation_electronics t1
        JOIN tbl_aviation_electronics_category t2
        ON t1.category_id = t2.category_id
        ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_aviation_electronics_category() {
        $query = $this->db->query("SELECT * FROM tbl_aviation_electronics_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    function get_owner_data() {
        $sql = 'SELECT * FROM tbl_owner WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }

}