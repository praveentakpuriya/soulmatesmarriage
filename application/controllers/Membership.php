<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Membership extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('CountryModel');
        // $this->load->model('RegistrationModel');
        // $this->load->library('encrypt');

    }

    public function index(){
        $this->load->view('nav');
        $this->load->view('membership');
        $this->load->view('footer');
    }
}