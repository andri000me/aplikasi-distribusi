
    <div id="map" style="width: 1110px; height: 430px; border: 1px solid #AAA;"></div>
<script type='text/javascript' src='<?php echo base_url()?>maps/koordinat'></script>
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


 $.getJSON("<?php echo base_url()?>index.php/maps/koordinat", function(result){
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