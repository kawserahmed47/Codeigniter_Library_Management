<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->home1();
	}
        public function home1(){
              $data=array();
            $data['title']='Library Management System';
            $data['header']=$this->load->view('layouts/header','',TRUE);
            $data['sidebar']=$this->load->view('layouts/sidebar','',TRUE);
            $data['content']=$this->load->view('layouts/content','',TRUE);
            $data['footer']=$this->load->view('layouts/footer','',TRUE);
            $this->load->view('home',$data);
        }
}
