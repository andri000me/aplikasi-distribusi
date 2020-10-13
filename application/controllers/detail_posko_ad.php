<?php
class detail_posko_ad extends CI_Controller{
 
    function index(){
        $this->load->view('v_detail_posko_ad');
    }

    function detail($idalo){
    	$dataalo['dataalokasi'] = $this->db->query("
                            SELECT * from alokasi
                            join posko on alokasi.id_posko=posko.id_posko and alokasi.id=posko.id
                            join bantuan on alokasi.id_bantuan=bantuan.id_bantuan
                            where alokasi.id_alokasi='$idalo'
                            ")->row_array();

    	 $this->load->view('v_detail_posko_ad',$dataalo);
    	
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

            redirect('admin_kd');

            }
}
