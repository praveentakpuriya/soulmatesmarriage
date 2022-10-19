<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login_model extends CI_Model
{



    function can_login($username, $password)
    {


        $this->db->where('password', $password);
        $this->db->where('status', 1);
        $this->db->where('email', $username);
        $this->db->or_where('user_id', $username);
        $query = $this->db->get('user', array('email' => $username, 'password' => $password));
        // print_r($this->db->last_query());
        // die();

        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
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

    function update_Plan($data, $user_id)
    {
        if ($this->check_user_data_present($user_id, "membership")) {
            $this->db->where('user_id', $user_id);
            return $this->db->update('membership', $data);
        } else {
            $this->db->insert("membership", $data);
        }
    }
    function update_photo_request($from, $to)
    {
        $this->db->where('id_from', $from);
        $this->db->where('id_to', $to);
        return $this->db->update('photo_request', array('photo_status' => "Approved"));
    }
    function check_photo_request($th, $to)
    {
        $this->db->where('id_from', $to);
        $this->db->where('id_to', $th);
        $query = $this->db->get('photo_request');
        return $query->result();
    }
    function get_user($username)
    {

        $this->db->where('email', $username);
        $this->db->or_where('user_id', $username);
        $query = $this->db->get('user', array('email' => $username));

        return $query->result();
    }

    function get_interest($user_id)
    {
        $this->db->select("*,count(*) as no_of_interest");
        $this->db->where('interest_to', $user_id);
        $query = $this->db->get('interest');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function fetch_contact_data()
    {
        $query = $this->db->get('contactus');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function get_interest_to($user_id)
    {
        $this->db->select("*,count(*) as no_of_interest");
        $this->db->where('interest_from', $user_id);
        $query = $this->db->get('interest');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function get_message($user_id)
    {
        $this->db->select("*,count(*) as no_of_message");
        $this->db->where('message_to', $user_id);
        $query = $this->db->get('message');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function photo_request_from($user_id)
    {
        $this->db->select("*,count(*) as photo_request_from");
        $this->db->where('id_from', $user_id);
        $this->db->where('photo_status', 0);
        $query = $this->db->get('photo_request');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function photo_request_to($user_id)
    {
        $this->db->select("*,count(*) as photo_request_to");
        $this->db->where('id_to', $user_id);
        $this->db->where('photo_status', 0);
        $query = $this->db->get('photo_request');
        // print_r($this->db->last_query());
        return $query->result();
    }
    function get_message_to($user_id)
    {
        $this->db->select("*,count(*) as no_of_message");
        $this->db->where('message_from', $user_id);
        $query = $this->db->get('message');
        // print_r($this->db->last_query());
        return $query->result();
    }

    function get_user_by_id($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');

        return $query->result();
    }

    function change_status($user_id, $data)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->update('user', $data);
    }

    function get_status($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user');
        return $query->result();
    }

    function fetch_all_user()
    {
        $this->db->select('*,u.user_id as u_id');
        $this->db->from('user as u');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('role', 0);
        $query = $this->db->get();

        return $query->result();
    }

    function get_user_data($user_id)
    {
        $this->db->select('*,u.marital_status as u_m_s,u.user_id as u_id ,u.name as name,r.name as religion_name,c.name as caste_name,s.name as state_name,city.name as city_name');

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

    function insert_message($data)
    {
        $this->db->insert("message", $data);
    }
    function check_user_data_present_in($data)
    {
        $this->db->where('interest_from', $data['interest_from']);
        $this->db->where('interest_to', $data['interest_to']);
        $query = $this->db->get('interest');
        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
    function fill_professional_details($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('professional_details');
        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
    function fill_astrological_details($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('astrological_details');
        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
    function fill_family_details($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('family_details');
        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
    function fill_document_details($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('documents');
        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }

    function insert_interest($data)
    {
        if ($this->check_user_data_present_in($data)) {
            $this->db->where('interest_from', $data['interest_from']);
            $this->db->where('interest_to', $data['interest_to']);
            return $this->db->update('interest', $data);
        } else {
            $this->db->insert("interest", $data);
        }
    }

    function get_count_left($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('membership');
        return $query->result();
    }
    public function get_o_preference($user_id){
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('occupation_preference');
        return $query->result();
    }

    function update_membership_count($data, $userid)
    {
        $this->db->where('user_id', $userid);
        return $this->db->update('membership', $data);
    }

    function change_privacy($table, $userid, $col, $value)
    {
        $this->db->where('user_id', $userid);
        return $this->db->update($table, array($col => $value));
    }

    function get_mt_preference($user_id)
    {

        $this->db->where('user_id', $user_id);
        $query = $this->db->get('mother_tongue_preference');
        return $query->result();
    }
    function get_e_preference($user_id)
    {

        $this->db->where('user_id', $user_id);
        $query = $this->db->get('education_preference');
        return $query->result();
    }
    function get_rs_preference($user_id)
    {
        $this->db->from('states as s');
        $this->db->join('residing_state_preference as rs', 's.id = rs.state_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }
    function delete_data($d1, $d2)
    {
        $this->db->where('interest_from', $d1);
        $this->db->where('interest_to', $d2);
        return $this->db->delete('interest');
    }
    function delete_message($d1, $d2)
    {
        $this->db->where('message_from', $d1);
        $this->db->where('message_to', $d2);
        return $this->db->delete('message');
    }
    function delete_photo_r($d1, $d2)
    {
        $this->db->where('id_from', $d1);
        $this->db->where('id_to', $d2);
        return $this->db->delete('photo_request');
    }
    function upload_contact_view($view_of, $view_by)
    {
        $this->db->insert("contact_record", array('contact_view_by' => $view_by, 'contact_view_of' => $view_of));
    }

    function get_interest_list($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('interest as i', 'u.user_id = i.interest_from', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('interest_to', $id);
        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <p><b>Expression of Interest (28-Sep-2022)</b>
                                                        </p>
                                                        <p>' . $row->interest . '</p>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data1(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
    function contact_of_me($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('contact_record as i', 'u.user_id = i.contact_view_by', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('contact_view_of', $id);
        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // print_r($this->db->last_query());
        // die();
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                       
                                                    </div>        
                                                    <div class="col-md-3 col-sm-3">
                                                        
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>                                                    
                                                   
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
    function contact_by_me($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('contact_record as i', 'u.user_id = i.contact_view_of', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('contact_view_by', $id);
        $this->db->order_by('i.date', 'DESC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                       
                                                    </div>        
                                                    <div class="col-md-3 col-sm-3">
                                                        
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>          
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
    function get_interest_list_to($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('interest as i', 'u.user_id = i.interest_to', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('interest_from', $id);
        // $this->db->order_by('name','ASC');
        $this->db->order_by('i.date', 'DESC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <p><b>Expression of Interest (28-Sep-2022)</b>
                                                        </p>
                                                        <p>' . $row->interest . '</p>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data2(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }

    function get_message_list($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('message as m', 'u.user_id = m.message_from', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('message_to', $id);
        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <p><b>Expression of Interest (28-Sep-2022)</b>
                                                        </p>
                                                        <p>' . $row->message . '</p>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data3(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
    function get_message_list_to($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('message as m', 'u.user_id = m.message_to', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('message_from', $id);
        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <p><b>Expression of Interest (28-Sep-2022)</b>
                                                        </p>
                                                        <p>' . $row->message . '</p>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data4(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }

    function get_photo_from($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('photo_request as m', 'u.user_id = m.id_from', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        $this->db->where('id_to', $id);
        $this->db->where('photo_status', 0);
        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>                                                    
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-success" onclick="return photo_request(\'' . $row->uid . '\')" value="Approve">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data5(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
    function get_photo_to($id)
    {
        $this->db->select("*,u.user_id as uid");
        $this->db->from('user as u');
        $this->db->join('photo_request as m', 'u.user_id = m.id_to', 'inner');
        $this->db->join('documents as d', 'u.user_id = d.user_id', 'left');
        // $this->db->join('photo_request as p', 'u.user_id = d.id_from', 'left');
        $this->db->where('id_from', $id);
        $this->db->where('photo_status', 0);

        // $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $output = '';
        // $output = '<option value="">Select Caste </option>';
        // var_dump($query->result());
        foreach ($query->result() as $row) {
            $this->session->set_userdata("id", $row->uid);
            $output .= '<div class="col-md-12">
            <div class="hidbox">
                <div class="row">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="tab-content border">
                            <table width="100%" id="pending">
                                <tbody>
                                    <tr>
                                        <td valign="top" height="25" class="acttop">
                                            <span class="style13"
                                                style="padding-left: 10px;font-size: 12px">
                                                Pending </span><img src="<img src="Documents/document/' . $row->main_photo . '"
                                                style="display: none;" id="loadpending">
                                            <span class="style13"
                                                style="float:right;font-size: 12px;margin-right: 10px;"
                                                id="spnpending">1 Records Found</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td valign="top" id="loadpendingdata" style="width:100%">

                                            <div class="col-md-12 col-sm-12" style="display:table;">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3 col-sm-3">
                                                        <div class="mem_img">
                                                            <img src="">

                                                            <span class="frame">Soulmates
                                                                Marraige</span>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <p><a class="down" href="View_Profile">' . $row->name . ' (
                                                                ' . $row->uid . ' ) </a></p>
                                                        <p>Age :' . $row->age . ' Years</p>
                                                        <p>Caste : ' . $row->sub_cast . '</p>
                                                        <p>Location : ' . $row->address . '</p>
                                                    </div>
                                                    
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-danger" onclick="return delete_data6(\'' . $row->uid . '\')" value="Delete">
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <input type="button" name="btnbutton"
                                                            class="btn btn-success" onclick="" value="' . $row->photo_status . '">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="col-md-4 col-sm-4 pull-right">

                                                <input type="hidden" id="txtpending" value="1">
                                            </div>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $output;
    }
}
