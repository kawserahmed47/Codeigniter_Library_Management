<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       $this->load->model('author_model');
        $data=array();
    }
    public function addauthor(){
          
              $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['authoradd']=$this->load->view('layouts/authoradd','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('addauthor',$data);
        }
        
        public function addAuthorForm(){
        
        $data['autname']=$this->input->post('autname');
         
             
             $autname=$data['autname'];
           
             
            
                    
             if(empty($autname)  ){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('author/addauthor');
                 
             }
             
             else{
                 $this->author_model->saveAuthor($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                  redirect('author/addauthor');
                 
             }     
    }
    
    
     public function authorlist(){
        
      
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['authordata']=$this->author_model->getAllAuthorData();
            $data['authorlist']=$this->load->view('layouts/authorlist',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('listauthor',$data);        
            }
            
            
             public function  deleteauthor($aid){
              $this->author_model->deleteauthorByid($aid);
              $this->session->set_flashdata('success', '<span style="color:green">Data Deleted successfully</span>' );
                 redirect('author/authorlist');
            
        }
        
       public function editauthor($aid){
               $data=array();
           
            $data['title']='Edit Author';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['authorByID']=$this->author_model->getAuthorByID($aid);
            $data['authoredit']=$this->load->view('layouts/authoredit',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('editauthor',$data);        
            }
            
          public function updateAuthorForm(){
              
              $data['aid']=$this->input->post('aid');
               $data['autname']=$this->input->post('autname');
         
             
             $aid=$data['aid'];
             $autname=$data['autname'];
             
            
                    
             if(empty($autname)){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('author/editauthor/'.$aid);
                 
             }
             
             else{
                 $this->author_model->updateAuthor($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('author/editauthor/'.$aid);
                 
             }  
              
          }
            
            
        
      
        
    
    
    
    
}