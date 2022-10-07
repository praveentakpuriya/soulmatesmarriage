<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login_model extends CI_Model
{



    function can_login($username, $password)
    {

        $this->db->where('email', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('user', array('email' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
    function get_user($username)
    {

        $this->db->where('email', $username);
        $query = $this->db->get('user', array('email' => $username));

        return $query->result();
    }

    function change_status($user_id,$data){
        $this->db->where('user_id',$user_id);
        return $this->db->update('user', $data);
    }

    function get_status($user_id){
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('user');
        return $query->result();
    }

    function fetch_all_user(){
        $this->db->select('*,u.user_id as u_id'); 
        $this->db->from('user as u');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('role',0);
        $query = $this->db->get();

        return $query->result();
    }

    function get_user_data($user_id)
    {
        $this->db->select('*,u.marital_status as u_m_s ,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

        $this->db->from('user as u');
        $this->db->join('religion as r', 'u.religion_id = r.id', 'inner');
        $this->db->join('caste as c', 'u.caste_id = c.id', 'inner');
        $this->db->join('states as s', 'u.state_id = s.id', 'inner');
        $this->db->join('cities as city', 'u.city_id = city.id', 'inner');
        $this->db->join('professional_details as profession', 'u.user_id = profession.user_id', 'left');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->join('partner_preference as partner', 'u.user_id = partner.user_id', 'left');
        $this->db->join('education_preference as edu_pref', 'u.user_id = edu_pref.user_id', 'left');
        $this->db->join('astrological_details as astro', 'u.user_id = astro.user_id', 'left');
        $this->db->join('family_details as family', 'u.user_id = family.user_id', 'left');

        $this->db->where('u.user_id', $user_id);
        $query = $this->db->get();
        // print_r($this->db->last_query());
        return $query->result();
    }
    function get_r_preference($user_id)
    {
        $this->db->from('religion as r');
        $this->db->join('religion_preference as rp', 'r.id = rp.religion_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    function get_c_preference($user_id)
    {
        $this->db->from('caste as c');
        $this->db->join('caste_preference as cp', 'c.id = cp.caste_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_mt_preference($user_id){
       
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('mother_tongue_preference');
        return $query->result();
    }
    function get_e_preference($user_id){
       
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('education_preference');
        return $query->result();
    }
    function get_rs_preference($user_id){
        $this->db->from('states as s');
        $this->db->join('residing_state_preference as rs', 's.id = rs.state_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
}
