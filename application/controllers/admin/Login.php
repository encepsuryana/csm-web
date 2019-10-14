<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/Model_login');
        $this->load->model('admin/Model_log');
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
            $status = 'Active';
            
            // Checking the email address
            $un = $this->Model_login->check_email($email);

            if(!$un) {

                //Add Log User
                helper_log("login", '<span style="background:red; color:white;">[LOGIN] User: '.$email.' Gagal Login</span>');

                $data['error'] = 'Email address salah!';
                $this->load->view('admin/view_login',$data);

            } else {
                //when email found, checking status
                $st = $this->Model_login->check_status($email, $status);

                if(!$st) {
                    $data['error'] = 'Akun tidak Aktif, silahkan hubungi Administrator.';
                    $this->load->view('admin/view_login',$data);
                } else {
                    // When email found, checking the password
                    $pw = $this->Model_login->check_password($email,$password);

                    if(!$pw) {

                    //Add Log User
                        helper_log("login", '<span style="background:red; color:white;">[LOGIN] User: '.$email.', Password salah, Gagal Login</span>');

                        $data['error'] = 'Password salah!';
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

                            //Add Log User
                                helper_log("login", '[LOGIN] User: '.$pw['full_name'].' Berhasil Login');

                                redirect(base_url().$this->session->userdata('role').'/dashboard');
                            }
                        } else {
                            //Add Log User
                            helper_log("login", '<span style="background:red; color:white;">[LOGIN] Error! Invalid Captcha, Robot Login detected!</span>');

                            $data['error'] = 'Error! Invalid Captcha, you are not human!';
                            redirect(base_url().'admin/login');
                        }
                    }
                }
            }
        } else {
            $this->load->view('admin/view_login',$data);    
        }
    }

    function logout() {
        //Add Log User
        helper_log("logout", '[LOGOUT] User: '.$this->session->userdata('full_name').' Telah Logout');
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
    }
}
