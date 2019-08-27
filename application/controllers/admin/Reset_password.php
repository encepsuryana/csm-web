<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/Model_reset_password');
    }

    public function index($email=0,$token=0)
    {
        $tot = $this->Model_reset_password->check_url($email,$token);
        if(!$tot) {
            redirect(base_url().'admin/login');
            exit;
        }

        $data['error'] = '';
        $data['success'] = '';
        $data['setting'] = $this->Model_reset_password->get_setting_data();
        $error = '';

        if(isset($_POST['form1'])) {
            $valid = 1;

            $this->form_validation->set_rules('new_password', 'Password', 'trim|required');
            $this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[new_password]');

            if($this->form_validation->run() == FALSE) {
                $valid = 0;
                $data['error'] = validation_errors();
            }

            if($valid == 1) {

                $form_data = array(
                    'password' => md5($_POST['new_password']),
                    'token'    => ''
                );
                $this->Model_reset_password->update($email,$form_data);
                $data['success'] = 'Password is updated successfully!';                
            }
            $data['var1'] = $email;
            $data['var2'] = $token;
            $this->load->view('admin/view_reset_password',$data);

        } else {
            $data['var1'] = $email;
            $data['var2'] = $token;
            $this->load->view('admin/view_reset_password',$data);
        }
        
    }
}
