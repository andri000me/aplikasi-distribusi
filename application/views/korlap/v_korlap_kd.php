<!-- 
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Data Posko Distribusi</h3>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <?php 
                        $id = $this->db->query("
                           SELECT * from distribusi
                           join alokasi on distribusi.id_alokasi = alokasi.id_alokasi
                           join posko on alokasi.id_posko=posko.id_posko
                           where status = 'bantuan dikirim' and posko.id='$iduser'
                            order by alokasi.id_alokasi ASC limit 0,3
                        ")->result_array(); ?>
                       <?php foreach ($id as $keys ): ?>
                           
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                
                                <div class="card card-signin my-5">
                                <div class="posko">
                                    <h4><?php echo $keys["nm_alokasi"];?></h4>

                                    <p>Posko : <?php echo $keys["nm_posko"];?> <br>
                                      Bencana : <?php echo $keys["bencana"];?> <br>
                                Jumlah Korban : <?php echo $keys["jumlah_korban"];?> <br>
                                Kondisi Kerusakan : <?php echo $keys["kondisi"];?> <br>
                                Status Distribusi : <?php echo $keys["status"];?> <br>
                                <a href="<?php echo base_url('page_korlap/detailkd/')?><?php echo $keys['id_dis'];?>/<?php echo $keys['id_posko'];?>" class="btn py-2 px-3 btn-primary">
                                    Terima
                                </a>
                              </p>
                                
                                </div>    
                                </div>
                            </div>
                        </div>
                       <?php endforeach ?>
                    </div>
                </div>
            </div>   -->


            <div class="row mb-5 mt-3">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Posko Perlu Distribusi</h3>
                    </div>
                </div>
            </div>
       
       <div class="row">
           
<?php
                        $iduser = $this->session->userdata('id');
                        // var_dump($iduser);die();
$id = $this->db->query("
                             SELECT * from distribusi
                           join alokasi on distribusi.id_alokasi = alokasi.id_alokasi
                           join posko on alokasi.id_posko=posko.id_posko
                           where status = 'bantuan dikirim' and posko.id='$iduser'
                            order by alokasi.id_alokasi ASC limit 0,3
                        ")->result_array(); ?>
                        <?php $i = 1; ?>
                       <?php foreach ($id as $keys ): ?>
                        <div class="col-lg-4 col-md-6">
       <div class="card <?php 
            if($i % 2 == 0){
                echo 'text-white bg-dark';
            }else{
                echo 'text-dark bg-white';
            }
        ?>

       ">
  <div class="card-header">
    <strong><?= $i; ?></strong>
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong><?php echo ucfirst($keys["nm_alokasi"]);?></strong></h5>
                    <p>         <strong>Posko : </strong><?php echo $keys["nm_posko"];?> <br>
                                <strong>Bencana : </strong><?php echo $keys["bencana"];?> <br>
                                <strong>Jumlah Korban : </strong><?php echo $keys["jumlah_korban"];?> <br>
                                <strong>Kondisi Kerusakan : </strong><?php echo $keys["kondisi"];?> <br>
                                <strong>Status : </strong><?php echo $keys["status"];?> <br>
      <a  href="<?php echo base_url('page_korlap/detailkd/')?><?php echo $keys['id_dis'];?>/<?php echo $keys['id_posko'];?>" class="btn py-2 px-3 btn-primary mt-3">Simpan</a>
  </div>
</div>
</div>
<?php $i++; ?>
      <?php endforeach ?>
       </div>