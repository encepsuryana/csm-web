<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news extends CI_Model {

    public function get_news_data() {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY news_id DESC");
        return $query->result_array();
    }

    public function get_news_data_order_by_heading() {
        $query = $this->db->query("SELECT * from tbl_news ORDER BY heading DESC");
        return $query->result_array();
    }
    
    function update_counter($slug) {
        //return current article views
        $this->db->where('post_slug', urldecode($slug));
        $this->db->select('total_view'); $count = $this->db->get('tbl_news')->row();
        // then increase by one
        $this->db->where('post_slug', urldecode($slug));
        $this->db->set('total_view', ($count->total_view + 1));
        $this->db->update('tbl_news');
    }

    public function get_news_detail($slug) {
        $sql = "SELECT
        t1.news_id,
        t1.news_title,
        t1.news_title_idn,
        t1.news_style,
        t1.news_content,
        t1.news_content_idn,
        t1.photo,
        t1.news_date,
        t1.total_view,
        t1.user_update,
        t1.post_slug,
        t1.slug_news_category,
        t2.slug_news_category,
        t2.category_name
        FROM tbl_news t1
        JOIN tbl_news_category t2
        ON t1.slug_news_category = t2.slug_news_category
        WHERE post_slug='$slug'";
        $query = $this->db->query($sql,array($slug));
        return $query->first_row('array');
    }

    public function get_total_news() {
        $sql = "SELECT * FROM tbl_news ORDER BY news_id DESC";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    
    public function fetch_books($limit, $start) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->order_by('news_id','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_news_category() {
        $query = $this->db->query("SELECT * from tbl_news_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    
}