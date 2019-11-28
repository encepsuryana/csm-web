<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_log extends CI_Model {
    
    public function save_log($param) {
        $sql        = $this->db->insert_string('tbl_logging',$param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}