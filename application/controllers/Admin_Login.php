<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin_Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CountryModel');
        $this->load->model('Login_model');
        $this->load->model('EditDataModel');
    }

    public function index()
    {
        // $this->load->view('admin/ad-nav');
        $this->load->view('admin/login');
        // $this->load->view('admin/ad-footer');
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

            if ($data['data'][0]->role == 1) {

                $_SESSION['username'] =  $username;
                $_SESSION['user_id'] = $data["data"][0]->user_id;

                ///creating session
                $session_data = array('user_data' => $username);

                $this->load->library('session');
                $this->session->set_userdata($session_data);

                //session establishment there
                redirect(base_url() . "Admin_Dashboard");
            } else {
                $error = "Invalid Credentials";
                $this->session->set_flashdata('error', $error);
                redirect(base_url() . "Admin_Login");
            }
        } else {
            $error = "Invalid Credentials";
            $this->session->set_flashdata('error', $error);
            redirect(base_url() . "Admin_Login");
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
