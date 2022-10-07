<?php
defined('BASEPATH') or exit('No direct script access allowed');


class View_Profile extends CI_Controller
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
            $id =  $this->session->userdata('id');

            $data['data'] = $this->Login_model->get_user_data($id);
            $data['r_preference'] = $this->Login_model->get_r_preference($id);

            $data['c_preference'] = $this->Login_model->get_c_preference($id);
            $data['e_preference'] = $this->Login_model->get_e_preference($id);
            $data['mt_preference'] = $this->Login_model->get_mt_preference($id);
            // $data['o_preference'] = $this->Login_model->get_o_preference($id);

            if (isset($data["data"][0]->citizenship)) {
                $citi_id = $data["data"][0]->citizenship;
                $data['citizenship'] = $this->CountryModel->getCountryById($citi_id);
            }
            if (isset($data['data'][0]->country_living))
                $data['rcitizenship'] = $this->CountryModel->getCountryById($data['data'][0]->country_living);
            $data['rs_preference'] = $this->Login_model->get_rs_preference($id);
            $this->load->view('nav');
            $this->load->view('view-profile', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Login");
        }
    }

    public function view_profile($data = '')
    {
    }
}
