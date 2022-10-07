<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin_Dashboard extends CI_Controller
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
            $this->load->view('admin/ad-nav');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/ad-footer');
        } else {
            redirect(base_url() . "Admin_Login");
        }
    }
}
