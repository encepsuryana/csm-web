<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_password extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('admin/Model_forget_password');
        $this->load->model('admin/Model_log');
        $this->load->library('recaptcha');
    }

    public function index() {
        $recaptcha = $this->input->post('g-recaptcha-response');
        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );

        $header['setting'] = $this->Model_common->get_setting_data();

        $data['error'] = '';
        $data['success'] = '';
        $data['setting'] = $this->Model_forget_password->get_setting_data();
        $error  = '';
        $status = 'Active';

        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => $header['setting']['protocol'],
            'smtp_host' => $header['setting']['smtp_host'],
            'smtp_user' => $header['setting']['receive_email'],    
            'smtp_pass' => $header['setting']['receive_password'], 
            'smtp_port' => $header['setting']['smtp_port'],
            'crlf'      => "\r\n",
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);

        if(isset($_POST['form1'])) {

            $valid = 1;
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            if($this->form_validation->run() == FALSE) {
                $valid = 0;
                $error .= validation_errors();
            } else {
                $tot = $this->Model_forget_password->check_email($_POST['email']);
                if(!$tot) {
                    $valid = 0;
                    $error .= 'Alamat email tidak ditemukan didalam sistem.<br>';
                } else {
                    $st = $this->Model_forget_password->check_status($_POST['email'], $status);

                    if(!$st) {
                        $valid = 0;
                        $error .= 'Alamat email tidak aktif, silahkan hubungi Administrator<br>';
                    }
                }
            }

            if (!empty($recaptcha)) {
                $response = $this->recaptcha->verifyResponse($recaptcha);
                if (isset($response['success']) and $response['success'] === true) {
                   if($valid == 1) {
                    $token = md5(rand());

                    // Update Database
                    $form_data = array(
                        'token' => $token
                    );
                    $this->Model_forget_password->update($_POST['email'],$form_data);

                    // Send Email
                    $msg = '<p>To reset your password, please <a href="'.base_url().'admin/reset-password/index/'.$_POST['email'].'/'.$token.'"><i>click here</i></a> and enter a new password. <br><br>
                    <div style="background: #f2f3f7; color:#999; padding: 10px; margin-top:20px; padding-bottom: 30px; font-size: 10px; text-align: right; border-top: 1px solid #999">
                    <b>'.$header['setting']['company_name'].'</b><br><br>
                    '.$header['setting']['company_address'].' <br>
                    '.$header['setting']['company_telp'].'<br><br>
                    '.$header['setting']['company_website'].'
                    </div>';

                    $this->load->library('email');

                    $this->email->from($data['setting']['receive_email'], 'Admin');
                    $this->email->to($_POST['email']);

                    $subject = $data['setting']['reset_password_email_subject'];

                    $this->email->subject($subject);
                    $this->email->message($msg);

                    $this->email->send();

                    //Add Log User
                    helper_log("login", '<span style="background:red; color:white;">[RESET PASSWORD] Email:'.$_POST['email'].', Request Reset Password</span>');
                    
                    $data['success'] = 'An email is sent to your email address. Please follow instruction in there.';
                } else {
                    $data['error'] = $error;
                }

                $this->load->view('admin/view_forget_password',$data); 
            }
        } else {
            //Add Log User
            helper_log("login", '<span style="background:red; color:white;">[RESET PASSWORD] Error! Invalid Captcha, Robot Reset Password detected!</span>');

            $data['error'] = 'Error! Invalid Captcha, you are not human!';
            redirect(base_url().'admin/forget-password');
        }   

    } else {
        $this->load->view('admin/view_forget_password',$data);    
    }
}
}
