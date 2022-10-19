<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RegistrationModel extends CI_Model
{


    function insertUserData($userdata)
    {

        $this->db->insert("user", $userdata);
    }

    function fetch_last_userid()
    {

        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('user');
        $uid = null;
        foreach ($query->result() as $row) {
            $uid = $row->user_id;
            return $uid;
        }
        return $uid;
    }

    public function email_exists($email)
    {

        $sql = "SELECT name , email FROM user WHERE email='{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        // var_dump($row);
        // die();

        return ($result->num_rows() === 1 && $row->email) ? $row->name : false;
    }
    public function update_password()
    {

        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); //sha1($this->config->item('salt').$this->input->post('password'));    for encryption

        $sql = "UPDATE user SET password='{$password}' WHERE email='{$email}' LIMIT 1";
        // $sql1 = "UPDATE user_data SET Password='{$password}' WHERE E_mail='{$email}' LIMIT 1";   // for user data
        $this->db->query($sql);
        // $this->db->query($sql1);         //for user data
        // print_r($this->db->last_query());
        // die();

        if ($this->db->affected_rows() === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function verify_reset_password_code($email, $code)
    {


        $sql = "SELECT name, email FROM user WHERE email='{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        if ($result->num_rows() === 1) {
            return ($code == md5($this->config->item('salt') . $row->name)) ? true : false;
        } else {
            return false;
        }
    }

    function emailExist($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
}
