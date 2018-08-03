<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER') {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Sub Program</th>
						<th>Nama Lokasi</th>
						<th>Alamat Lokasi</th>
						<th>Koordinat Lokasi</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1; 
		 				foreach ($dataReportByStatusWode as $row) {
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['SUPR_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['WODE_ALAMAT']."</td>";
		 					echo "<td>".$row['WODE_KOORDINAT']."</td>";
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "</tr>";
		 					$no++;
		 				}
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->
<script type="text/javascript">
    $(function () {
        $('#LAPORAN').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>
<?php
      }
      if ($_SESSION['level'] != 'SUPER USER') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>