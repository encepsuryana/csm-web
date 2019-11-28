<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_page extends CI_Model {
	
    public function show() {
        $query = $this->db->query("SELECT * from tbl_page WHERE id=1");
        return $query->first_row('array');
    }

    public function update($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_page',$data);
    }

    public function get_about_photo_name() {
        $query = $this->db->query("SELECT * from tbl_page WHERE id=1");
        return $query->first_row('array');
    }

    function about_photo_update($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_page',$data);
    }

    public function get_structure_photo_name() {
        $query = $this->db->query("SELECT * from tbl_page WHERE id=1");
        return $query->first_row('array');
    }

    function about_structure_update($data) {
        $this->db->where('id',1);
        $this->db->update('tbl_page',$data);
    }
}