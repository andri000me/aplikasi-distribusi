<?php
class M_maps extends CI_Model{
 
    function mark(){        	
       $query = $this->db->query("select * from posko");
 
	$rows = array();
	foreach($query->result() as $data)
	{
    	$rows[] = $data;
	}
 
	echo json_encode($rows);
	$db = NULL;
    } 
}