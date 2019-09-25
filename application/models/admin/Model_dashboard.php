<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model 
{
	public function show_total_news_category()
	{
		$sql = 'SELECT * from tbl_news_category';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_news()
	{
		$sql = 'SELECT * FROM tbl_news';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    public function show_total_portfolio()
    {
        $sql = 'SELECT * from tbl_portfolio';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_testimonial()
    {
        $sql = 'SELECT * from tbl_testimonial';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function show_total_slider()
	{
		$sql = 'SELECT * from tbl_slider';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function show_log() {
        $sql = 'SELECT * FROM tbl_log ORDER BY log_id DESC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
}