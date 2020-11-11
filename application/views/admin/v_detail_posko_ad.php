
            <div class="row mb-5 mt-3">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Distribusikan Bantuan</h3>
                    </div>
                </div>
            </div>

<form class="form-horizontal form-material" action="<?= base_url('page_admin/edit_detail'); ?>" method="post">
            <div class="row">

              <div class="col-md-12">
                               
                                  </div>
                                    <div class="col-md-12">
                                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Alokasi</label>
                                            <input readonly type="text" name="nm_alokasi" class="form-control form-control-line" value="<?php echo $dataalokasi['nm_alokasi']; ?>">
                                            <input type="hidden" name="id_alokasi" value="<?php echo $dataalokasi['id_alokasi']; ?>" class="form-control form-control-line">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Bencana</label>
                                            <input readonly type="text" name="bencana" class="form-control form-control-line" value="<?php echo $dataalokasi['bencana']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Posko</label>
                                            <input readonly type="text" name="nm_posko" class="form-control form-control-line" value="<?php echo $dataalokasi['nm_posko']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Kondisi</label>
                                            <input readonly type="text" name="kondisi" class="form-control form-control-line" value="<?php echo $dataalokasi['kondisi']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Alamat Posko</label>
                                            <input readonly type="text" name="alamat_posko" class="form-control form-control-line" value="<?php echo $dataalokasi['alamat_posko']; ?>">
                                        </div>                    
                                    </div>


                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Korban</label>
                                            <input readonly type="text" name="jumlah_korban" class="form-control form-control-line" value="<?php echo $dataalokasi['jumlah_korban']; ?>">
                                        </div>
                                        
                                    </div>



                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Latitude</label>
                                            <input readonly type="text" name="latitude" class="form-control form-control-line" value="<?php echo $dataalokasi['latitude']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Longitude</label>
                                            <input readonly type="text" name="longitude" class="form-control form-control-line" value="<?php echo $dataalokasi['longitude']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jenis Bantuan</label>
                                            <input readonly type="text" name="nama_bantuan" class="form-control form-control-line" value="<?php echo $dataalokasi['jenis_bantuan']; ?>">
                                        </div>
                                        
                                    </div>
                                    <input readonly type="hidden" name="id" value="<?php echo $dataalokasi['id']; ?>">
                                    <input readonly type="hidden" name="id_alokasi" value="<?php echo $dataalokasi['id_alokasi']; ?>">
                                    <input readonly type="hidden" name="id_posko" value="<?php echo $dataalokasi['id_posko']; ?>">
                            

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Bantuan</label>
                                            <input readonly type="text" name="jumlah_bantuan" class="form-control form-control-line" value="<?php echo $dataalokasi['jumlah_bantuan']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Distribusi</label>
                                            <input type="text" name="nm_distribusi" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Sarana</label>
                                            <input type="text" name="sarana" class="form-control form-control-line" value="">
                                        </div>
                                        
                                    </div>

                          
                              

                            


                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Distribusikan Bantuan</button>
                                        </div>
                                    </div>
                                     <a href="<?php echo base_url('page_admin/admin_kd'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
        </form>
