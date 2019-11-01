<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model 
{
    public function get_slider_data()
    {
        $query = $this->db->query("SELECT * from tbl_slider ORDER BY id DESC");
        return $query->result_array();
    }
    public function get_content_home_data()
    {
        $query = $this->db->query("SELECT * from tbl_content_home ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_content_home_photo()
    {
        $query = $this->db->query("SELECT * from tbl_content_home_company_profile WHERE id=1");
        return $query->result_array();
    }
    public function get_service_data()
    {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_facility_data()
    {
        $query = $this->db->query("SELECT * from tbl_facility ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_facility_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_facility_category ORDER BY category_name ASC");
        return $query->result_array();
    }

    public function get_electronics_division_data()
    {
       $sql = "SELECT * 
                FROM tbl_electronics_division t1
                JOIN tbl_electronics_division_category t2
                ON t1.category_id = t2.category_id
                ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_electronics_division_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_electronics_division_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    
    public function get_portfolio_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_portfolio_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_portfolio_data()
    {
        $query = $this->db->query("SELECT * from tbl_portfolio");
        return $query->result_array();
    }

    public function get_testimonial_data()
    {
        $query = $this->db->query("SELECT * from tbl_testimonial ORDER BY id ASC");
        return $query->result_array();
    }
    public function get_testimonial_photo()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial_photo WHERE id=1");
        return $query->result_array();
    }
    public function get_gallery_data()
    {
        $query = $this->db->query("SELECT * 
            FROM tbl_photo
            WHERE photo_show_home=?
            ORDER BY photo_id ASC",array('Yes'));
        return $query->result_array();
    }
    public function get_product_data()
    {
        $query = $this->db->query("SELECT * 
            FROM tbl_product
            WHERE product_show_home=?
            ORDER BY product_id DESC",array('Yes'));
        return $query->result_array();
    }

     public function get_product_data_star()
    {
        $query = $this->db->query("SELECT * 
            FROM tbl_product
            WHERE product_star=?
            ORDER BY product_id DESC",array('Yes'));
        return $query->result_array();
    }
    public function get_partner_data()
    {
        $query = $this->db->query("SELECT * FROM tbl_partner ORDER BY id ASC");
        return $query->result_array();
    }
}