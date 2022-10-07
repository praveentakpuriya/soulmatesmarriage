<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Privacy extends CI_Controller
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

               
            $this->load->view('nav');
            $this->load->view('privacy');
            $this->load->view('footer');
       
    }

}
