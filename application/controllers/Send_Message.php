<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Send_Message extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CountryModel');
        $this->load->model('Login_model');
        $this->load->model('EditDataModel');
    }

    public function index($id = '')
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
        if (isset($result[0]->message_left))
            $message_left = $result[0]->message_left;
        else
            $message_left = 0;

        if ($this->session->userdata('user_data')) {
            $data = (object) array('id' => $id, 'name' => $deta[0]->name, 'message_left' => $message_left, 'duration_left' => $duration_left);
            // var_dump($data);
            // die();
            $this->load->view('nav');
            $this->load->view('send-message', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Login");
        }
    }

    public function send_message()
    {
        $id_to = $_POST['message_to'];
        $userdata = array(
            'message_from' => $_POST['message_from'],
            'message_to' => $_POST['message_to'],
            'message' => $_POST['message'],
        );
        $message_count = $_POST['message_left'];
        if ($message_count > 0) {
            $count = $message_count - 1;
        } else {
            $count = 0;
        }
        $message_left = array(
            'message_left' => $count,
        );
        $this->Login_model->update_membership_count($message_left, $_POST['message_from']);
        $this->Login_model->insert_message($userdata);

        $deta = $this->Login_model->get_user_by_id($_POST['message_to']);
        $msg = "Message sent to " . $deta[0]->name . " Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "Send_Message/index?id=" . $id_to . "");
    }
}
