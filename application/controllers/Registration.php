<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller{
  
    public function index(){

        $this->load->model('CountryModel');
        $data['data'] = $this->CountryModel->getData();
        $this->load->view('registration',$data);
    }

    

}