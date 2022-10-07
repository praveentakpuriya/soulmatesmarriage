<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');
class SearchModel extends CI_Model
{
    function quicksearch($data)
    {
        $this->db->select('*,u.user_id as user_id,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

        $this->db->from('user as u');
        $this->db->join('religion as r', 'u.religion_id = r.id', 'inner');
        $this->db->join('caste as c', 'u.caste_id = c.id', 'inner');
        $this->db->join('states as s', 'u.state_id = s.id', 'inner');
        $this->db->join('cities as city', 'u.city_id = city.id', 'inner');
        $this->db->join('professional_details as profession', 'u.user_id = profession.user_id', 'left');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');

        // $this->db->where('u.user_id !=', $userid);
        if ($data['gender'] != '') {
            $this->db->where('u.gender', $data['gender']);
        }

        if ($data['religion_id'] != '0') {
            $this->db->where('u.religion_id', $data['religion_id']);
        }

        if ($data['mother_tongue'] != 'Any') {
            $this->db->where('u.mother_tongue', $data['mother_tongue']);
        }

        if (($data['age_from'] != '') && ($data['age_to'] != '')) {
            $this->db->where("u.age between " . $data['age_from'] . " and " . $data['age_to'] . "");
        }


        $query = $this->db->get();

        return $query->result();
    }

    function get_city_id($name)
    {
        $query = $this->db->where('name', $name);
        $query = $this->db->get('cities');
        $city = $query->result();
        return $city;
    }
    function get_caste_id($name)
    {
        $query = $this->db->where('name', $name);
        $query = $this->db->get('caste');
        return $query->result();
    }

    function getNameX($id, $table)
    {
        $query = $this->db->where('id', $id);
        $query = $this->db->get($table);
        // print_r($this->db->last_query());
        return $query->result();
    }

    function get_religion_id($name)
    {
        $query = $this->db->where('name', $name);
        $query = $this->db->get('religion');
        return $query->result();
    }


    function keywordSearch($data)
    {
        $key = $data['keyword'];
        if ($key != '') {
            $city = $this->get_city_id($key);

            $religion = $this->get_religion_id($key);

            $caste = $this->get_caste_id($key);
            // var_dump($caste);
        }

        $this->db->select('*,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

        $this->db->from('user as u');
        $this->db->join('religion as r', 'u.religion_id = r.id', 'inner');
        $this->db->join('caste as c', 'u.caste_id = c.id', 'inner');
        $this->db->join('states as s', 'u.state_id = s.id', 'inner');
        $this->db->join('cities as city', 'u.city_id = city.id', 'inner');
        $this->db->join('professional_details as profession', 'u.user_id = profession.user_id', 'left');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');

        if ($data['gender'] != '') {
            $this->db->where('u.gender', $data['gender']);
        }

        if (($data['age_from'] != '') && ($data['age_to'] != '')) {
            $this->db->where("u.age between " . $data['age_from'] . " and " . $data['age_to'] . "");
        }
        if ($data['keyword'] != '') {

            if (isset($caste[0]->id)) $this->db->where('u.caste_id', $caste[0]->id);
            if (isset($religion[0]->id)) $this->db->where('u.religion_id', $religion[0]->id);
            if (isset($city[0]->id)) $this->db->where('u.city_id', $city[0]->id);
            $this->db->or_where('profession.education_details', $data['keyword']);
        }
        $query = $this->db->get();
        // print_r($this->db->last_query());
        return $query->result();
    }


    public function advanceSearch($data)
    {

        // var_dump($values);
        if (isset($data)) {
            $this->db->select('*,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

            $this->db->from('user as u');
            $this->db->join('religion as r', 'u.religion_id = r.id', 'inner');
            $this->db->join('caste as c', 'u.caste_id = c.id', 'inner');
            $this->db->join('states as s', 'u.state_id = s.id', 'inner');
            $this->db->join('cities as city', 'u.city_id = city.id', 'inner');
            $this->db->join('professional_details as profession', 'u.user_id = profession.user_id', 'left');
            $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
            if (isset($data['gender'])) {
                $this->db->where('u.gender', $data['gender']);
            }


            if (($data['age_from'] != '') && ($data['age_to'] != '')) {
                $this->db->where("u.age between " . $data['age_from'] . " and " . $data['age_to'] . "");
            }

            // $height_f = $data['height_from'];

            if (($data['height_from'] != '0') && ($data['height_to'] != '0')) {
                $this->db->where("u.height >=", $data['height_from']);
                $this->db->where("u.height <=", $data['height_to']);
            }
            if (isset($data['manglik']) && $data['manglik'] != 'All') {
                $this->db->where('u.manglik', $data['manglik']);
            }

            if (isset($data['caste_barrier'])) {
                $this->db->where('u.cast_barrier', $data['caste_barrier']);
            }
            if (isset($data['employedin'])) {
                if (!in_array("Any", $data['employedin']))
                    $this->db->where_in('profession.employed_in', $data['employedin']);
            }
            if (isset($data['citizenship']) && $data['citizenship'] != 'Any') {
                $this->db->where('u.citizenship', $data['citizenship']);
            }

            if (isset($data['m_data'])) {
                $this->db->where_in('u.mother_tongue', $data['m_data']);
            }

            if (isset($data['r_data'])) {
                $this->db->where_in('u.religion_id', $data['r_data']);
            }

            if (isset($data['c_data'])) {
                $this->db->where_in('u.caste_id', $data['c_data']);
            }

            if (isset($data['e_data'])) {
                $this->db->where_in('profession.education', $data['e_data']);
            }
            if (isset($data['o_data'])) {
                $this->db->where_in('profession.occupation', $data['o_data']);
            }
            if (isset($data['state_data'])) {
                $this->db->where_in('u.state_id', $data['state_data']);
            }

            if (isset($data['city_data'])) {
                $this->db->where_in('u.city_id', $data['city_data']);
            }

            // var_dump($data['marital_status']);
            if (isset($data['marital_status'])) {
                if (!in_array("Any", $data['marital_status']))
                    $this->db->where_in('u.marital_status', $data['marital_status']);
            }


            $query = $this->db->get();
            $output = '';
            $result = $query->result();
            // var_dump("hey");
            // die();
            return $result;
           
        }
    }



    function searchById($userid)
    {
        $this->db->select('*,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

        $this->db->from('user as u');
        $this->db->join('religion as r', 'u.religion_id = r.id', 'inner');
        $this->db->join('caste as c', 'u.caste_id = c.id', 'inner');
        $this->db->join('states as s', 'u.state_id = s.id', 'inner');
        $this->db->join('cities as city', 'u.city_id = city.id', 'inner');
        $this->db->join('professional_details as profession', 'u.user_id = profession.user_id', 'left');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');

        $this->db->where('u.user_id', $userid);
        $query = $this->db->get();
        // print_r($this->db->last_query());
        // die();
        return $query->result();
    }
}
