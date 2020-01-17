<?php

class Department_Model extends CI_Model{
    
     public function saveDepartment($data){
        $this->db->insert('tbl_department',$data);
     }
     
       public function getAllDepartmentData(){
        $this->db->select('*');
        $this->db->from('tbl_department');
        $this->db->order_by('depid','asc');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }
     public function deletedepartmentByid($depid){
        $this->db->where('depid',$depid);
         $this->db->delete('tbl_department');
    }
    
    public function getDepartmentByID($depid){
        $this->db->select('*');
         $this->db->from('tbl_department');
          $this->db->where('depid',$depid);
          $qresult = $this->db->get();
          $result = $qresult->row();
          return $result;
    }

    

    public function updateDepartment($data){
         $this->db->set('depname',$data['depname']);
          $this->db->where('depid',$data['depid']);
           $this->db->update('tbl_department');
        
    }

}