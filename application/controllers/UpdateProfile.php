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
        if ($this->session->userdata('user_data')) {
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

        //family data
        $data['family'] = $this->EditDataModel->fetchFamilyDetails($data["data"][0]->user_id);

        // Professional Details
        $data['professional'] = $this->EditDataModel->fetchProfessionalDetails($data["data"][0]->user_id);

        //astrological Details
        $data['astrological'] = $this->EditDataModel->fetchAstrologicalDetails($data["data"][0]->user_id);

        //reference details
        $data['reference'] = $this->EditDataModel->fetchReferenceDetails($data["data"][0]->user_id);
        // var_dump($data['reference']);
        // die();
        $data['preference'] = $this->EditDataModel->fetchPartnerPreference($data["data"][0]->user_id);

        //profile photo
        $data['documents'] = $this->EditDataModel->fetchDocuments($data["data"][0]->user_id);

        $this->load->view('nav');
        $this->load->view('editprofile', $data);
        $this->load->view('footer', $data);
    }else{
        redirect(base_url() . "Login");
    }
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

    public function updateContactDetails()
    {
        $userid = $this->input->post("userid");

        $userdata = array(
            "user_id" => $userid,
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

    public function editfamilydetails()
    {
        // $userid = $this->input->post("user_id");
        $userid = $this->session->userdata('user_id');
        $userdata = array(
            "user_id" => $userid,
            "family_values" => $this->input->post("family_values"),
            "family_type" => $this->input->post("family_type"),
            "family_status" => $this->input->post("family_status"),
            "no_of_brother" => $this->input->post("no_of_brother"),
            "no_of_married_brother" => $this->input->post("no_of_married_brother"),
            "no_of_sister" => $this->input->post("no_of_sister"),
            "no_of_married_sister" => $this->input->post("no_of_married_sister"),
            "father_occupation" => $this->input->post("father_occupation"),
            "mother_occupation" => $this->input->post("mother_occupation"),
            "family_origin" => $this->input->post("family_origin"),
            "family_bio" => $this->input->post("family_bio"),

        );
        $this->EditDataModel->updateFamilyDetails($userdata, $userid);
        $msg = "Family Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function editProfessionalDetails()
    {
        $userid = $this->session->userdata('user_id');
        $userdata = array(
            "user_id" => $userid,
            "education" => $this->input->post("education"),
            "education_details" => $this->input->post("education_details"),
            "occupation" => $this->input->post("occupation"),
            "occupation_details" => $this->input->post("occupation_details"),
            "employed_in" => $this->input->post("employedin"),
            "salary" => $this->input->post("salary"),
            "total_income" => $this->input->post("total_income"),

        );
        $this->EditDataModel->editProfessionalDetails($userdata, $userid);
        $msg = "Professional Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function editPartnerP(){
        $userid = $this->session->userdata('user_id');
        $userdata = array(
            "user_id" => $userid,
            "age_from" => $this->input->post("age_from"),
            "age_to" => $this->input->post("age_to"),
            "marital_status" => $this->input->post("marital_status"),
            "have_children" => $this->input->post("have_children"),
            "height_from" => $this->input->post("height_from"),
            "height_to" => $this->input->post("height_to"),
            "physical_status" => $this->input->post("physical_status"),
            "horoscope_match" => $this->input->post("horoscope_match"),
            "manglik" => $this->input->post("manglik"),
            "eating_habit" => $this->input->post("eating_habit"),
            "employed_in" => $this->input->post("employed_in"),
            "annual_income_min" => $this->input->post("annual_income_min"),
            "annual_income_max" => $this->input->post("annual_income_max"),
            "citizenship" => $this->input->post("citizenship"),
            "country_living" => $this->input->post("country_living"),
            "residing_status" => $this->input->post("residing_status"),            

        );
        // echo '<pre>';
        // var_dump($userdata);
        // echo '</pre>';
        // die();

        $this->EditDataModel->editPartnerP($userdata, $userid);
        $msg = "Partner Preference update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function editAstrologicalDetails()
    {
        // $this->load->model('kyc_model');
        $config['upload_path'] = './Documents/horoscopefile/';   // Directory 
        $config['allowed_types'] = 'jpg|jpeg|bmp|png|pdf';  //type of images allowed        //Max Size
        $config['encrypt_name'] = TRUE;   // For unique image name at a time

        $this->load->library('upload', $config);  //File Uploading library
        $this->upload->do_upload('horoscope_file');  // input name which have to upload 
        $horoscope_file = $this->upload->data();

        $userid = $this->session->userdata('user_id');
        $userdata = array(
            "user_id" => $userid,
            "birth_time_hh" => $this->input->post("birth_hh"),
            "birth_time_mm" => $this->input->post("birth_mm"),
            "birth_time_am" => $this->input->post("birth_am"),
            "birth_place" => $this->input->post("birth_place"),
            "gan" => $this->input->post("gan"),
            "nadi" => $this->input->post("nadi"),
            "gotra" => $this->input->post("gotra"),
            "star" => $this->input->post("star"),
            "rashi" => $this->input->post("rashi"),
            "horoscope_match" => $this->input->post("horoscope_match"),
            "horoscope_file" => $horoscope_file['file_name'],

        );
        // echo '<pre>';
        // var_dump($horoscope_file);
        // die();
        // echo '</pre>';
        $this->EditDataModel->editAstrologicalDetails($userdata, $userid);
        $msg = "Astrological Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function editReference()
    {
        $userid = $this->session->userdata('user_id');
        $userdata = array(
            "user_id" => $userid,
            "ref1" => $this->input->post("ref1"),
            "ref2" => $this->input->post("ref2"),
        );
        // var_dump($userid);
        // die();
        $this->EditDataModel->editReference($userdata, $userid);
        $msg = "Reference Details update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function changePassword()
    {
        $userid = $this->session->userdata('user_id');
        $opassword = md5($this->input->post("opassword"));
        $password = md5($this->input->post("password"));
        $repassword = md5($this->input->post("repassword"));


        if ($this->EditDataModel->isWritePassword($userid, $opassword)) {

            if ($password == $repassword) {
                $userdata = array(
                    "password" => $password,
                );
                // var_dump("1");
                // die();
                $this->EditDataModel->updatePassword($userid, $userdata);
                $msg = "Password update Successfull";
                $this->session->set_flashdata('msg', $msg);
                redirect(base_url() . "UpdateProfile");
            } else {
                // var_dump("2");
                // die();
                $error = "Please enter same password!";
                $this->session->set_flashdata('msg', $error);
                redirect(base_url() . "UpdateProfile");
            }
        } else {
            // var_dump("3");
            //     die();
            $error = "You entered wrong current password";
            $this->session->set_flashdata('msg', $error);
            redirect(base_url() . "UpdateProfile");
        }
    }

    public function uploadDocument()
    {
        $config['upload_path'] = './Documents/document/';   // Directory 
        $config['allowed_types'] = 'jpg|jpeg|bmp|png|pdf';  //type of images allowed        //Max Size
        $config['encrypt_name'] = TRUE;   // For unique image name at a time

        $config['wm_text'] = "Soulmates";
        $config['wm_type'] = "text";
        $config['wm_font_path'] = "./system/fonts/texb.ttf";
        $config['wm_font_size'] = 25;
        $config['wm_vrt_alignment'] = "middel";
        $config['wm_font_color'] = "ffffff";
        $config['wm_hor_alignment'] = "center";


        $this->load->library('upload', $config);  //File Uploading library
        $this->upload->do_upload('document');  // input name which have to upload 
        $document = $this->upload->data();
        // var_dump($document);
        //     die();

        $file_name = $this->input->post("document_name");

        $userid = $this->session->userdata('user_id');
        $userdata = array(
            'user_id' => $userid,
            $file_name => $document['file_name'],
        );
        $this->EditDataModel->updateDocuments($userid, $userdata);
        $msg = "Documents update Successfull";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "UpdateProfile");
    }

    public function addMotherTonguePreference(){
        $userid = $this->session->userdata('user_id');
        $mother_tongue = $this->input->post("mother_tongue");
        $userdata = array(
            'user_id' => $userid,
            'mother_tongue' => $mother_tongue
        );
        // var_dump($userdata);
        // die();
        $this->EditDataModel->updateItem($userdata,'mother_tongue_preference');

        echo $this->EditDataModel->get_motherTonguePreference($userid);

        // var_dump("success");
        // die();
    }

    public function addEducationPreference(){
        $userid = $this->session->userdata('user_id');
        $education = $this->input->post("education");
        $userdata = array(
            'user_id' => $userid,
            'education' => $education
        );
        // var_dump($userdata);
        // die();
        $this->EditDataModel->updateItem($userdata,'education_preference');

        echo $this->EditDataModel->get_Education_data($userid);
    }

    public function addReligionPreference(){
        $userid = $this->session->userdata('user_id');
        $religion_id = $this->input->post("religion_id");
        $userdata = array(
            'user_id' => $userid,
            'religion_id' => $religion_id
        );
        // var_dump($userdata);
        // die();
        $this->EditDataModel->updateItem($userdata,'religion_preference');

        echo $this->EditDataModel->getReligion($userid);

    }

    public function addCastePreference(){
        $userid = $this->session->userdata('user_id');
        $caste_id = $this->input->post("caste_id");
        $userdata = array(
            'user_id' => $userid,
            'caste_id' => $caste_id
        );
        
        $this->EditDataModel->updateItem($userdata,'caste_preference');

        echo $this->EditDataModel->getCaste($userid);
    }

    public function addOccupationP(){
        $userid = $this->session->userdata('user_id');
        $occupation = $this->input->post("occupation");
        $userdata = array(
            'user_id' => $userid,
            'occupation' => $occupation
        );
        
        $this->EditDataModel->updateItem($userdata,'occupation_preference');

        echo $this->EditDataModel->getOccupation($userid);
    }

    public function addRState(){
        $userid = $this->session->userdata('user_id');
        $state_id = $this->input->post("state_id");
        $userdata = array(
            'user_id' => $userid,
            'state_id' => $state_id
        );
        
        $this->EditDataModel->updateItem($userdata,'residing_state_preference');

        echo $this->EditDataModel->getRState($userid);
    }

    public function deleteRState(){
        $userid = $this->session->userdata('user_id');
        $state_id = $this->input->post("state_id");
        $this->EditDataModel->deleteItem($userid,$state_id,'residing_state_preference');

        echo $this->EditDataModel->getRState($userid);
    }

    public function getRState(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->getRState($userid);
    }

    public function deleteOccupationP(){
        $userid = $this->session->userdata('user_id');
        $occupation = $this->input->post("occupation");
        $this->EditDataModel->deleteItem($userid,$occupation,'occupation_preference');

        echo $this->EditDataModel->getOccupation($userid);
    }

    public function getOccupationP(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->getOccupation($userid);
    }

    public function deleteMotherTongue(){
        $userid = $this->session->userdata('user_id');
        $mother_tongue = $this->input->post("mother_tongue");
        $this->EditDataModel->deleteItem($userid,$mother_tongue,'mother_tongue_preference');

        echo $this->EditDataModel->get_motherTonguePreference($userid);
    }

    public function deleteReligionPreference(){
        $userid = $this->session->userdata('user_id');
        $religion_id = $this->input->post("religion_id");
        $this->EditDataModel->deleteItem($userid,$religion_id,'religion_preference');

        echo $this->EditDataModel->getReligion($userid);
    }

    public function deleteCastePreference(){
        $userid = $this->session->userdata('user_id');
        $caste_id = $this->input->post("caste_id");
        $this->EditDataModel->deleteItem($userid,$caste_id,'caste_preference');
        echo $this->EditDataModel->getCaste($userid);
    }

    public function deleteEducationP(){
        $userid = $this->session->userdata('user_id');
        $education = $this->input->post("education");
        $this->EditDataModel->deleteItem($userid,$education,'education_preference');
        echo $this->EditDataModel->get_Education_data($userid);
    }

    public function fetchMotherT(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->get_motherTonguePreference($userid);
    }

    public function fetchReligion(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->getReligion($userid);
    }

    public function getEducationP(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->get_Education_data($userid);
    }

    public function fetchCastePreference(){
        $userid = $this->session->userdata('user_id');
        echo $this->EditDataModel->getCaste($userid);
    }
}
