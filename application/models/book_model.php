<?php

class Book_Model extends CI_Model{
    public function saveBook($data){
        $this->db->insert('tbl_book',$data);
        
    }
    public function getAllBookData(){
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->order_by('bid','asc');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }
    
    public function getBookByID($bid){
        $this->db->select('*');
        $this->db->from('tbl_book');
        $this->db->where('bid',$bid);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
        
    }
    
    public function updateBookData($data){
        $this->db->set('bname',$data['bname']);
        $this->db->set('bauthor',$data['bauthor']);
        $this->db->set('bdept',$data['bdept']);
        $this->db->set('bnumber',$data['bnumber']);
       
        $this->db->where('bid',$data['bid']);
        $this->db->update('tbl_book');
    }
    
    public function deletebookByid($bid){
        $this->db->where('bid',$bid);
         $this->db->delete('tbl_book');
    }
}
