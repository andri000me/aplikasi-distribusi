<!DOCTYPE html>
<html>
<head>
    <title>Grafik Pendistribusian</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<style type="text/css">
    #container {
    height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
</head>
<body>
<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>
<?php

$jlh = $this->db->query("SELECT COUNT(tgl_distribusi) as jlh
FROM distribusi
GROUP by month(tgl_distribusi)")->result();

$tgl = $this->db->query("SELECT  month(tgl_distribusi) as tgl
FROM distribusi
GROUP by month(tgl_distribusi)")->result(); 





        foreach($jlh as $jlh){
        $j[] = (int)$jlh->jlh;
        }

        foreach($tgl as $tgl){
      
        $t[] = $tgl->tgl;
        }

      $x = json_encode($j);
      $y = json_encode($t);
// var_dump($x);die();

      ?>
    
<script type="text/javascript">
    Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Jumlah Distribusi Perbulan'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: 
          
                <?php echo $y; ?>

                
           
        ,
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' Bantuan'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Distribusi',
        data: 
        

         <?php echo $x; ?>

        
        
    

        
    }]
});
</script>


</body>
</html>




