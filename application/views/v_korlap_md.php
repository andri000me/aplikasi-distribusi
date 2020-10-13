<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <title>Leaflet Example - asmaloney.com</title>
   
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

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/>

    <script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"
      integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
      crossorigin=""></script>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
      integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
      crossorigin=""></script>
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
    
    <div class="container">
    <div class="section_title text-center">
                        <h3>Peta Posko Bencana</h3>
                    </div>



    <div id="map" style="width: 1110px; height: 430px; border: 1px solid #AAA;"></div>
<script type='text/javascript' src='<?php echo base_url()?>mapsko/koordinat'></script>
    <script type="text/javascript">
      $(document).ready(function(){
      var map = L.map( 'map', {
  center: [-5.397643, 105.266169],
  minZoom: 2,
  zoom: 13
})

L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  subdomains: ['a', 'b', 'c']
}).addTo( map )


 $.getJSON("<?php echo base_url()?>mapsko/koordinat", function(result){
      $.each(result, function(i, data){
        var v_lat = parseFloat(result[i].latitude);
        var v_long = parseFloat(result[i].longitude);

         L.marker( [v_lat,  v_long]).addTo( map )
        
        .bindPopup( result[i].nm_posko + '</br>' + 'Status : ' + result[i].status)
        
      });
    })
})


  </script>
  </body>
</html>
     
