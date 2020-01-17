<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issue extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       $this->load->model('issue_model');
        $data=array();
    }
    
      public function addissue(){
          
              $data=array();
            $data['title']='Add Issue';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['issueadd']=$this->load->view('layouts/issueadd','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('addissue',$data);
        }
        
          public function addIssueForm(){
        
        $data['iStudentID']=$this->input->post('iStudentID');
         $data['iBookName']=$this->input->post('iBookName');
          $data['iDateOfIssue']=$this->input->post('iDateOfIssue');
           $data['iDateOfReturn']=$this->input->post('iDateOfReturn');
           
             
             $iStudentID=$data['iStudentID'];
             $iBookName=$data['iBookName'];
             $iDateOfIssue=$data['iDateOfIssue'];
             $iDateOfReturn=$data['iDateOfReturn'];
            
             
             
                    
             if(empty($iStudentID) && empty($iBookName) && empty($iDateOfIssue) && empty($iDateOfReturn) ){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('issue/addissue');
                 
             }
             
             else{
                 $this->issue_model->saveIssue($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('issue/addissue');
                 
             }
        
        
             
        
        
    }
    
    public function issuelist(){
        
            $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['issuedata']=$this->issue_model->getAllIssueData();
            $data['issuelist']=$this->load->view('layouts/issuelist',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('listissue',$data);        
            }
            
            
             public function editissue($iID){
                 
            $data=array();
            
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['issueByID']=$this->issue_model->getIssueByID($iID);
            $data['issueedit']=$this->load->view('layouts/issueedit',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('editissue',$data);   
                 
            }
            
             public function updateIssueForm(){
                 $data['iID']=$this->input->post('iID');
                 $data['iStudentID']=$this->input->post('iStudentID');
         $data['iBookName']=$this->input->post('iBookName');
          $data['iDateOfIssue']=$this->input->post('iDateOfIssue');
           $data['iDateOfReturn']=$this->input->post('iDateOfReturn');
           
              $iID=$data['iID'];
             $iStudentID=$data['iStudentID'];
             $iBookName=$data['iBookName'];
             $iDateOfIssue=$data['iDateOfIssue'];
             $iDateOfReturn=$data['iDateOfReturn'];
             
              
                    
             if(empty($iID) && empty($iStudentID) && empty($iBookName) && empty($iDateOfIssue) && empty($iDateOfReturn)  ){
               
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                redirect('issue/editissue/'.$iID);
               
             }
             
             else{
                 $this->issue_model->updateIssueData($data);           
               
                  $this->session->set_flashdata('success', '<span style="color:green">Data updated successfully</span>' );
                 redirect('issue/editissue/'.$iID);
                
             }
   
    }
    
    public function  deleteissue($iID){
              $this->issue_model->deleteissueByid($iID);
              $this->session->set_flashdata('success', '<span style="color:green">Data Deleted successfully</span>' );
                 redirect('issue/issuelist');
            
        }
            
            
    
    

}

