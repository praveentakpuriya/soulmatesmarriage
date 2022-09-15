<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserProfile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CountryModel');
        $this->load->model('Login_model');
    }

    public function index()
    {

        // var_dump($_SESSION["username"]);
        $username = $this->session->userdata('username');
        $data['data'] = $this->Login_model->get_user($username);
        $data['religion'] = $this->CountryModel->getReligionById($data["data"][0]->religion_id);
        $data['caste'] = $this->CountryModel->getCasteById(
            $data["data"][0]->caste_id
        );
        $this->load->view('nav');
        $this->load->view('memberprofile', $data);
    }
}
