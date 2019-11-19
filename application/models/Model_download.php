<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_download extends CI_Model {

    Public function get_dataspanduk() {
        $sql = 'SELECT * FROM tbl_content_home_company_profile WHERE id=?';
        $query = $this->db->query($sql,array(1));
        return $query->first_row('array');
    }
    
}