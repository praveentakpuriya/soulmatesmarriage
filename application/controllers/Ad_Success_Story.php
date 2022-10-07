<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ad_Success_Story extends CI_Controller
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
            $data['data'] = $this->Login_model->fetch_all_user();
            // $this->load->view('admin/ad-nav');
            $this->load->view('admin/ad-success-story');
            // $this->load->view('admin/ad-footer');
        } else {
            redirect(base_url() . "Admin_Login");
        }
    }
}
