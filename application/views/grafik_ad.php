<script type="text/javascript">
	jQuery(function($) {
	//initiate dataTables plugin
	var myTable = 
	$('#dynamic-table')
	//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
	.DataTable( {
		bAutoWidth: false,
		"aoColumns": [
			null, null, null, null
			{ "bSortable": false }
		],
		"aaSorting": [],
		select: {
			style: 'multi'
		}
	} );
})

</script>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr align="center">
			<th>No</th>
            <th>ID</th>
			<th>Nama Distribusi</th>
			<th>Bencana</th>
            <th>Nama Posko</th>
			<th>Kondisi</th>
            <th>Alamat</th>
            <th>Jumlah Korban</th>
            <th>Jenis Bantuan</th>
            <th>Jumlah Bantuan</th>
            <th>Sarana</th>
            <th>Status</th>
            <th>Tanggal Diterima</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($data as $row) {
		 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->nm_distribusi; ?></td>
            <td><?php echo $row->bencana; ?></td>
			<td><?php echo $row->nm_posko; ?></td>
            <td><?php echo $row->kondisi; ?></td>
            <td><?php echo $row->alamat_posko; ?></td>
            <td><?php echo $row->jumlah_korban; ?></td>
            <td><?php echo $row->jenis_bantuan; ?></td>
            <td><?php echo $row->jumlah_bantuan; ?></td>
            <td><?php echo $row->sarana; ?></td>
            <td><?php echo $row->status; ?></td>
            <td><?php echo $row->tgl_diterima; ?></td>
		</tr>
		<?php } ?>

	</tbody>
</table>
<br/><br/>

<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->
 
<?php 
    /* Mengambil query report*/
    foreach($report as $result){
        $value[] = (float) $result->berat; //ambil nilai
    }

    $bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus',
    				'September', 'Oktober', 'November', 'Desember' );
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">

$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 55,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 35,
                depth: 70
            }
        },
        title: {
            text: 'Laporan Distribusi Bantuan Pangan', 
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah',
            },
        },
        tooltip: {
             formatter: function() {
                 return Highcharts.numberFormat(this.y) + '</b> '+ this.series.name;
             }
          },
        series: [{
            name: 'Kg',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     ;
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]

    });
});
</script>



