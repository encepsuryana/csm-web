<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_news extends CI_Model {

	function get_auto_increment_id() {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_news'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function show() {
        $sql = "SELECT
        t1.news_id,
        t1.news_title,
        t1.news_title_idn,
        t1.news_style,
        t1.news_short_content,
        t1.news_short_content_idn,
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
        ORDER BY t1.news_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function add($data) {
        $this->db->insert('tbl_news',$data);
        return $this->db->insert_id();
    }

    function update($id,$data) {
        $this->db->where('news_id',$id);
        $this->db->update('tbl_news',$data);
    }

    function delete($id) {
        $this->db->where('news_id',$id);
        $this->db->delete('tbl_news');
    }

    function getData($id) {
        $sql = 'SELECT * FROM tbl_news WHERE news_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function get_category() {
        $sql = 'SELECT * FROM tbl_news_category ORDER BY category_name ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function news_check($id) {
        $sql = 'SELECT * FROM tbl_news WHERE news_id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

}