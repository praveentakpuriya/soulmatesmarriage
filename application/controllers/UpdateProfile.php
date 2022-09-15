<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UpdateProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('CountryModel');
        $this->load->model('EditDataModel');
        // $this->load->library('encrypt');

    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $data['data'] = $this->Login_model->get_user($username);

        $data['religion'] = $this->CountryModel->getReligion();
        // country list
        $data['country'] = $this->CountryModel->getData();

        $data['country_name'] = $this->CountryModel->getCountryById($data["data"][0]->country_id);
        $data['state'] = $this->CountryModel->getStateById($data["data"][0]->state_id);
        $data['city'] = $this->CountryModel->getCityById($data["data"][0]->city_id);

        $data['caste'] = $this->CountryModel->getCasteById(
            $data["data"][0]->caste_id
        );
        // var_dump($data['country_name']);
        // die();
        $this->load->view('nav');
        $this->load->view('editprofile', $data);
    }

    public function editpersonaldetails()
    {
        $userid = $this->input->post("userid");
        $dob =  $this->input->post("dob");
        $age = (date('Y') - date('Y', strtotime($dob)));
        $userdata = array(

            "name" => $this->input->post("name"),
            "gender" => $this->input->post("gender"),
            "height" => $this->input->post("height"),
            "dob" => $dob,
            "age" => $age,
            "mother_tongue" => $this->input->post("mother_tongue"),
            "religion_id" => $this->input->post("religion_id"),
            "caste_id" => $this->input->post("caste_id"),
            "cast_barrier" => $this->input->post("cast_barrier"),
            "sub_cast" => $this->input->post("sub_cast"),
            "marital_status" => $this->input->post("marital_status"),
            "no_of_children" => $this->input->post("no_of_children"),
            "relationship" => $this->input->post("relationship"),
            "manglik" => $this->input->post("manglik"),
            "nri" => $this->input->post("nri"),
            "bio" => $this->input->post("bio"),
        );

        $this->EditDataModel->updatePersonalDetails($userdata, $userid);
        $msg = "Personal Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function updateContactDetails(){
        $userid = $this->input->post("userid");
        
        $userdata = array(
            "email" => $this->input->post("email"),
            "country_id" => $this->input->post("country_id"),
            "state_id" => $this->input->post("state_id"),
            "city_id" => $this->input->post("city_id"),
            "address" => $this->input->post("address"),
            "country_code" => $this->input->post("country_code"),
            "std" => $this->input->post("std"),
            "phone" => $this->input->post("phone"),
            "citizenship" => $this->input->post("citizenship"),
            "residency_status" => $this->input->post("residency_status"),
        );
        $this->EditDataModel->updatePersonalDetails($userdata, $userid);
        $msg = "Personal Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");

    }
}
