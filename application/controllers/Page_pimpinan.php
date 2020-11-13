<?php
class Page_pimpinan extends CI_Controller{
    function __construct(){
        parent::__construct();

        //user bukan level 'pimpinan' ditolak
        if ($this->session->userdata('level') !== 'pimpinan')
            { redirect('auth/logout','refresh');}

        $this->load->library('pdf');
    }
    

    function index(){
    	 $this->load->view('templates/header');
        $this->load->view('templates/sidebar_pimpinan');
        $this->load->view('page_pimpinan');
        $this->load->view('templates/footer');
    }

   function laporan(){

        
        if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {

            if ($this->uri->segment('3') == 'edit_alokasi') {
                return $this->edit_alokasi($this->uri->segment('4'));
            }
     
        }

        $data['title'] = 'Dashboard';
        // $data['alokasi'] = $this->model_alokasi->get_alokasi_pimpinan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_pimpinan');
        $this->load->view('pimpinan/laporan/index');
        $this->load->view('templates/footer');
    }

    public function cari()
    {

        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');


$query = "
  SELECT * FROM distribusi
  JOIN alokasi ON distribusi.id_alokasi = alokasi.id_alokasi
  JOIN posko ON alokasi.id_posko = posko.id_posko
  JOIN bantuan ON posko.id_bantuan = bantuan.id_bantuan
  WHERE `distribusi`.`tgl_distribusi` BETWEEN '$dari' AND '$sampai' 
";

$alokasi = $this->db->query($query)->result_array();


         $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
         $pdf->SetMargins(10,30,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',22);
        // mencetak string 
        $pdf->Cell(190,13,'Laporan Data Selesai Distribusi',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(0,5,'Mulai Tanggal '.$dari. ' s.d. '.$sampai,0,1,'C');
        $pdf->Cell(0,5,'Distribusi Bantuan Logistik Tanggap Darurat Bencana

',0,1,'C');
        
      


     $pdf->Cell(10,15,'===========================================================================',0,1);



        // Field
  $pdf->SetFont('Arial','B',8);
        $pdf->Cell(10,8,'No. ',1,0, 'C');
         $pdf->Cell(36,8,'Nama Alokasi',1,0, 'C');
         $pdf->Cell(36,8,'Nama Distribusi',1,0, 'C');
        $pdf->Cell(25,8,'Sarana',1,0, 'C');
        $pdf->Cell(20,8,'Tgl Distribusi',1,0, 'C');
        $pdf->Cell(20,8,'Tgl Diterima',1,0, 'C');
        $pdf->Cell(37,8,'Bantuan',1,1, 'C');
          $pdf->SetFont('Arial','',7);
$i=1;
foreach ($alokasi as $key) {
    $pdf->Cell(10,8,$i,1,0, 'C');
    $pdf->Cell(36,8,$key['nm_alokasi'],1,0, 'B');
    $pdf->Cell(36,8,$key['nm_distribusi'],1,0, 'B');
    $pdf->Cell(25,8,$key['sarana'],1,0, 'C');
    $pdf->Cell(20,8,$key['tgl_distribusi'],1,0, 'C');
    $pdf->Cell(20,8,$key['tgl_diterima'],1,0, 'C');
    $pdf->Cell(37,8,$key['nama_bantuan'],1,1, 'C');
$i++;
}
 


        








       
        $pdf->Output();
        $pdf->Output();

    }

}
