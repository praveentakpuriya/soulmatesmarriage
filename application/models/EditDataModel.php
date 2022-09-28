<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EditDataModel extends CI_Model
{

    function updatePersonalDetails($data, $userid)
    {
        $this->db->where('user_id', $userid);
        return $this->db->update('user', $data);
    }

    function fetchFamilyDetails($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('family_details');
        return $query->result();
    }

    function fetchProfessionalDetails($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('professional_details');
        return $query->result();
    }

    function fetchAstrologicalDetails($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('astrological_details');
        return $query->result();
    }

    function fetchReferenceDetails($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('reference');
        return $query->result();
    }

    function fetchDocuments($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('documents');
        return $query->result();
    }

    function fetchPartnerPreference($userid)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get('partner_preference');
        return $query->result();
    }

    function check_user_data_present($userid, $table)
    {
        $this->db->where('user_id', $userid);
        $query = $this->db->get($table, array('user_id' => $userid));

        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }

    function isWritePassword($userid, $password)
    {
        $this->db->where('user_id', $userid);
        $this->db->where('password', $password);
        $query = $this->db->get('user', array('user_id' => $userid, 'password' => $password));

        if ($query->num_rows() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    function updateFamilyDetails($data, $userid)
    {
        if ($this->check_user_data_present($userid, "family_details")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('family_details', $data);
        } else {
            $this->db->insert("family_details", $data);
        }
    }

    public function editPartnerP($data,$userid){
        if ($this->check_user_data_present($userid, "partner_preference")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('partner_preference', $data);
        } else {
            $this->db->insert("partner_preference", $data);
        }
    }

    function updateItem($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function deleteItem($userid, $id, $table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table, array('user_id' => $userid, 'id' => $id));
    }

    public function getReligion($userid)
    {
        $this->db->select('religion.*,religion_preference.*');
        $this->db->from('religion');
        $this->db->join('religion_preference', 'religion.id = religion_preference.religion_id', 'inner');
        $this->db->where('user_id',$userid);
        $query = $this->db->get();
        $output = '';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        return $output;
    }

    public function getCaste($userid){
        $this->db->select('caste.*,caste_preference.*');
        $this->db->from('caste');
        $this->db->join('caste_preference', 'caste.id = caste_preference.caste_id', 'inner');
        $this->db->where('user_id',$userid);
        $query = $this->db->get();
        $output = '';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        return $output;

    }

    function get_motherTonguePreference($userid)
    {
        $this->db->where('user_id', $userid);
        
        $query = $this->db->get('mother_tongue_preference');
        $output = '';
        
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->mother_tongue . ' </option>';
        }
        return $output;
    }

    function get_Education_data($userid){
        $this->db->where('user_id', $userid);
        
        $query = $this->db->get('education_preference');
        $output = '';
        
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->education . ' </option>';
        }
        return $output;
    }

    public function getOccupation($userid){
        $this->db->where('user_id', $userid);
        
        $query = $this->db->get('occupation_preference');
        $output = '';
        
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->occupation . ' </option>';
        }
        return $output;
    }

    public function getRState($userid){
        $this->db->select('states.*,residing_state_preference.*');
        $this->db->from('states');
        $this->db->join('residing_state_preference', 'states.id = residing_state_preference.state_id', 'inner');
        $this->db->where('user_id',$userid);
        $query = $this->db->get();
        $output = '';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . ' </option>';
        }
        return $output;

    }
    function editProfessionalDetails($data, $userid)
    {
        if ($this->check_user_data_present($userid, "professional_details")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('professional_details', $data);
        } else {
            $this->db->insert("professional_details", $data);
        }
    }
    function editAstrologicalDetails($data, $userid)
    {
        if ($this->check_user_data_present($userid, "astrological_details")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('astrological_details', $data);
        } else {
            $this->db->insert("astrological_details", $data);
        }
    }

    function editReference($data, $userid)
    {
        if ($this->check_user_data_present($userid, "reference")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('reference', $data);
        } else {
            $this->db->insert("reference", $data);
        }
    }

    function updatePassword($userid, $data)
    {
        $this->db->where('user_id', $userid);
        return $this->db->update('user', $data);
    }

    function updateDocuments($userid, $data)
    {
        if ($this->check_user_data_present($userid, "documents")) {
            $this->db->where('user_id', $userid);
            return $this->db->update('documents', $data);
        } else {
            // var_dump($data);
            // die();
            $this->db->insert("documents", $data);
        }
    }
}
