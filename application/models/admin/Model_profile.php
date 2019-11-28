<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profile extends CI_Model {
	
	function show() {
		$sql = "SELECT * FROM tbl_user ORDER BY id ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function update($data) {
		$this->db->where('id', $this->session->userdata('id'));
		$this->db->update('tbl_user',$data);
	}

	function get_auto_increment_id() {
		$sql = "SHOW TABLE STATUS LIKE 'tbl_user'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function add_user($data) {
		$this->db->insert('tbl_user',$data);
		return $this->db->insert_id();
	}

	function update_user($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('tbl_user',$data);
	}

	function delete_user($id) {
		$this->db->where('id',$id);
		$this->db->delete('tbl_user');
	}

	function profile_check($id) {
		$sql = 'SELECT * FROM tbl_user WHERE id=?';
		$query = $this->db->query($sql,array($id));
		return $query->first_row('array');
	}

	function getData($id) {
		$sql = 'SELECT * FROM tbl_user WHERE id=?';
		$query = $this->db->query($sql,array($id));
		return $query->first_row('array');
	}

}