
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Posko Perlu Distribusi</h3>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <?php $id = $this->db->query("
                            SELECT * from alokasi
                            inner join posko on alokasi.id_posko=posko.id_posko
                            and alokasi.id=posko.id
                            where posko.status = 'menunggu distribusi'
                            order by id_alokasi ASC limit 0,3
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
                                Status : <?php echo $keys["status"];?> <br>
                                <a href="<?php echo base_url('page_admin/detail/')?><?php echo $keys['id_alokasi'];?>" class="btn py-2 px-3 btn-primary">
                                    Detail
                                </a>
                              </p>
                                
                                </div>    
                                </div>
                            </div>
                        </div>
                       <?php endforeach ?>
                    </div>
                </div>
            </div>  
       