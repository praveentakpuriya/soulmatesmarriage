<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Print_Profile extends CI_Controller
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

            $id =  $_GET['id'];
            $user_id = $this->session->userdata('user_id');

            $data['data'] = $this->Login_model->get_user_data($id);
            $data['r_preference'] = $this->Login_model->get_r_preference($id);

            $data['c_preference'] = $this->Login_model->get_c_preference($id);
            $data['e_preference'] = $this->Login_model->get_e_preference($id);
            $data['mt_preference'] = $this->Login_model->get_mt_preference($id);
            $data['membership'] = $this->Login_model->get_count_left($user_id);
            $data['o_preference'] = $this->Login_model->get_o_preference($id);
            $data['photo_request'] = $this->Login_model->check_photo_request($id, $user_id);

            if (isset($data["data"][0]->citizenship)) {
                $citi_id = $data["data"][0]->citizenship;
                $data['citizenship'] = $this->CountryModel->getCountryById($citi_id);
            }
            if (isset($data['data'][0]->country_living))
                $data['rcitizenship'] = $this->CountryModel->getCountryById($data['data'][0]->country_living);
            $data['rs_preference'] = $this->Login_model->get_rs_preference($id);
            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';
            // $this->load->view('nav');
            $this->load->view('printprofile', $data);
            // $this->load->view('footer');
        } else {
            redirect(base_url() . "Login");
        }
    }
}
