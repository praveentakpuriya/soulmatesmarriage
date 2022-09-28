<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SearchModel extends CI_Model
{
    function quicksearch($data, $userid)
    {
        if ($data['gender'] != '') {
            $this->db->where('gender', $data['gender']);
        }

        if ($data['religion_id'] != '0') {
            $this->db->where('religion_id', $data['religion_id']);
        }

        if ($data['mother_tongue'] != 'Any') {
            $this->db->where('mother_tongue', $data['mother_tongue']);
        }

        if (($data['age_from'] != '') && ($data['age_to'] != '')) {
            $this->db->where("age between " . $data['age_from'] . " and " . $data['age_to'] . "");
        }


        $query = $this->db->get('user');

        return $query->result();
    }

    function keywordSearch($data)
    {

        $this->db->select('user.*, religion.*,caste.*');
        $this->db->from('user as user');
        $this->db->join('religion as religion', 'user.religion_Id = religion.id', 'inner');
        $this->db->join('caste as caste', 'user.caste_id = caste.id');
        $this->db->join('professional_details as profession', 'user.user_id = profession.user_id');
        $this->db->join('city as city', 'city.id = user.city_id');

        if ($data['gender'] != '') {
            $this->db->where('gender', $data['gender']);
        }

        if (($data['age_from'] != '') && ($data['age_to'] != '')) {
            $this->db->where("age between " . $data['age_from'] . " and " . $data['age_to'] . "");
        }
        if ($data['keyword'] != '') {
            $this->db->where("religion.name = " . $data['keyword'] . " or caste.name= " . $data['keyword'] . " or profession.education_details = " . $data['keyword'] . " or city.name=" . $data['keyword'] . "");
        }
        $query = $this->db->get('user');

        return $query->result();
    }
}
