<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function payslip(){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Payroll/payslip');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_payslip($payslip_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Payroll/payslip');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_payslip($payslip_id){
    $crm_user_id = $this->session->userdata('crm_user_id');
    $crm_company_id = $this->session->userdata('crm_company_id');
    $crm_role_id = $this->session->userdata('crm_role_id');
    if($crm_user_id == '' && $crm_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('payslip_id', $payslip_id, 'payslip');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Payroll/payslip');
  }







}
?>
