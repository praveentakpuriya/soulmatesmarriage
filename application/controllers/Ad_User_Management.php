<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ad_User_Management extends CI_Controller
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
            $this->load->view('admin/user_list', $data);
            // $this->load->view('admin/ad-footer');
        } else
            redirect(base_url() . "Admin_Login");
    }

    public function change_status()
    {
        // var_dump("he");
        $user_id = $_POST['id'];
        $status = $this->Login_model->get_status($user_id);

        if ($status[0]->status == 0) {
            $data = array('status' => 1);
            $result =  $this->Login_model->change_status($user_id, $data);
        } else {
            $data = array('status' => 0);
            $result = $this->Login_model->change_status($user_id, $data);
        }
        $result = $this->Login_model->get_status($user_id);
        echo $result[0]->status;
    }
}
