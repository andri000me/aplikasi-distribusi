<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class maps extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }

    public function mapadmin(){
        $data= $this->db->get('data');

		$isi['content'] = 'v_admin_md';
		$isi['judul'] = 'Titik Posko Bencana';
		$isi['subjudul'] = '';

		foreach ($data->result() as $row) 
		{
			$Status = $row->status;
		}


        $this->load->view('v_admin_md', $isi);
    }

    public function koordinat(){
    	$mark = $this->db->get('posko')->result();
    	echo json_encode($mark);
    }

	
}
		
		