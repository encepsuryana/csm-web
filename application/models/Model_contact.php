<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_contact extends CI_Model 
{
    public function get_subject()
    {
        $sql = "SELECT * FROM tbl_language WHERE name=?";
        $query = $this->db->query($sql,array('CONTACT_FORM_EMAIL_SUBJECT'));
        return $query->first_row('array');
    }

    public function get_success_text()
    {
        $sql = "SELECT * FROM tbl_language WHERE name=?";
        $query = $this->db->query($sql,array('CONTACT_FORM_EMAIL_SUCCESS_MESSAGE'));
        return $query->first_row('array');
    }
}