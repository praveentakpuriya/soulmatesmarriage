<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserProfile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
       
        // var_dump($_SESSION["username"]);
        $this->load->view('memberprofile');
    }

}