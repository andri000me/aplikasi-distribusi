<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS from Online-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- Bootstrap CSS from Assets Folder-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <title>Consolution - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="<?php echo base_url()?>https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url()?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url()?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()?>css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url()?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
  </head>
  <body>
      <div class="bg-top navbar-light">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="index.html">Distribusi Bantuan Logistik Tanggap Darurat Bencana</a>
                </div>
                        <div class="col-md topper d-flex align-items-center justify-content-end">
                            <p class="mb-0 d-block">
                                <a href="<?php echo base_url()?>auth/logout" class="btn py-2 px-3 btn-primary">
                                    <span>Logout</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="<?php echo base_url()?>page_korlap" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>korlap_kd" class="nav-link">Kelola Distribusi</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>korlap_md" class="nav-link">Monitoring Distribusi</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

 <<!-- popular_program_area_start  -->
    <div class="posko_area section__padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Update Status Bantuan</h3>
                    </div>
                </div>
            </div>

<form class="form-horizontal form-material" action="<?= base_url('detail_posko_kd/edit_detailkd'); ?>" method="post">
            <div class="row">

              <div class="col-md-12">
                                <a href="<?php echo base_url('korlap_kd'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
                                  </div>
                                    <div class="col-md-12">
                                        <div class="card">
                            <div class="card-body">
                                 <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Distribusi</label>
                                            <input readonly type="text" name="nm_distribusi" class="form-control form-control-line" value="<?php echo $data['nm_distribusi']; ?>">
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="form-control form-control-line">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Bencana</label>
                                            <input readonly type="text" name="bencana" class="form-control form-control-line" value="<?php echo $data['bencana']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Posko</label>
                                            <input readonly type="text" name="nm_posko" class="form-control form-control-line" value="<?php echo $data['nm_posko']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Kondisi</label>
                                            <input readonly type="text" name="kondisi" class="form-control form-control-line" value="<?php echo $data['kondisi']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Alamat Posko</label>
                                            <input readonly type="text" name="alamat_posko" class="form-control form-control-line" value="<?php echo $data['alamat_posko']; ?>">
                                        </div>                    
                                    </div>


                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Korban</label>
                                            <input readonly type="text" name="jumlah_korban" class="form-control form-control-line" value="<?php echo $data['jumlah_korban']; ?>">
                                        </div>
                                        
                                    </div>



                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Latitude</label>
                                            <input readonly type="text" name="latitude" class="form-control form-control-line" value="<?php echo $data['latitude']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Longitude</label>
                                            <input readonly type="text" name="longitude" class="form-control form-control-line" value="<?php echo $data['longitude']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jenis Bantuan</label>
                                            <input readonly type="text" name="jenis_bantuan" class="form-control form-control-line" value="<?php echo $data['jenis_bantuan']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jumlah Bantuan</label>
                                            <input readonly type="text" name="jumlah_bantuan" class="form-control form-control-line" value="<?php echo $data['jumlah_bantuan']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Sarana</label>
                                            <input readonly type="text" name="sarana" class="form-control form-control-line" value="<?php echo $data['sarana']; ?>">
                                        </div>
                                        
                                    </div>

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Tanggal Distribusi</label>
                                            <input readonly type="date" name="tgl_distribusi" class="form-control form-control-line" value="<?php echo $data['tgl_distribusi']; ?>">
                                        </div>
                                        
                                    </div>


                                     <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Status</label>
                                     <select class="form-control" name="status_distribusi" value=" <?set_value('status_distribusi'); ?>">
                                        <option value="-" >--Pilih Status--</option>
                                        <option value="<?php echo $data['status_distribusi']; ?>" selected ><?php echo $data['status_distribusi']; ?></option>
                                        <option value="menunggu distribusi" >Menunggu distribusi</option>
                                        <option value="sedang dikirim">Sedang dikirim</option>
                                        <option value="sudah sampai">Sudah sampai</option>
                                    </select>
                                    </div>
                                </div>
                              

                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Tanggal Diterima</label>
                                            <input type="date" name="tgl_diterima" class="form-control form-control-line" value="<?php echo $data['tgl_diterima']; ?>">
                                        </div>
                                        
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Distribusikan Bantuan</button>
                                        </div>
                                    </div>
        </form>
                        

  <script src="<?php echo base_url()?>js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()?>js/popper.min.js"></script>
  <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()?>js/aos.js"></script>
  <script src="<?php echo base_url()?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url()?>js/scrollax.min.js"></script>
  <script src="<?php echo base_url()?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url()?>js/google-map.js"></script>
  <script src="<?php echo base_url()?>js/main.js"></script>
    
  </body>
</html>