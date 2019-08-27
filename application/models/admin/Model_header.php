<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_header extends CI_Model 
{
	public function get_setting_data()
    {
        $query = $this->db->query("SELECT * from tbl_settings WHERE id=1");
        return $query->first_row('array');
    }
    
    public function extension_check_photo($ext) {
    	if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' && $ext!='JPG' && $ext!='PNG' && $ext!='JPEG' && $ext!='GIF' ) {
    		return false;
    	} else {
    		return true;
    	}
    }

    public function extension_check_file($ext) {
        if( $ext!='pdf') {
            return false;
        } else {
            return true;
        }
    }
    public function get_language_data()
    {
        $query = $this->db->query("SELECT * from tbl_language");
        return $query->result_array();
    }
}