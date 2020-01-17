<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       $this->load->model('department_model');
        $data=array();
    }
    public function adddepartment(){
        if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
          
              $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['departmentadd']=$this->load->view('layouts/departmentadd','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('adddepartment',$data);
        }
        
        public function addDepartmentForm(){
        
        $data['depname']=$this->input->post('depname');
         
             
             $depname=$data['depname'];
           
             
            
                    
             if(empty($depname)  ){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('department/adddepartment');
                 
             }
             
             else{
                 $this->department_model->saveDepartment($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('department/adddepartment');
                 
             }     
    }
    
     public function departmentlist(){
        
      
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['departmentdata']=$this->department_model->getAllDepartmentData();
            $data['departmentlist']=$this->load->view('layouts/departmentlist',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('listdepartment',$data);        
            }
            
            
             public function  deletestudent($depid){
                 if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
              $this->department_model->deletedepartmentByid($depid);
              $this->session->set_flashdata('success', '<span style="color:green">Data Deleted successfully</span>' );
                 redirect('department/departmentlist');
            
        }
        
       public function editdepartment($depid){
           if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
               $data=array();
           
            $data['title']='Edit Department';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['departmentByID']=$this->department_model->getDepartmentByID($depid);
            $data['departmentedit']=$this->load->view('layouts/departmentedit',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('editdepartment',$data);        
            }
            
          public function updateDepartmentForm(){
              
              $data['depid']=$this->input->post('depid');
               $data['depname']=$this->input->post('depname');
         
             
             $depid=$data['depid'];
             $depname=$data['depname'];
             
            
                    
             if(empty($depname)){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('department/editdepartment/'.$depid);
                 
             }
             
             else{
                 $this->department_model->updateDepartment($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('department/editdepartment/'.$depid);
                 
             }  
              
          }
            
            
        
      
        
    
    
    
    
}