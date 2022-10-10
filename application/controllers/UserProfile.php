<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UserProfile extends CI_Controller
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
            // var_dump($_SESSION["username"]);
            $username = $this->session->userdata('username');
            // var_dump($username);
            // die();
            $data['data'] = $this->Login_model->get_user($username);
            $data['religion'] = $this->CountryModel->getReligionById($data["data"][0]->religion_id);
            $data['caste'] = $this->CountryModel->getCasteById(
                $data["data"][0]->caste_id
            );
            $data['membership'] = $this->Login_model->get_count_left($data['data'][0]->user_id);
            $data['interest'] = $this->Login_model->get_interest($data['data'][0]->user_id);
            $data['interest_to'] = $this->Login_model->get_interest_to($data['data'][0]->user_id);
            $data['message'] = $this->Login_model->get_message($data['data'][0]->user_id);
            $data['message_to'] = $this->Login_model->get_message_to($data['data'][0]->user_id);
            // var_dump($data['interest']);
            // die();
            $data['documents'] = $this->EditDataModel->fetchDocuments($data["data"][0]->user_id);
            $this->load->view('nav');
            $this->load->view('memberprofile', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Admin_Login");
        }
    }

    public function get_interest_list(){
        $id = $_POST['id'];
        echo $this->Login_model->get_interest_list($id);
    }
}
