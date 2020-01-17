<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
       $this->load->model('book_model');
        $data=array();
    }
    
      public function addbook(){
          if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
          
              $data=array();
            $data['title']='Add Book';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['bookadd']=$this->load->view('layouts/bookadd','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('addbook',$data);
        }
        
          public function addBookForm(){
        
        $data['bname']=$this->input->post('bname');
         $data['bauthor']=$this->input->post('bauthor');
          $data['bdept']=$this->input->post('bdept');
           $data['bnumber']=$this->input->post('bnumber');
           
             
             $bname=$data['bname'];
             $bauthor=$data['bauthor'];
             $bdept=$data['bdept'];
             $bnumber=$data['bnumber'];
            
             
             
                    
             if(empty($bname) && empty($bauthor) && empty($bdept) && empty($bnumber) ){
                
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                 redirect('book/addbook');
                 
             }
             
             else{
                 $this->book_model->saveBook($data);           
                
                  $this->session->set_flashdata('success', '<span style="color:green">Data inserted successfully</span>' );
                 redirect('book/addbook');
                 
             }
        
        
             
        
        
    }
    
    public function booklist(){
        
            $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['bookdata']=$this->book_model->getAllBookData();
            $data['booklist']=$this->load->view('layouts/booklist',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('listbook',$data);        
            }
            
            
             public function editbook($bid){
                 if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
                 
            $data=array();
            
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['bookByID']=$this->book_model->getBookByID($bid);
            $data['bookedit']=$this->load->view('layouts/bookedit',$data,TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('editbook',$data);   
                 
            }
            
             public function updateBookForm(){
                 $data['bid']=$this->input->post('bid');
                 $data['bname']=$this->input->post('bname');
         $data['bauthor']=$this->input->post('bauthor');
          $data['bdept']=$this->input->post('bdept');
           $data['bnumber']=$this->input->post('bnumber');
           
              $bid=$data['bid'];
             $bname=$data['bname'];
             $bauthor=$data['bauthor'];
             $bdept=$data['bdept'];
             $bnumber=$data['bnumber'];
             
              
                    
             if(empty($bid) && empty($bname) && empty($bauthor) && empty($bdept) && empty($bnumber)  ){
               
                 $this->session->set_flashdata('error', '<span style="color:red">Invalild! Please insert all data</span>' );
                redirect('book/editbook/'.$bid);
               
             }
             
             else{
                 $this->book_model->updateBookData($data);           
               
                  $this->session->set_flashdata('success', '<span style="color:green">Data updated successfully</span>' );
                 redirect('book/editbook/'.$bid);
                
             }
   
    }
    
    public function  deletebook($bid){
        if(!$this->session->userdata('userlogin')){
            redirect('user/login');
        }
              $this->book_model->deletebookByid($bid);
              $this->session->set_flashdata('success', '<span style="color:green">Data Deleted successfully</span>' );
                 redirect('book/booklist');
            
        }
            
            
    
    

}

