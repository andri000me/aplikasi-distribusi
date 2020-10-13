<?php
class M_mapsko extends CI_Model{
 
    function mark(){        	
       $query = $this->db->query("select * from posko");
 
	$rows = array();
	foreach($query->result() as $datako)
	{
    	$rows[] = $datako;
	}
 
	echo json_encode($rows);
	$db = NULL;
    } 
}