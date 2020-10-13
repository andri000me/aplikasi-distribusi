<?php
class detail_posko_kd extends CI_Controller{
 
    function index(){
       $datakd['data'] = $this->db->get_where('distribusi', ['id' => $id])->row_array();
       
        $this->load->view('v_detail_posko_kd',$datakd);
    }

    function detailkd($id, $posko){
    	 $this->db->get_where('distribusi', ['id_dis' => $id])->row_array();

    	 // $this->load->view('v_detail_posko_kd',$datakd);
    	
              $data1 = [
                "tgl_diterima" => date('Y-m-d')
            ];

            $this->db->where('id_dis', $id);
            $this->db->update('distribusi', $data1);

             $data2 = [
                "status" => "bantuan sampai"
            ];

            $this->db->where('id_posko', $posko);
            $this->db->update('posko', $data2);

            redirect('korlap_kd');


    }

    public function edit_detailkd(){
    	    	$datakd=[
    		"nm_distribusi" => $this->input->post('nm_distribusi'),
    		"bencana" => $this->input->post('bencana'),
    		"nm_posko" => $this->input->post('nm_posko'),
    		"kondisi" => $this->input->post('kondisi'),
    		"alamat_posko" => $this->input->post('alamat_posko'),
    		"latitude" => $this->input->post('latitude'),
    		"longitude" => $this->input->post('longitude'),
    		"jumlah_korban" => $this->input->post('jumlah_korban'),
    		"jenis_bantuan" => $this->input->post('jenis_bantuan'),
    		"jumlah_bantuan" => $this->input->post('jumlah_bantuan'),
    		"sarana" => $this->input->post('sarana'),
    		"tgl_distribusi" => $this->input->post('tgl_distribusi'),
    		"status_distribusi" => $this->input->post('status_distribusi'),
    		"tgl_diterima" => $this->input->post('tgl_diterima'),
    	];

    	$this->db->where('id',  $this->input->post('id'));
    	$this->db->update('distribusi', $datakd);
    	$this->load->view('v_admin_kd',$datakd);
    }





}
