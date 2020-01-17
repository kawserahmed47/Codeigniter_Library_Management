<?php

class Issue_Model extends CI_Model{
    public function saveIssue($data){
        $this->db->insert('tbl_issue',$data);
        
    }
    public function getAllIssueData(){
        $this->db->select('*');
        $this->db->from('tbl_issue');
        $this->db->order_by('iID','asc');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }
    
    public function getIssueByID($iID){
        $this->db->select('*');
        $this->db->from('tbl_issue');
        $this->db->where('iID',$iID);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
        
    }
    
    public function updateIssueData($data){
        $this->db->set('iStudentID',$data['iStudentID']);
        $this->db->set('iBookName',$data['iBookName']);
        $this->db->set('iDateOfIssue',$data['iDateOfIssue']);
        $this->db->set('iDateOfReturn',$data['iDateOfReturn']);
       
        $this->db->where('iID',$data['iID']);
        $this->db->update('tbl_issue');
    }
    
    public function deleteissueByid($iID){
        $this->db->where('iID',$iID);
         $this->db->delete('tbl_issue');
    }
}
