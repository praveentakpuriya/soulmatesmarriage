<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactModel');
        // $this->load->model('RegistrationModel');
        // $this->load->library('encrypt');

    }

    public function index()
    {
        $this->load->view('nav');
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function submitFormData()
    {
        $userdata = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "number" => $this->input->post("number"),
            "message" => $this->input->post("message")

        );
        $this->ContactModel->insertUserData($userdata);
        $msg = "Your data is shared with us successfully!!";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "Contact");
    }
}
