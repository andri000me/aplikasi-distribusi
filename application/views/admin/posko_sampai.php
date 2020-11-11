

            <div class="row mb-5 mt-3">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Posko Perlu Distribusi</h3>
                    </div>
                </div>
            </div>
       
       <div class="row">


        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Posko</th>
      <th scope="col">Bencana</th>
      <th scope="col">Jumlah Korban</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Nama Bantuan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php $id = $this->db->query("
                            SELECT * from alokasi
                            inner join posko on alokasi.id_posko=posko.id_posko
                            join bantuan on posko.id_bantuan = bantuan.id_bantuan
                       
                            where posko.status = 'bantuan sampai' AND lengkap = 'ya'
                            order by id_alokasi ASC limit 0,3
                        ")->result_array(); ?>
                        <?php $i = 1; ?>
                       <?php foreach ($id as $keys ): ?>

    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?php echo $keys["nm_posko"];?> </td>
      <td><?php echo $keys["bencana"];?> </td>
      <td><?php echo $keys["jumlah_korban"];?> </td>
      <td><?php echo $keys["kondisi"];?> </td>
      <td><?php echo $keys["nama_bantuan"];?> </td>
      <td><?php echo $keys["status"];?> </td>
    
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
  </tbody>
</table>

</div>