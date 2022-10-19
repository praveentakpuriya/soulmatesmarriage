<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ForgetPassword extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ContactModel');
    // $this->load->model('RegistrationModel');
    $this->load->model('RegistrationModel');
    $this->load->library('form_validation');
    // $this->load->library('encrypt');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->view('nav');
    $this->load->view('forgotpassword');
    $this->load->view('footer');
  }

  public function reset_password()
  {

    if (isset($_POST['email']) && !empty($_POST['email'])) {

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('login', array('error' => "Please supply a valid email address"));
      } else {

        $email = trim($this->input->post('email'));
        // $this->load->model('Login_model');
        $result = $this->RegistrationModel->email_exists($email);
        // var_dump($result);
        // die();

        if ($result) {
          $this->send_reset_password_email($email, $result);

          $header_data['pageTitle'] = 'Email Sent Successfully';
          $message_data['messegeTitle'] = 'Email Sent';
          $message_data['messege'] = 'Check your email, we sent a link to reset your password.';
          $message_data['thing'] = 'Email';


          $msg = "Check your email, we sent a link to reset your password.";
          $this->session->set_flashdata('msg', $msg);
          redirect(base_url() . "ForgetPassword");
        } else {

          $header_data['pageTitle'] = 'Email not Sent';
          $message_data['messegeTitle'] = 'Sent Failed';
          $message_data['messege'] = 'Problem encountered while sending messege.';
          $message_data['thing'] = 'Email';

          $error = "Email is not registered with us";
          $this->session->set_flashdata('error', $error);
          redirect(base_url() . "ForgetPassword");
        }
      }
    } else {

      redirect(base_url() . "ForgetPassword");
    }
  }

  public function reset_password_form($email = '', $email_code = '')
  {

    if (isset($email, $email_code)) {
      $email = trim($email);
      $email_hash = sha1($email . $email_code);
      // $this->load->model('RegistrationModel');
      // var_dump($email_code);
      //     die();
      $verified = $this->RegistrationModel->verify_reset_password_code($email, $email_code);
      // var_dump($verified);
      //     die();
      if ($verified) {

        $header_data['pageTitle'] = 'Update your Password';
        $data['data'] = array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email);
        $this->load->view('nav');
        $this->load->view('forget_password_form', array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email));
        $this->load->view('footer');
      } else {
        //send back to reset_password page, not update password, if there was a problem

        $header_data['pageTitle'] = 'Error';
        $message_data['messegeTitle'] = 'Update Failed';
        $message_data['messege'] = 'There was a problem with your link . Please click it again or request to reset your password again';
        $message_data['thing'] = 'Email Link';

        $this->load->view('nav');
        $this->load->view('forget_password_form', $message_data);
        $this->load->view('footer');
        // $this->load->view('auth/reset-password', array('error' => 'There was a problem with your link . Please click it again or request to reset your password again', 'email' => $email));
      }
    }
  }


  public function update_password()
  {
    if (!isset($_POST['email'], $_POST['email_hash']) || $_POST['email_hash'] !== sha1($_POST['email'] . $_POST['email_code'])) {
      die('Error updating your password');
    }
    $this->load->library('form_validation');

    $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required');
    //$this->form_validation->set_rules('email','Email','trim|required|valid_email\xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('password_conf', 'Confirm Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('forgotpassword');
    } else {
      // successfully update
      //return sign_up name if successfull
      $this->load->model('RegistrationModel');
      $result = $this->RegistrationModel->update_password();

      if ($result) {
        $header_data['pageTitle'] = 'Password Updated Successfully';
        $message_data['messegeTitle'] = 'Password Updated';
        $message_data['messege'] = 'try to login, and explore our site.';
        $message_data['thing'] = 'Password update request';
        $msg = "Password reset successfully.";
        $this->session->set_flashdata('msg', $msg);

        redirect(base_url() . "Login");

        // redirect(base_url('Status/success'));
        // $this->load->view('auth/update-password-success');
      } else {
        $msg = "Password reset not done.Try after sometime.";
        $this->session->set_flashdata('msg', $msg);
        redirect(base_url() . "Login");
      }
    }
  }


  private function send_reset_password_email($email, $result)
  {


    $email_address = $email;
    $user_name = $result;
    $email_code = md5($this->config->item('salt') . $user_name);
    $this->load->config('email');
    $this->load->library('email');
    $from = $this->config->item('smtp_user');
    $to = '' . $email_address;
    $subject = 'Password Reset request for Soulmates';
    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
     <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       
       
             <style type="text/css">
              .ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:150%}a{text-decoration:none}@media screen and (max-width: 600px){table.row th.col-lg-1,table.row th.col-lg-2,table.row th.col-lg-3,table.row th.col-lg-4,table.row th.col-lg-5,table.row th.col-lg-6,table.row th.col-lg-7,table.row th.col-lg-8,table.row th.col-lg-9,table.row th.col-lg-10,table.row th.col-lg-11,table.row th.col-lg-12{display:block;width:100% !important}.d-mobile{display:block !important}.d-desktop{display:none !important}.w-lg-25{width:auto !important}.w-lg-25>tbody>tr>td{width:auto !important}.w-lg-50{width:auto !important}.w-lg-50>tbody>tr>td{width:auto !important}.w-lg-75{width:auto !important}.w-lg-75>tbody>tr>td{width:auto !important}.w-lg-100{width:auto !important}.w-lg-100>tbody>tr>td{width:auto !important}.w-lg-auto{width:auto !important}.w-lg-auto>tbody>tr>td{width:auto !important}.w-25{width:25% !important}.w-25>tbody>tr>td{width:25% !important}.w-50{width:50% !important}.w-50>tbody>tr>td{width:50% !important}.w-75{width:75% !important}.w-75>tbody>tr>td{width:75% !important}.w-100{width:100% !important}.w-100>tbody>tr>td{width:100% !important}.w-auto{width:auto !important}.w-auto>tbody>tr>td{width:auto !important}.p-lg-0>tbody>tr>td{padding:0 !important}.pt-lg-0>tbody>tr>td,.py-lg-0>tbody>tr>td{padding-top:0 !important}.pr-lg-0>tbody>tr>td,.px-lg-0>tbody>tr>td{padding-right:0 !important}.pb-lg-0>tbody>tr>td,.py-lg-0>tbody>tr>td{padding-bottom:0 !important}.pl-lg-0>tbody>tr>td,.px-lg-0>tbody>tr>td{padding-left:0 !important}.p-lg-1>tbody>tr>td{padding:0 !important}.pt-lg-1>tbody>tr>td,.py-lg-1>tbody>tr>td{padding-top:0 !important}.pr-lg-1>tbody>tr>td,.px-lg-1>tbody>tr>td{padding-right:0 !important}.pb-lg-1>tbody>tr>td,.py-lg-1>tbody>tr>td{padding-bottom:0 !important}.pl-lg-1>tbody>tr>td,.px-lg-1>tbody>tr>td{padding-left:0 !important}.p-lg-2>tbody>tr>td{padding:0 !important}.pt-lg-2>tbody>tr>td,.py-lg-2>tbody>tr>td{padding-top:0 !important}.pr-lg-2>tbody>tr>td,.px-lg-2>tbody>tr>td{padding-right:0 !important}.pb-lg-2>tbody>tr>td,.py-lg-2>tbody>tr>td{padding-bottom:0 !important}.pl-lg-2>tbody>tr>td,.px-lg-2>tbody>tr>td{padding-left:0 !important}.p-lg-3>tbody>tr>td{padding:0 !important}.pt-lg-3>tbody>tr>td,.py-lg-3>tbody>tr>td{padding-top:0 !important}.pr-lg-3>tbody>tr>td,.px-lg-3>tbody>tr>td{padding-right:0 !important}.pb-lg-3>tbody>tr>td,.py-lg-3>tbody>tr>td{padding-bottom:0 !important}.pl-lg-3>tbody>tr>td,.px-lg-3>tbody>tr>td{padding-left:0 !important}.p-lg-4>tbody>tr>td{padding:0 !important}.pt-lg-4>tbody>tr>td,.py-lg-4>tbody>tr>td{padding-top:0 !important}.pr-lg-4>tbody>tr>td,.px-lg-4>tbody>tr>td{padding-right:0 !important}.pb-lg-4>tbody>tr>td,.py-lg-4>tbody>tr>td{padding-bottom:0 !important}.pl-lg-4>tbody>tr>td,.px-lg-4>tbody>tr>td{padding-left:0 !important}.p-lg-5>tbody>tr>td{padding:0 !important}.pt-lg-5>tbody>tr>td,.py-lg-5>tbody>tr>td{padding-top:0 !important}.pr-lg-5>tbody>tr>td,.px-lg-5>tbody>tr>td{padding-right:0 !important}.pb-lg-5>tbody>tr>td,.py-lg-5>tbody>tr>td{padding-bottom:0 !important}.pl-lg-5>tbody>tr>td,.px-lg-5>tbody>tr>td{padding-left:0 !important}.p-0>tbody>tr>td{padding:0 !important}.pt-0>tbody>tr>td,.py-0>tbody>tr>td{padding-top:0 !important}.pr-0>tbody>tr>td,.px-0>tbody>tr>td{padding-right:0 !important}.pb-0>tbody>tr>td,.py-0>tbody>tr>td{padding-bottom:0 !important}.pl-0>tbody>tr>td,.px-0>tbody>tr>td{padding-left:0 !important}.p-1>tbody>tr>td{padding:4px !important}.pt-1>tbody>tr>td,.py-1>tbody>tr>td{padding-top:4px !important}.pr-1>tbody>tr>td,.px-1>tbody>tr>td{padding-right:4px !important}.pb-1>tbody>tr>td,.py-1>tbody>tr>td{padding-bottom:4px !important}.pl-1>tbody>tr>td,.px-1>tbody>tr>td{padding-left:4px !important}.p-2>tbody>tr>td{padding:8px !important}.pt-2>tbody>tr>td,.py-2>tbody>tr>td{padding-top:8px !important}.pr-2>tbody>tr>td,.px-2>tbody>tr>td{padding-right:8px !important}.pb-2>tbody>tr>td,.py-2>tbody>tr>td{padding-bottom:8px !important}.pl-2>tbody>tr>td,.px-2>tbody>tr>td{padding-left:8px !important}.p-3>tbody>tr>td{padding:16px !important}.pt-3>tbody>tr>td,.py-3>tbody>tr>td{padding-top:16px !important}.pr-3>tbody>tr>td,.px-3>tbody>tr>td{padding-right:16px !important}.pb-3>tbody>tr>td,.py-3>tbody>tr>td{padding-bottom:16px !important}.pl-3>tbody>tr>td,.px-3>tbody>tr>td{padding-left:16px !important}.p-4>tbody>tr>td{padding:24px !important}.pt-4>tbody>tr>td,.py-4>tbody>tr>td{padding-top:24px !important}.pr-4>tbody>tr>td,.px-4>tbody>tr>td{padding-right:24px !important}.pb-4>tbody>tr>td,.py-4>tbody>tr>td{padding-bottom:24px !important}.pl-4>tbody>tr>td,.px-4>tbody>tr>td{padding-left:24px !important}.p-5>tbody>tr>td{padding:48px !important}.pt-5>tbody>tr>td,.py-5>tbody>tr>td{padding-top:48px !important}.pr-5>tbody>tr>td,.px-5>tbody>tr>td{padding-right:48px !important}.pb-5>tbody>tr>td,.py-5>tbody>tr>td{padding-bottom:48px !important}.pl-5>tbody>tr>td,.px-5>tbody>tr>td{padding-left:48px !important}.s-lg-1>tbody>tr>td,.s-lg-2>tbody>tr>td,.s-lg-3>tbody>tr>td,.s-lg-4>tbody>tr>td,.s-lg-5>tbody>tr>td{font-size:0 !important;line-height:0 !important;height:0 !important}.s-0>tbody>tr>td{font-size:0 !important;line-height:0 !important;height:0 !important}.s-1>tbody>tr>td{font-size:4px !important;line-height:4px !important;height:4px !important}.s-2>tbody>tr>td{font-size:8px !important;line-height:8px !important;height:8px !important}.s-3>tbody>tr>td{font-size:16px !important;line-height:16px !important;height:16px !important}.s-4>tbody>tr>td{font-size:24px !important;line-height:24px !important;height:24px !important}.s-5>tbody>tr>td{font-size:48px !important;line-height:48px !important;height:48px !important}}@media yahoo{.d-mobile{display:none !important}.d-desktop{display:block !important}.w-lg-25{width:25% !important}.w-lg-25>tbody>tr>td{width:25% !important}.w-lg-50{width:50% !important}.w-lg-50>tbody>tr>td{width:50% !important}.w-lg-75{width:75% !important}.w-lg-75>tbody>tr>td{width:75% !important}.w-lg-100{width:100% !important}.w-lg-100>tbody>tr>td{width:100% !important}.w-lg-auto{width:auto !important}.w-lg-auto>tbody>tr>td{width:auto !important}.p-lg-0>tbody>tr>td{padding:0 !important}.pt-lg-0>tbody>tr>td,.py-lg-0>tbody>tr>td{padding-top:0 !important}.pr-lg-0>tbody>tr>td,.px-lg-0>tbody>tr>td{padding-right:0 !important}.pb-lg-0>tbody>tr>td,.py-lg-0>tbody>tr>td{padding-bottom:0 !important}.pl-lg-0>tbody>tr>td,.px-lg-0>tbody>tr>td{padding-left:0 !important}.p-lg-1>tbody>tr>td{padding:4px !important}.pt-lg-1>tbody>tr>td,.py-lg-1>tbody>tr>td{padding-top:4px !important}.pr-lg-1>tbody>tr>td,.px-lg-1>tbody>tr>td{padding-right:4px !important}.pb-lg-1>tbody>tr>td,.py-lg-1>tbody>tr>td{padding-bottom:4px !important}.pl-lg-1>tbody>tr>td,.px-lg-1>tbody>tr>td{padding-left:4px !important}.p-lg-2>tbody>tr>td{padding:8px !important}.pt-lg-2>tbody>tr>td,.py-lg-2>tbody>tr>td{padding-top:8px !important}.pr-lg-2>tbody>tr>td,.px-lg-2>tbody>tr>td{padding-right:8px !important}.pb-lg-2>tbody>tr>td,.py-lg-2>tbody>tr>td{padding-bottom:8px !important}.pl-lg-2>tbody>tr>td,.px-lg-2>tbody>tr>td{padding-left:8px !important}.p-lg-3>tbody>tr>td{padding:16px !important}.pt-lg-3>tbody>tr>td,.py-lg-3>tbody>tr>td{padding-top:16px !important}.pr-lg-3>tbody>tr>td,.px-lg-3>tbody>tr>td{padding-right:16px !important}.pb-lg-3>tbody>tr>td,.py-lg-3>tbody>tr>td{padding-bottom:16px !important}.pl-lg-3>tbody>tr>td,.px-lg-3>tbody>tr>td{padding-left:16px !important}.p-lg-4>tbody>tr>td{padding:24px !important}.pt-lg-4>tbody>tr>td,.py-lg-4>tbody>tr>td{padding-top:24px !important}.pr-lg-4>tbody>tr>td,.px-lg-4>tbody>tr>td{padding-right:24px !important}.pb-lg-4>tbody>tr>td,.py-lg-4>tbody>tr>td{padding-bottom:24px !important}.pl-lg-4>tbody>tr>td,.px-lg-4>tbody>tr>td{padding-left:24px !important}.p-lg-5>tbody>tr>td{padding:48px !important}.pt-lg-5>tbody>tr>td,.py-lg-5>tbody>tr>td{padding-top:48px !important}.pr-lg-5>tbody>tr>td,.px-lg-5>tbody>tr>td{padding-right:48px !important}.pb-lg-5>tbody>tr>td,.py-lg-5>tbody>tr>td{padding-bottom:48px !important}.pl-lg-5>tbody>tr>td,.px-lg-5>tbody>tr>td{padding-left:48px !important}.s-lg-0>tbody>tr>td{font-size:0 !important;line-height:0 !important;height:0 !important}.s-lg-1>tbody>tr>td{font-size:4px !important;line-height:4px !important;height:4px !important}.s-lg-2>tbody>tr>td{font-size:8px !important;line-height:8px !important;height:8px !important}.s-lg-3>tbody>tr>td{font-size:16px !important;line-height:16px !important;height:16px !important}.s-lg-4>tbody>tr>td{font-size:24px !important;line-height:24px !important;height:24px !important}.s-lg-5>tbody>tr>td{font-size:48px !important;line-height:48px !important;height:48px !important}}
    
            </style>
    </head>
     <!-- Edit the code below this line -->
     <body style="outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; margin: 0; padding: 0; border: 0;">
    <div class="preview" style="display: none; max-height: 0px; overflow: hidden;">
        Password Reset request for Soulmates ID                                                                 
    </div>
    <table valign="top" class="bg-light body" style="outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; margin: 0; padding: 0; border: 0;" bgcolor="#d8e0e9">
      <tbody>
        <tr>
          <td valign="top" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; margin: 0;" align="left" bgcolor="#d8e0e9">
            
    
    <table class="container" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
      <tbody>
        <tr>
          <td align="center" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; margin: 0; padding: 0 16px;">
            <!--[if (gte mso 9)|(IE)]>
              <table align="center">
                <tbody>
                  <tr>
                    <td width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%; max-width: 600px; margin: 0 auto;">
              <tbody>
                <tr>
                  <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; margin: 0;" align="left">
                    
      <table class="mx-auto" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; margin: 0 auto;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; margin: 0;" align="left">
            <table class="s-4 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="24" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 24px; width: 100%; height: 24px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    <img class="" width="303" height="120" src="" style="height: auto; line-height: 100%; outline: none; text-decoration: none; border: 0 none;"><table class="s-3 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="16" style="border-spacing: 0px; border-collapse: collapse; line-height: 16px; font-size: 16px; width: 100%; height: 16px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    
          </td>
        </tr>
      </tbody>
    </table>
    
    
      <table class="card " border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; width: 100%; overflow: hidden; border: 1px solid #dee2e6;" bgcolor="#ffffff">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 0;" align="left">
            <div style="border-top-width: 5px; border-top-color: #343a40; border-top-style: solid;">
        <table class="card-body" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 0; padding: 20px;" align="left">
            <div>
         
          <h5 class="text-center" style="margin-top: 0; margin-bottom: 0; font-weight: 500; color: inherit; vertical-align: baseline; font-size: 20px; line-height: 24px;" align="center">Password Reset request for Soulmates ID</h5>
          <h3 class="text-center" style="margin-top: 0; margin-bottom: 0; font-weight: 500; color: inherit; vertical-align: baseline; font-size: 28px; line-height: 33.6px;" align="center">' . $user_name . '</h3>
     
      <table border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
        <tbody>
          <tr>
          </tr>
        </tbody>
      </table>
    </div>
    
    
          
        
        <div class="" style="width: 100%; margin: 50px 0; border: 0;">
      <table border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
        <tbody>
          <tr>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 1px; border-top-color: #dddddd; border-top-style: solid; height: 1px; width: 100%; margin: 0;" align="left"></td>
          </tr>
        </tbody>
      </table>
    </div>
    
          <h5 class="text-left" style="margin-top: 0; margin-bottom: 0; font-weight: 500; color: inherit; vertical-align: baseline; font-size: 20px; line-height: 24px;" align="left"><strong>Dear ' . $user_name . ',</strong></h5>
         <table class="py-2" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; padding-top: 8px; padding-bottom: 8px; margin: 0;" align="left">
            <p class="text-left " style="line-height: 24px; font-size: 1.2rem; margin: 0;" align="left">Your Soulmates ID&apos;s password can be reset by clicking the button below.<br> If you did not request a new password, please ignore this email.</p>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="btn btn-success btn-lg" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; margin: 0 auto;">
        <tbody>
          <tr>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-radius: 4px; margin: 0;" align="center" bgcolor="#28a745">
              <a href="' . base_url() . 'ForgetPassword/reset_password_form/' . $email . '/' . $email_code . '" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 4.8px; line-height: 30px; display: inline-block; font-weight: normal; white-space: nowrap; background-color: #28a745; color: #ffffff; padding: 8px 16px; border: 1px solid #28a745;">Reset Password</a>
            </td>
          </tr>
        </tbody>
      </table>
    
        </div>
          </td>
        </tr>
      </tbody>
    </table>
    
      </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="s-4 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="24" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 24px; width: 100%; height: 24px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    
    
    
      <table class="card w-100 " border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; width: 100%; overflow: hidden; border: 1px solid #dee2e6;" bgcolor="#ffffff">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 3;" align="left">
            <div>
        <table class="card-body" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; width: 100%; margin: 0; padding: 20px;" align="left">
            <div>
          <table class="mx-auto" align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; margin: 0 auto;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; margin: 0;" align="left">
            <img width="50" height="50" class="" src="https://s3.amazonaws.com/lyft.zimride.com/images/emails/enterprise/briefcase_dark_large.png" style="height: auto; line-height: 100%; outline: none; text-decoration: none; border: 0 none;">
          </td>
        </tr>
      </tbody>
    </table>
    
          <h4 class="text-center" style="margin-top: 0; margin-bottom: 0; font-weight: 500; color: inherit; vertical-align: baseline; font-size: 24px; line-height: 28.8px;" align="center">Already know the Password?</h4>
          <p class="text-center" style="line-height: 24px; font-size: 16px; margin: 0;" align="center">So why not click on the button below to Login and explore our services</p>
          <table class="s-2 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="8" style="border-spacing: 0px; border-collapse: collapse; line-height: 8px; font-size: 8px; width: 100%; height: 8px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    <table class="btn btn-success btn-lg mx-auto " align="center" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: separate !important; border-radius: 4px; margin: 0 auto;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-radius: 4px; margin: 0;" align="center" bgcolor="#28a745">
            <a href="https://soulmatesmarriage.com" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 4.8px; line-height: 30px; display: inline-block; font-weight: normal; white-space: nowrap; background-color: #28a745; color: #ffffff; padding: 8px 16px; border: 1px solid #28a745;">Visit Our Site</a>
          </td>
        </tr>
      </tbody>
    </table>
    
        </div>
          </td>
        </tr>
      </tbody>
    </table>
    
      </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="s-4 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="24" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 24px; width: 100%; height: 24px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    
    
    
      <div class="text-center text-muted" style="color: #636c72;" align="center">Help Center</div>
    
      <table class="table-unstyled text-muted " border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse; width: 100%; max-width: 100%; color: #636c72;" bgcolor="transparent">
        <tbody>
          <tr>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">&copy;2022 Soulmatest</td>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">
              <table class="float-right" align="right" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">
            <table class="pl-2" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; padding-left: 8px; margin: 0;" align="left">
            <img class=" " width="20" height="20" src="https://s3.amazonaws.com/lyft.zimride.com/images/emails/social/v2/facebook@2x.png" style="height: auto; line-height: 100%; outline: none; text-decoration: none; border: 0 none;">
          </td>
        </tr>
      </tbody>
    </table>
    
          </td>
        </tr>
      </tbody>
    </table>
    
              <table class="float-right" align="right" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">
            <table class="pl-2" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; padding-left: 8px; margin: 0;" align="left">
            <img class=" " width="20" height="20" src="https://s3.amazonaws.com/lyft.zimride.com/images/emails/social/v2/twitter@2x.png" style="height: auto; line-height: 100%; outline: none; text-decoration: none; border: 0 none;">
          </td>
        </tr>
      </tbody>
    </table>
    
          </td>
        </tr>
      </tbody>
    </table>
    
              <table class="float-right" align="right" border="0" cellpadding="0" cellspacing="0" style="font-family: Helvetica, Arial, sans-serif; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0px; border-collapse: collapse;">
      <tbody>
        <tr>
          <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">
            <img class="" width="20" height="20" src="https://s3.amazonaws.com/lyft.zimride.com/images/emails/social/v2/instagram@2x.png" style="height: auto; line-height: 100%; outline: none; text-decoration: none; border: 0 none;">
          </td>
        </tr>
      </tbody>
    </table>
    
            </td>
          </tr>
          <tr>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">Indore</td>
            <td class="text-right" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="right">Pricing</td>
          </tr>
          <tr>
            <td style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="left">india</td>
            <td class="text-right" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 16px; border-top-width: 0; border-bottom-width: 0; margin: 0;" align="right">Join Us</td>
          </tr>
        </tbody>
      </table>
    <table class="s-4 w-100" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
      <tbody>
        <tr>
          <td height="24" style="border-spacing: 0px; border-collapse: collapse; line-height: 24px; font-size: 24px; width: 100%; height: 24px; margin: 0;" align="left">
             
          </td>
        </tr>
      </tbody>
    </table>
    
    
    
    
                  </td>
                </tr>
              </tbody>
            </table>
            <!--[if (gte mso 9)|(IE)]>
                    </td>
                  </tr>
                </tbody>
              </table>
            <![endif]-->
          </td>
        </tr>
      </tbody>
    </table>
    
    
     
          </td>
        </tr>
      </tbody>
    </table>
    </body>
    </html>
    ';

    $this->email->set_newline("\r\n");
    $this->email->from($from);
    $this->email->to($to);
    $this->email->subject($subject);
    $this->email->message($message);
    $this->email->send();
    return true;
  }
}
