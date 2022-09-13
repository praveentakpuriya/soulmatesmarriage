<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StaticPages extends CI_Controller{
  
    public function about(){
        
        $this->load->view('about');
    }

    public function contact(){
        
        $this->load->view('contact');
    }


}