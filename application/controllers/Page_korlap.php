<?php
class Page_korlap extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'korlap' ditolak
        if ($this->session->userdata('level') !== 'korlap')
            { redirect('auth/logout','refresh');}
    }
 
    function index(){
        $this->load->view('page_korlap');
    }
}
