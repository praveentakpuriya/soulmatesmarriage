<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactModel extends CI_Model{
 

    function insertUserData($userdata)
    {
        
        $this->db->insert("contactus",$userdata);
    }
}