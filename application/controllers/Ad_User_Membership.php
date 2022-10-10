<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ad_User_Membership extends CI_Controller
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
        $this->load->view('admin/ad-nav');
        $this->load->view('admin/membership');
        $this->load->view('admin/ad-footer');
        // $data['data'] = $this->Login_model->fetch_all_user();
        // $this->load->view('admin/ad-nav');
        // $this->load->view('admin/user_list', $data);
        // $this->load->view('admin/ad-footer');
    }
    public function add_plan()
    {
        // var_dump("he");
        // die();
        $user_id = $_POST['user_id'];
        $plan_id = $_POST['plan'];
        if ($plan_id == 1) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 25,
                'interest_left' => 25,
                'duration_left' => 90,
                'contact_left' => 45,
                'plan_type' => 'Classic'

            );
        }
        if ($plan_id == 2) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 45,
                'interest_left' => 45,
                'duration_left' => 180,
                'contact_left' => 60,
                'plan_type' => 'Classic Gold'

            );
        }
        if ($plan_id == 3) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 60,
                'interest_left' => 60,
                'duration_left' => 240,
                'contact_left' => 100,
                'plan_type' => 'Classic Plus'

            );
        }
        if ($plan_id == 4) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 100,
                'interest_left' => 100,
                'duration_left' => 365,
                'contact_left' => 150,
                'plan_type' => 'Classic Diamond'

            );
        }
        if ($plan_id == 5) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 999999,
                'interest_left' => 999999,
                'duration_left' => 730,
                'contact_left' => 200,
                'plan_type' => 'Platinum'

            );
        }
        if ($plan_id == 6) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 999999,
                'interest_left' => 999999,
                'duration_left' => 730,
                'contact_left' => 300,
                'plan_type' => 'Titanium'

            );
        }
        if ($plan_id == 7) {
            $user_data = array(
                'user_id' => $user_id,
                'message_left' => 999999,
                'interest_left' => 999999,
                'duration_left' => 730,
                'contact_left' => 999999,
                'plan_type' => 'Signature'

            );
        }

        $result = $this->Login_model->update_plan($user_data,$user_id);
        $msg = "Plan of userid " . $user_id ."update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "Ad_User_Membership");
    }
}
