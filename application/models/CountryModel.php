<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CountryModel extends CI_Model{
 

    function getData()
    {
        
       $this->db->order_by('name','ASC');
       $query = $this->db->get('countries');
        return $query->result();
    }

    function getCountryById($id){
        $this->db->where('id',$id);
        $query = $this->db->get('countries');
        return $query->result();
    }
    function getStateById($id){
        $this->db->where('id',$id);
        $query = $this->db->get('states');
        return $query->result();
    }
    function getCityById($id){
        $this->db->where('id',$id);
        $query = $this->db->get('cities');
        return $query->result();
    }

    function getReligionById($id){
        $this->db->where('id',$id);
        $query = $this->db->get('religion');
        return $query->result();
    }
    function getCasteById($id){
        $this->db->where('id',$id);
        $query = $this->db->get('caste');
        return $query->result();
    } 

    function getReligion()
    {
        
       $this->db->order_by('name','ASC');
       $query = $this->db->get('religion');
        return $query->result();
    }

    function get_caste($religion_id){
        $this->db->where('religion_id',$religion_id);
        $this->db->order_by('name','ASC');
        $query = $this->db->get('caste');
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        foreach($query->result() as $row){
            $output .= '<option value="'.$row->id.'">'.$row->name.' </option>';
        }
        return $output;
    }

    function get_state($country_id){
        $this->db->where('country_id',$country_id);
        $this->db->order_by('name','ASC');
        $query = $this->db->get('states');
        $output = '<option value="">Select State </option>';
        foreach($query->result() as $row){
            $output .= '<option value="'.$row->id.'">'.$row->name.' </option>';
        }
        return $output;
    }
    
    function get_city($state_id){
        $this->db->where('state_id',$state_id);
        $this->db->order_by('name','ASC');
        $query = $this->db->get('cities');
        $output = '<option value="">Select City </option>';
        foreach($query->result() as $row){
            $output .= '<option value="'.$row->id.'">'.$row->name.' </option>';
        }
        return $output;
    }
  
}
