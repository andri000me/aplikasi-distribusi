
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
                                <form action="<?php echo base_url('page_korlap/detailkd/')?><?php echo $keys['id_dis'];?>/<?php echo $keys['id_posko'];?>" method="post">
                                     <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" name="lengkap" id="lengkap" onclick="enable_text(this.checked)">
                                      <label class="form-check-label" for="inlineCheckbox1"><small>Checklis bila bantuan lengkap</small></label>
                                    </div>

                                  <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Tulis Keterangan">
  </div>

      <button type="submit" class="btn py-2 px-3 btn-primary mt-3">Simpan</button>
                                </form>
  </div>
</div>
</div>
<?php $i++; ?>
      <?php endforeach ?>
    </div>

 <div class="row mb-5 mt-3">
                <div class="col-12">
                    <div class="section_title text-center">
                        <h3>Data Posko</h3>
                    </div>
                </div>



            </div>

            <div class="row">
              <div class="col">
                
                <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Posko</th>
      <th scope="col">Bencana</th>
      <th scope="col">Jumlah Korban</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Alamat Posko</th>
      <th scope="col">Status</th>
      <th scope="col">Bantuan</th>
    </tr>
  </thead>
  <tbody>
    <?php
                        $iduser = $this->session->userdata('id');
                        // var_dump($iduser);die();
$posko = $this->db->query("
                             SELECT * from posko
                           join bantuan on posko.id_bantuan = bantuan.id_bantuan
                        
                           where  posko.id='$iduser'
                 
                        ")->result(); ?>
  <?php $i = 1; ?>
    <?php foreach ($posko as $key): ?>
      
    <tr>
      <td scope="row"><?= $i; ?></td>
      <td><?= $key->nm_posko; ?></td>
      <td><?= $key->bencana; ?></td>
      <td><?= $key->jumlah_korban; ?></td>
      <td><?= $key->kondisi; ?></td>
      <td><?= $key->alamat_posko; ?></td>
      <td><?= $key->status; ?></td>
      <td><?= $key->nama_bantuan; ?></td>
     <?php $i++; ?>
    <?php endforeach ?>
    </tr>

  </tbody>
</table>
              </div>
            </div>



<script language="JavaScript">
<!--

function enable_text(status)
{


if(document.getElementById('lengkap').checked){
    status=!status;    
   document.getElementById('keterangan').disabled = true;
    }else{
    status=!status;    
   document.getElementById('keterangan').disabled = false;
   }



}
//-->
</script>