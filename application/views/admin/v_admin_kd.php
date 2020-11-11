
            <div class="row mb-5 mt-3">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Posko Perlu Distribusi</h3>
                    </div>
                </div>
            </div>
       
       <div class="row">
           
<?php $id = $this->db->query("
                            SELECT * from alokasi
                            inner join posko on alokasi.id_posko=posko.id_posko
                       
                            where posko.status = 'menunggu distribusi'
                            order by id_alokasi ASC limit 0,3
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
      <a href="<?php echo base_url('page_admin/detail/')?><?php echo $keys['id_alokasi'];?>" class="btn py-2 px-3 btn-primary mt-3">Detail</a>
  </div>
</div>
</div>
<?php $i++; ?>
      <?php endforeach ?>
       </div>



            <div class="row mb-5 mt-3">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Data Posko yang tidak lengkap</h3>
                    </div>
                </div>
            </div>
       
       <div class="row">
           
<?php $id = $this->db->query("
                            SELECT * from alokasi
                            inner join posko on alokasi.id_posko=posko.id_posko
                            join bantuan on posko.id_bantuan = bantuan.id_bantuan
                       
                            where posko.status = 'bantuan sampai' AND lengkap = 'tidak'
                            order by id_alokasi ASC limit 0,3
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
                                <strong>Nama bantuan : </strong><?php echo $keys["nama_bantuan"];?> <br>
                                <strong>Keterangan : </strong><?php echo $keys["keterangan"];?> <br>
      <!-- <a href="<?php echo base_url('page_admin/detail/')?><?php echo $keys['id_alokasi'];?>" class="btn py-2 px-3 btn-primary mt-3">Detail</a> -->
  </div>
</div>
</div>
<?php $i++; ?>
      <?php endforeach ?>
       </div>