<?php

class Author_Model extends CI_Model{
    
     public function saveAuthor($data){
        $this->db->insert('tbl_author',$data);
     }
     
       public function getAllAuthorData(){
        $this->db->select('*');
        $this->db->from('tbl_author');
        $this->db->order_by('aid','asc');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }
     public function deleteauthorByid($aid){
        $this->db->where('aid',$aid);
         $this->db->delete('tbl_author');
    }
    
    public function getAuthorByID($aid){
        $this->db->select('*');
         $this->db->from('tbl_author');
          $this->db->where('aid',$aid);
          $qresult = $this->db->get();
          $result = $qresult->row();
          return $result;
    }

    

    public function updateAuthor($data){
         $this->db->set('autname',$data['autname']);
          $this->db->where('aid',$data['aid']);
           $this->db->update('tbl_author');
        
    }

}