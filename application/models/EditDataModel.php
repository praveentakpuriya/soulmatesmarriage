<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EditDataModel extends CI_Model
{

    function updatePersonalDetails($data, $userid)
    {
        $this->db->where('user_id', $userid);
        return $this->db->update('user', $data);
    }
}
