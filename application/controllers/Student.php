<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       $this->load->model('student_model');
        $data=array();
       
    }
    
      public function addstudent(){
           if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
          
              $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['studentadd']=$this->load->view('layouts/studentadd','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('addstudent',$data);
        }
        
          public function addStudentForm(){
        
        $data['name']=$this->input->post('name');
         $data['dept']=$this->input->post('dept');
          $data['roll']=$this->input->post('roll');
           $data['reg']=$this->input->post('reg');
            $data['session']=$this->input->post('session');
             $data['batch']=$this->input->post('batch');
             
             $name=$data['name'];
             $dept=$data['dept'];
             $roll=$data['roll'];
             $reg=$data['reg'];
             $session=$data['session'];
             $batch=$data['batch'];
             
             
                    
             if(empty($name) && empty($dept) && empty($roll) && empty($reg) && empty($session) && empty($batch) ){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('student/addstudent');
                 
             }
             
             else{
                 $this->student_model->saveStudent($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('student/addstudent');
                 
             }
        
        
             
        
        
    }
    
    public function studentlist(){
        
            $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['studentdata']=$this->student_model->getAllStudentData();
            $data['studentlist']=$this->load->view('layouts/studentlist',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('liststudent',$data);        
            }
            
            
             public function editstudent($sid){
                 if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
                 
            $data=array();
            
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['studentByID']=$this->student_model->getStudentByID($sid);
            $data['studentedit']=$this->load->view('layouts/studentedit',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('editstudent',$data);   
                 
            }
            
             public function updateStudentForm(){
                 
                $data['sid']=$this->input->post('sid');
                $data['name']=$this->input->post('name');
                $data['dept']=$this->input->post('dept');
                $data['roll']=$this->input->post('roll');
                $data['reg']=$this->input->post('reg');
                $data['session']=$this->input->post('session');
                $data['batch']=$this->input->post('batch');
             
             $sid=$data['sid'];
             $name=$data['name'];
             $dept=$data['dept'];
             $roll=$data['roll'];
             $reg=$data['reg'];
             $session=$data['session'];
             $batch=$data['batch'];
             
              
                    
             if(empty($sid) && empty($name) && empty($dept) && empty($roll) && empty($reg) && empty($session) && empty($batch) ){
               
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                redirect('student/editstudent/'.$sid);
               
             }
             
             else{
                 $this->student_model->updateStudentData($data);           
               
                  $this->session->set_flashdata('success', '<span style="color:green">Data updated successfully</span>' );
                 redirect('student/editstudent/'.$sid);
                
             }
   
    }
    
    public function  deletestudent($sid){
        if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
              $this->student_model->deletestudentByid($sid);
              $this->session->set_flashdata('success', '<span style="color:green">Data Deleted successfully</span>' );
                 redirect('student/studentlist');
            
        }
            
            
    
    

}

