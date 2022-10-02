<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Searching extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->model('SearchModel');
        $this->load->model('CountryModel');
        $this->load->model('EditDataModel');
        $this->load->library('session');
        // $this->load->library('encrypt');

    }
    public function index()
    {
        $data['religion'] = $this->CountryModel->getReligion();
        $data['country'] = $this->CountryModel->getData();
        $this->load->view('nav');
        $this->load->view('search', $data);
    }

    public function quicksearch()
    {

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
        $result = $this->SearchModel->quicksearch($userdata, $userid);
        $this->session->set_userdata("dataArr", $result);
        $this->session->userdata("dataArr");
        redirect(base_url() . "SearchResult");
    }

    public function keywordSearch()
    {
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
        $this->session->set_userdata("dataArr", $result);
        $this->session->userdata("dataArr");
        redirect(base_url() . "SearchResult");
    }

    public function searchById()
    {
        $userid = $this->input->post("id");
        $result = $this->SearchModel->searchById($userid);
        // $id = getReligionName($result)
        $this->session->set_userdata("dataArr", $result);
        $this->session->userdata("dataArr");
        redirect(base_url() . "SearchResult");
    }

    public function getReligionName($id = '')
    {
        if ($id == '')
            $religion_id = $this->input->get("id");
        else
            $religion_id = $id;

        $result =  $this->SearchModel->getNameX($religion_id, 'religion');
        // var_dump($result);
        // die();
        echo $result[0]->name;
    }

    public function getCasteName()
    {
        $caste_id = $this->input->get("id");
        $result =  $this->SearchModel->getNameX($caste_id, 'caste');
        echo $result[0]->name;
    }

    public function getStateName()
    {
        $state_id = $this->input->get("id");
        // var_dump($state_id);
        // die();
        $result =  $this->SearchModel->getNameX($state_id, 'states');
        echo $result[0]->name;
    }
    public function getCityName()
    {
        $city_id = $this->input->get("id");
        $result =  $this->SearchModel->getNameX($city_id, 'cities');
        echo $result[0]->name;
    }
    public function advanceSearch()
    {
        $data = $this->input->post();

        $result = $this->SearchModel->advanceSearch($data);
        $this->session->set_userdata("dataArr", $result);
        $this->session->userdata("dataArr");
        echo $result;
        // var_dump($result);
        // // echo $result;
    }
}
