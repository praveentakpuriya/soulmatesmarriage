<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Send_Message extends CI_Controller
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

        if ($this->session->userdata('user_data')) {            
            $this->load->view('nav');
            $this->load->view('send-message');
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Admin_Login");
        }
    }
}
