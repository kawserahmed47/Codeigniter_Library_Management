<?php

class User_Model extends CI_Model{
    
   public function checkUser($data){
       $this->db->select('*');
       $this->db->from('tbl_user');
       $this->db->where('email',$data['email']);
       $this->db->where('password',md5($data['password']));
       $qresult= $this->db->get();
       $has = $qresult->num_rows();
       if($has===1){
           $result=$qresult->row();
           return $result;
       }
       
       
       
       
       
        
}
    
}
