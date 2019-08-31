<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_faq extends CI_Model 
{
	public function get_faq_data()
	{
		$sql = "SELECT * FROM tbl_faq WHERE faq_show=? OR faq_show=? ORDER BY faq_id ASC";
		$query = $this->db->query($sql,array('On Home Page','On Home and FAQ Page'));
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
	public function get_electronics_division_data()
	{
		$query = $this->db->query("SELECT * from tbl_electronics_division ORDER BY id ASC");
		return $query->result_array();
	}
	public function get_electronics_division_category()
	{
		$query = $this->db->query("SELECT * FROM tbl_electronics_division_category ORDER BY category_name ASC");
		return $query->result_array();
	}
}