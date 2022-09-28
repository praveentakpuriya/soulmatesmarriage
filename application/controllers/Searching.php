<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Searching extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SearchModel');
        $this->load->model('CountryModel');
        $this->load->model('EditDataModel');
        // $this->load->library('encrypt');

    }
    public function index(){
        $data['religion'] = $this->CountryModel->getReligion();

        $this->load->view('nav');
        $this->load->view('search',$data);

    }

    public function quicksearch(){

        $userid = $this->input->post("userid");
        $userdata = array(
            // "user_id" => $userid,
            "gender" => $this->input->post("gender"),
            "age_from" => $this->input->post("age_from"),
            "age_to" => $this->input->post("age_to"),
            "religion_id" => $this->input->post("religion_id"),
            "mother_tongue" => $this->input->post("mother_tongue"),  
            "profile_with" => $this->input->post("profile_with"),  
        );
        $result = $this->SearchModel->quicksearch($userdata,$userid);
        var_dump($result);
        die();

    }

    public function keywordSearch(){
        $userdata = array(
            // "user_id" => $userid,
            "gender" => $this->input->post("gender"),
            "age_from" => $this->input->post("age_from"),
            "age_to" => $this->input->post("age_to"),
            "keyword" => $this->input->post("keyword"),
            // "mother_tongue" => $this->input->post("mother_tongue"),  
            "profile_with" => $this->input->post("profile_with"),  
        );
        $result = $this->SearchModel->keywordSearch($userdata);
        echo '<pre>';
        var_dump($userdata);
        echo '</pre>';
        die();
    }
}