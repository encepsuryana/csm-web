<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_electronics_division extends CI_Model 
{
    public function get_electronics_division_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_electronics_division_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_electronics_division_data()
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division");
        return $query->result_array();
    }

    public function show_electronics_division_desc()
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division_desc WHERE id=1");
        return $query->first_row('array');
    }

    public function get_electronics_division_data_order_by_name()
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division ORDER BY name ASC");
        return $query->result_array();
    }
    public function get_electronics_division_detail($id) {
    	$sql = 'SELECT * FROM tbl_electronics_division WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    public function get_electronics_division_photo($id)
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division_photo WHERE electronics_division_id=?",array($id));
        return $query->result_array();
    }
    public function get_electronics_division_photo_number($id)
    {
        $query = $this->db->query("SELECT * from tbl_electronics_division_photo WHERE electronics_division_id=?",array($id));
        return $query->num_rows();
    }
    public function get_facility_category()
    {
        $query = $this->db->query("SELECT * FROM tbl_facility_category ORDER BY category_name ASC");
        return $query->result_array();
    }
    public function get_facility_data()
    {
        $query = $this->db->query("SELECT * from tbl_facility");
        return $query->result_array();
    }
    public function get_service_data()
    {
        $query = $this->db->query("SELECT * from tbl_service ORDER BY id ASC");
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
    public function get_product_data()
    {
        $query = $this->db->query("SELECT * 
            FROM tbl_product
            WHERE product_show_home=?
            ORDER BY product_id DESC",array('Yes'));
        return $query->result_array();
    }
    public function get_partner_data()
    {
        $query = $this->db->query("SELECT * FROM tbl_partner ORDER BY id ASC");
        return $query->result_array();
    }
}