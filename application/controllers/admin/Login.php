<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/Model_login');
        $this->load->library('recaptcha');
    }

    public function index()
    {
        $recaptcha = $this->input->post('g-recaptcha-response');
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );

        $data['error'] = '';
        $data['setting'] = $this->Model_login->get_setting_data();

        if(isset($_POST['form1'])) {

            // Getting the form data
            $email = $this->input->post('email',true);
            $password = $this->input->post('password',true);

            // Checking the email address
            $un = $this->Model_login->check_email($email);

            if(!$un) {

                $data['error'] = 'Email address is wrong!';
                $this->load->view('admin/view_login',$data);

            } else {

                // When email found, checking the password
                $pw = $this->Model_login->check_password($email,$password);

                if(!$pw) {

                    $data['error'] = 'Password is wrong!';
                    $this->load->view('admin/view_login',$data);

                } else {
                    if (!empty($recaptcha)) {
                        $response = $this->recaptcha->verifyResponse($recaptcha);
                        if (isset($response['success']) and $response['success'] === true) {
                           // When email and password both are correct
                            $array = array(
                                'id' => $pw['id'],
                                'full_name' => $pw['full_name'],
                                'email' => $pw['email'],
                                'phone' => $pw['phone'],
                                'photo' => $pw['photo'],
                                'role' => $pw['role'],
                                'status' => $pw['status']
                            );

                            $this->session->set_userdata($array);
                            redirect(base_url().$this->session->userdata('role').'/dashboard');
                        }
                    } else {
                        $data['error'] = 'Error! Invalid Captcha, you are not human.';
                    }
                }
            }
        } else {
            $this->load->view('admin/view_login',$data);    
        }
        
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
    }
}
