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
                <li class="nav-item active"><a href="<?php echo base_url()?>page_admin" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>admin_kd" class="nav-link">Kelola Distribusi</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>admin_md" class="nav-link">Monitoring Distribusi</a></li>
                <li class="nav-item"><a href="<?php echo base_url()?>grafikad" class="nav-link">Data Distribusi</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
    
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
          			<div class="card-body">
						<h3 class="card-title text-center">Welcome to your page!</h3>
						<ul>
							<li>Name : <?php echo $this->session->userdata('name') ?></li>
							<li>Username : <?php echo $this->session->userdata('username') ?></li>
							<li>Level : <?php echo $this->session->userdata('level') ?></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

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