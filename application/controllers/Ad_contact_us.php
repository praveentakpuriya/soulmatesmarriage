<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ad_contact_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactModel');
        // $this->load->model('RegistrationModel');
        $this->load->model('Login_model');
        // $this->load->library('encrypt');

    }

    public function index()
    {
        if ($this->session->userdata('user_data')) {

            $data['data'] = $this->Login_model->fetch_contact_data();
            $this->load->view('admin/ad-nav');
            $this->load->view('admin/contact_us', $data);
            $this->load->view('admin/ad-footer');
        } else
            redirect(base_url() . "Admin_Login");
    }
}
