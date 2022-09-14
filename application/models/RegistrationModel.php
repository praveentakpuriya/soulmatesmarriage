<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegistrationModel extends CI_Model{
 

    function insertUserData($userdata)
    {
        
        $this->db->insert("user",$userdata);
    }

    function fetch_last_userid(){
        
           $this->db->order_by('id','DESC');
           $query = $this->db->get('user');          
            $uid = null;
            foreach($query->result() as $row){
                $uid = $row->user_id;
                return $uid;
            }
            return $uid;
    
    }

    
  
}
