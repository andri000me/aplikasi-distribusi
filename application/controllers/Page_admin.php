<?php
class Page_admin extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'admin' ditolak
        if ($this->session->userdata('level') !== 'admin')
            { redirect('auth/logout','refresh');}
    }
 
    function index(){
        $this->load->view('page_admin');
    }
}
