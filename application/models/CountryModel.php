<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CountryModel extends CI_Model{
 

    function getData()
    {
        
        $query = $this->db->get('countries');
        return $query->result();
    }
    
  
}
