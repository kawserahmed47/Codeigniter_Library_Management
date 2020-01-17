<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
      public function __construct() {
        parent::__construct();
       $this->load->model('user_model');
        $data=array();
    }
    
    public function login(){
         $this->load->view('login');
        
    }
    public function loginForm(){
        $data=array();
         $data['email']=$this->input->post('email');
         $data['password']=$this->input->post('password');
         $check= $this->user_model->checkUser($data);
         
         if($check){
             $sdata=array();
             $sdata['userId']=$check->userId;
             $sdata['userlogin'] = TRUE;
             $this->session->set_userdata($sdata);
             redirect('Home');
             
         }
         else{
              $this->session->set_flashdata('success', '<span style="color:red">Does not match</span>' );
              redirect('user/login');
         }
         
         
        
    }
    
    public function logout(){
        $this->session->unset_userdata($userId);
        $this->session->set_userdata('userlogin',False);
        $this->session->sess_destroy();
        redirect('user/login');
    }

}






