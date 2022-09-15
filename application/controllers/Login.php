<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('nav');
        $this->load->view('login');
    }

    public function checkLogin()
    {
        $username = $_POST['email'];
        $password = md5($_POST['password']);
        $this->load->model('Login_model');

        if ($this->Login_model->can_login($username, $password)) {

            $data['data'] = $this->Login_model->get_user($username);
            
            $_SESSION['username'] =  $username;

            ///creating session
            $session_data = array('user_data' => $username);
            $this->load->library('session');
            $this->session->set_userdata($session_data);

            //session establishment there
            redirect(base_url()."UserProfile");  
        } else {
            $error = "Invalid Credentials";
            $this->session->set_flashdata('error',$error);
            redirect(base_url()."Login");
        }
    }

    public function logout()
        {                
                $_SESSION['userName'] = NULL;                
                $this->load->library('session');
                $this->session->unset_userdata('user_data');
                $this->session->sess_destroy();
                redirect(base_url());
        }
}
