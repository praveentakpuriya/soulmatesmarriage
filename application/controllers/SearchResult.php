<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SearchResult extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Access-Control-Allow-Origin: *");
        $this->load->model('SearchModel');
        $this->load->model('CountryModel');
        $this->load->model('EditDataModel');
        // $this->load->library('encrypt');

    }
    public function index()
    {
        // $data = $this->session->flashdata('data');
        // var_dump($data);
        // die();
        $data['data'] = $this->session->userdata('dataArr');
        $this->session->unset_userdata("dataArr");
        // echo '<pre>';
        // var_dump($data['data']);
        // echo '</pre>';
        // die();
        $this->load->view('nav');
        $this->load->view('searchresult', $data);
    }
}
