<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('nav');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function checkLogin()
    {
        // var_dump($this->input->post());
        // die();
        $username = $_POST['email'];
        $password = md5($_POST['password']);
        $this->load->model('Login_model');

        if ($this->Login_model->can_login($username, $password)) {

            $data['data'] = $this->Login_model->get_user($username);

            $_SESSION['username'] =  $data["data"][0]->email;
            $_SESSION['user_name'] =  $data["data"][0]->name;
            $_SESSION['user_id'] = $data["data"][0]->user_id;

            ///creating session
            $session_data = array('user_data' => $username);

            $this->load->library('session');
            $this->session->set_userdata($session_data);

            //session establishment there
            redirect(base_url() . "UserProfile");
        } else {
            $error = "Invalid Credentials or User may be Inactive";
            $this->session->set_flashdata('error', $error);
            redirect(base_url() . "Login");
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
