<?php
class Page_admin extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'admin' ditolak
        if ($this->session->userdata('level') !== 'admin')
            { redirect('auth/logout','refresh');}
    }
 
    function index(){
    	 $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('page_admin');
        $this->load->view('templates/footer');
    }

    public function admin_kd(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/v_admin_kd');
        $this->load->view('templates/footer');
    }

     public  function admin_md(){
             $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/v_admin_md');
    }


    //     function index(){
    //     $this->load->view('v_detail_posko_ad');
    // }

    function detail($idalo){
    	$dataalo['dataalokasi'] = $this->db->query("
                            SELECT * from alokasi
                            join posko on alokasi.id_posko=posko.id_posko
                            join bantuan on alokasi.id_bantuan=bantuan.id_bantuan
                            where alokasi.id_alokasi='$idalo'
                            ")->row_array();
    	  $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
    	 $this->load->view('v_detail_posko_ad',$dataalo);
        $this->load->view('templates/footer');
    	
    }

    public function edit_detail(){

            $data = [
                "nm_distribusi" => $this->input->post('nm_distribusi'),
                "id" => $this->input->post('id'),
                "id_alokasi" => $this->input->post('id_alokasi'),
                "sarana" => $this->input->post('sarana'),
                "tgl_distribusi" => date('Y-m-d'),
                "tgl_diterima" => '-',
            ];


            // var_dump($this->input->post('id_posko'));die();
            $this->db->insert('distribusi', $data);


            $data2 = [
                "status" => "bantuan dikirim"
            ];

            $this->db->where('id_posko', $this->input->post('id_posko'));
            $this->db->update('posko', $data2);

            redirect('page_admin/admin_kd');

            }


            public function grafikad(){
            	       $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
            	$this->load->view('admin/grafik_ad');
        $this->load->view('templates/footer');
            }

}
