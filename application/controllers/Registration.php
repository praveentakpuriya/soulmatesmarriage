<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->model('CountryModel');
        $this->load->model('RegistrationModel');
        // $this->load->library('encrypt');

    }

    public function index()
    {


        $data['data'] = $this->CountryModel->getData();
        $data['religion'] = $this->CountryModel->getReligion();
        // $data['$error'] = $error;
        $this->load->view('nav');
        $this->load->view('registration', $data);
        // $this->load->view('footer');
    }

    public function fetch_state()
    {
        if ($this->input->post('country_id')) {
            echo $this->CountryModel->get_state($this->input->post('country_id'));
        }
    }

    public function fetch_city()
    {
        if ($this->input->post('state_id')) {
            echo $this->CountryModel->get_city($this->input->post('state_id'));
        }
    }

    public function fetch_caste()
    {
        if ($this->input->post('religion_id')) {
            echo $this->CountryModel->get_caste($this->input->post('religion_id'));
        }
    }

    public function submitUserData()
    {
        if ($_POST['password'] == $_POST['re_password']) {

            if ($this->RegistrationModel->emailExist($this->input->post("email"))) {

                $uid = $this->fetch_last_userid();
                if ($uid) {
                    $getNumber = str_replace("S", "", $uid);
                    $idincrease = $getNumber + 1;
                    $getString = str_pad($idincrease, 5, 0, STR_PAD_LEFT);
                    $id = "S" . $getString;
                } else {
                    $id = "S00001";
                }
                $password = md5($this->input->post("password"));
                $dob =  $this->input->post("dob");
                $age = (date('Y') - date('Y', strtotime($dob)));

                $userdata = array(
                    "user_id" => $id,
                    "email" => $this->input->post("email"),
                    "password" => $password,
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
                    "country_id" => $this->input->post("country_id"),
                    "state_id" => $this->input->post("state_id"),
                    "city_id" => $this->input->post("city_id"),
                    "address" => $this->input->post("address"),
                    "number" => $this->input->post("number"),
                    "citizenship" => $this->input->post("citizenship"),
                    "nri" => $this->input->post("nri"),
                );

                $d_data = array(
                    "user_id" => $id,
                    "email" => $this->input->post("email"),
                    "password" => $this->input->post("password"),
                );

                $this->RegistrationModel->insertUserData($userdata);
                $msg = "Registration Successfull";
                $this->session->set_flashdata('data', $d_data);
                redirect(base_url() . "Login");
            } else {
                $error = "Email already in use";
                $this->session->set_flashdata('error', $error);
                redirect(base_url() . "Registration");
            }
        } else {
            $error = "Password doesn't match";
            $this->session->set_flashdata('error', $error);
            redirect(base_url() . "Registration");
        }
    }

    public function fetch_last_userid()
    {
        return $this->RegistrationModel->fetch_last_userid();
    }
}
