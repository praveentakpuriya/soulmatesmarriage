<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MobilePrivacy extends CI_Controller
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
            $this->load->view('nav');
            $this->load->view('message_privacy');
            $this->load->view('footer');
        }
    }
    public function change_message_privacy()
    {
        $userid = $this->session->userdata('user_id');
        if ($_POST['id'] == 1)
            $this->Login_model->change_privacy('user', $userid, 'message_privacy', "Yes");
        else
            $this->Login_model->change_privacy('user', $userid, 'message_privacy', "No");
        echo "Your Message privacy setting change successfully";
    }
}
