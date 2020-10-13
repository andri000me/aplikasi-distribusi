<?php
class M_grafikad extends CI_Model{
 
    function report($user){        	
        
    }

     function data($user){            
        $query = $this->db->query("SELECT * FROM distribusi ");
            
         
        if($query->num_rows() > 0){
            foreach($query->result() as $hasil){
                $data[] = $hasil;
            }
            return $data;
        }
    }
 
}