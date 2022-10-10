<?php
defined('BASEPATH') or exit('No direct script access allowed');


class View_Profile extends CI_Controller
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

            $id =  $this->session->userdata('id');
            $user_id = $this->session->userdata('user_id');

            $data['data'] = $this->Login_model->get_user_data($id);
            $data['r_preference'] = $this->Login_model->get_r_preference($id);

            $data['c_preference'] = $this->Login_model->get_c_preference($id);
            $data['e_preference'] = $this->Login_model->get_e_preference($id);
            $data['mt_preference'] = $this->Login_model->get_mt_preference($id);
            $data['membership'] = $this->Login_model->get_count_left($user_id);
            // $data['o_preference'] = $this->Login_model->get_o_preference($id);

            if (isset($data["data"][0]->citizenship)) {
                $citi_id = $data["data"][0]->citizenship;
                $data['citizenship'] = $this->CountryModel->getCountryById($citi_id);
            }
            if (isset($data['data'][0]->country_living))
                $data['rcitizenship'] = $this->CountryModel->getCountryById($data['data'][0]->country_living);
            $data['rs_preference'] = $this->Login_model->get_rs_preference($id);
            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';
            $this->load->view('nav');
            $this->load->view('view-profile', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "Login");
        }
    }

    public function check_contact_left()
    {
        $id = $_POST['id'];
        $user_id = $this->session->userdata('user_id');
        $result = $this->Login_model->get_count_left($user_id);
        // var_dump($result);

        if (isset($result[0]->contact_left)) {
            if ($result[0]->contact_left > 0) {
                $c_count = $result[0]->contact_left;
                if ($c_count > 0) {
                    $count = $c_count - 1;
                } else {
                    $count = 0;
                }
                $contact_left = array(
                    'contact_left' => $count,
                );
                // var_dump($contact_left);
                $this->Login_model->update_membership_count($contact_left, $user_id);


                $data = $this->Login_model->get_user_by_id($user_id);
                echo "<table width='100%'>
                <tr>
                <td width='20%'>Mobile Number</td>
                <td width='40%'>" . $data[0]->number . "</td>                
                </tr><tr>
                <td width='20%'>Address</td>
                <td width='40%'>" . $data[0]->address . "</td>                
                </tr>
                <tr>
                <td width='20%'>Email</td>
                <td width='40%'>" . $data[0]->email . "</td>                
                </tr>
                      </table>
                ";
            }else{
                echo "<p>Upgrade your membership to view phone/email of " . $id . " (and other members)</p>";
            }
        } else {
            echo "<p>Upgrade your membership to view phone/email of " . $id . " (and other members)</p>";
        }
    }
}
