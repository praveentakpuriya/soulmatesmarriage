<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ad_User_Membership extends CI_Controller
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
        $this->load->view('admin/ad-nav');
        $this->load->view('admin/membership');
        $this->load->view('admin/ad-footer');
        // $data['data'] = $this->Login_model->fetch_all_user();
        // $this->load->view('admin/ad-nav');
        // $this->load->view('admin/user_list', $data);
        // $this->load->view('admin/ad-footer');
    }

  
}
