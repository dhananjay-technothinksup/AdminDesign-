<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function change_password(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/change_password');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_change_password($change_password_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/change_password');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_change_password($change_password_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('change_password_id', $change_password_id, 'change_password');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/change_password');
  }

  public function bank_account(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/bank_account');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_bank_account($bank_account_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/bank_account');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_bank_account($bank_account_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('bank_account_id', $bank_account_id, 'bank_account');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/bank_account');
  }


  public function basic_information(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/basic_information');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_basic_information($basic_information_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/basic_information');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_basic_information($basic_information_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('basic_information_id', $basic_information_id, 'basic_information');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/basic_information');
  }


  public function profile_picture(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/profile_pic');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_profile_picture($profile_picture_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/profile_pic');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_profile_picture($profile_picture_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('profile_picture_id', $profile_picture_id, 'profile_picture');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/profile_pic');
  }


  public function immigration(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/immigration');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_immigration($immigration_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/immigration');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_immigration($immigration_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('immigration_id', $immigration_id, 'immigration');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/immigration');
  }



  public function contact(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/contact');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_contact($contact_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/contact');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_contact($contact_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('contact_id', $contact_id, 'contact');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/contact');
  }



  public function social_network(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/social_network');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_social_network($social_network_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/social_network');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_social_network($social_network_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('social_network_id', $social_network_id, 'social_network');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/social_network');
  }



  public function document(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/document');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_document($document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/document');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_document($document_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('document_id', $document_id, 'document');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/document');
  }


  public function qualification(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/qualification');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_qualification($qualification_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/qualification');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_qualification($qualification_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('qualification_id', $qualification_id, 'qualification');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/qualification');
  }



  public function experience(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/experience');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_experience($experience_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/experience');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_experience($experience_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('experience_id', $experience_id, 'experience');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/experience');
  }




  public function shift(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/shift');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_shift($shift_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Profile/shift');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_shift($shift_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('shift_id', $shift_id, 'shift');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Profile/shift');
  }




}
?>
