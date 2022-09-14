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
}
