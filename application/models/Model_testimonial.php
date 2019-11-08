<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimonial extends CI_Model 
{
	public function get_testimonial_data()
	{
		$query = $this->db->query("SELECT * from tbl_testimonial ORDER BY id ASC");
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
	public function get_aviation_electronics_data()
	{
		$sql = "SELECT * 
		FROM tbl_aviation_electronics t1
		JOIN tbl_aviation_electronics_category t2
		ON t1.category_id = t2.category_id
		ORDER BY t1.id ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_aviation_electronics_category()
	{
		$query = $this->db->query("SELECT * FROM tbl_aviation_electronics_category ORDER BY category_name ASC");
		return $query->result_array();
	}
}