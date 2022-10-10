<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Send_Impression extends CI_Controller
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
        $uid = $this->session->userdata('user_id');
        $result = $this->Login_model->get_count_left($uid);
        if (isset($result[0]->duration_left))
            $duration = $result[0]->duration_left;
        else
            $duration = 0;
        $now = date('Y-m-d');
        $diff = strtotime($now) - strtotime($duration);
        $duration_left = round($diff / 86400);

        $id = $_GET['id'];
        $deta = $this->Login_model->get_user_by_id($id);
        
        if (isset($result[0]->interest_left))
            $interest_left = $result[0]->interest_left;
        else
            $interest_left = 0;
        if ($this->session->userdata('user_data')) {
            $data = (object) array('id' => $id, 'name' => $deta[0]->name, 'interest_left' => $interest_left, 'duration_left' => $duration_left);
            $this->load->view('nav');
            $this->load->view('send-impress', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Login");
        }
    }

    public function send_impression()
    {

        $id_to = $_POST['message_to'];
        $userdata = array(
            'interest_from' => $_POST['message_from'],
            'interest_to' => $_POST['message_to'],
            'interest' => $_POST['ioption'],
        );

        $interest_left = $_POST['interest_left'];
        if ($interest_left > 0) {
            $count = $interest_left - 1;
        } else {
            $count = 0;
        }
        $interest_left = array(
            'interest_left' => $count,
        );
        $this->Login_model->update_membership_count($interest_left, $_POST['message_from']);


        $this->Login_model->insert_interest($userdata);
        // $name = $this->session->userdata('user_name');
        $deta = $this->Login_model->get_user_by_id($_POST['message_to']);
        $msg = "Interest sent to " . $deta[0]->name . " Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "Send_Impression/index?id=" . $id_to . "");
    }
}
