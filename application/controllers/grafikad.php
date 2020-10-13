<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
    }

	public function index()
	{
		$user = $this->session->userdata('username');
		$isi['report'] = $this->m_grafik->report($user);

		$isi['content'] = 'grafik_ad';
		$isi['judul'] = 'DATA DISTRIBUSI LOGISTIK';
		$isi['subjudul'] = '';
		

		$this->load->view('grafik_ad',$isi);
	}
}

