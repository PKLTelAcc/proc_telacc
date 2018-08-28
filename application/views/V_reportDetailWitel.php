<!-- Report Wode -->
<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN WORK ORDER' || $_SESSION['level'] == 'ADMIN INSTALASI' || $_SESSION['level'] == 'ADMIN BAST' || $_SESSION['level'] == 'ADMIN SURVEY' ) {
        ?>
	  <div class="col-md-12">
	  		 <?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN WORK ORDER'){
	      	?>
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Work Order</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_Wode">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>sub Program</th>
						<th>Nama Lokasi</th>
						<th>Alamat Lokasi</th>
						<th>Koordinat Lokasi</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelWode as $row) {
		 				if($row['STAT_NAME']=='WORK ORDER'){
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

		 				}
		 					$no++;
		 				}
		 				}
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN WORK ORDER') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->



<!-- Report Surv -->
<!-- Main content -->
	  	<?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN SURVEY'){
	      	?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Survey</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_Surv">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Lokasi</th>
						<th>Nilai ODP</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelSurv as $row) {
		 				if($row['STAT_NAME']=='SURVEY'){
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['SURV_ODP']."</td>";
		 					echo "<td>".$row['SURV_MATERIAL']."</td>";
		 					echo "<td>".$row['SURV_JASA']."</td>";
		 					echo "<td>".$row['SURV_TOTAL']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "</tr>";
		 				}
		 					$no++;
		 				}
		 				 }if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN SURVEY') {
       					 echo '<div class="col-md-12">';
     					 }else{
       					 echo '<div class="col-md-6">';
      }
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->

<!-- Report Inst -->
<!-- Main content -->
	  <div class="col-md-12">
	  		<?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN INSTALASI'){
	      	?>
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Instalasi</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_Inst">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Lokasi</th>
						<th>Nilai ODP</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Mitra</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Status</th>
						<th>Status Instalasi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelInst as $row) {
		 				if($row['STAT_NAME']=='INSTALASI'){
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['INST_ODP']."</td>";
		 					echo "<td>".$row['INST_MATERIAL']."</td>";
		 					echo "<td>".$row['INST_JASA']."</td>";
		 					echo "<td>".$row['INST_TOTAL']."</td>";
		 					echo "<td>".$row['MTRA_NAME']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "<td>".$row['STIN_NAME']."</td>";
		 					echo "</tr>";
		 				}
		 					$no++;
		 				}
		 			}if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN INSTALASI') {
       					 echo '<div class="col-md-12">';
     					 }else{
       					 echo '<div class="col-md-6">';
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

<!-- Report Bast -->
<!-- Main content -->
	  <div class="col-md-12">
		<?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN BAST'){
	      	?>
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Bast</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_Bast">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>No BAST</th>
						<th>No Po</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
						<th>Tanggal Bast</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($dataReportByWitelBast as $row) {
						if($row['STAT_NAME']=='BAST'){
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";;
							echo "<td>".$row['BAST_NO']."</td>";
							echo "<td>".$row['SPTL_NO_PO']."</td>";
							echo "<td>".$row['INST_MATERIAL']."</td>";
							echo "<td>".$row['INST_JASA']."</td>";
							echo "<td>".$row['INST_TOTAL']."</td>";
							echo "<td>".$row['INST_ODP']."</td>";
							echo "<td>".$row['BAST_TANGGAL']."</td>";
							echo "<td><a href='".base_url()."C_bast/formUpdate/".$row['BAST_ID']."'>Edit</a> | <a href='".base_url()."C_bast/delete/".$row['BAST_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
							echo "</tr>";
						}
							$no++;
						}
					}if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN BAST') {
       					 echo '<div class="col-md-12">';
     					 }else{
       					 echo '<div class="col-md-6">';
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

<!-- Report Drop Work Order-->
<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Drop Work Order</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_DropWo">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>sub Program</th>
						<th>Nama Lokasi</th>
						<th>Alamat Lokasi</th>
						<th>Koordinat Lokasi</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelWode as $row) {
		 				if($row['STAT_NAME']=='DROP'){
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
		 				}
		 					$no++;
		 				}
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->

	  <!-- Report Drop Survey -->
<!-- Main content -->
	  	<?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN SURVEY'){
	      	?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Drop Survey</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_DropSurv">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Lokasi</th>
						<th>Nilai ODP</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelSurv as $row) {
		 				if($row['STAT_NAME']=='DROP'){
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['SURV_ODP']."</td>";
		 					echo "<td>".$row['SURV_MATERIAL']."</td>";
		 					echo "<td>".$row['SURV_JASA']."</td>";
		 					echo "<td>".$row['SURV_TOTAL']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "</tr>";
		 				}
		 					$no++;
		 				}
		 				 }if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN SURVEY') {
       					 echo '<div class="col-md-12">';
     					 }else{
       					 echo '<div class="col-md-6">';
      }
		 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->

<!-- Report Drop Instalasi -->
<!-- Main content -->
	  <div class="col-md-12">
	  		<?php
	      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN INSTALASI'){
	      	?>
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Drop Instalasi</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_DropInst">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>Lokasi</th>
						<th>Nilai ODP</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Mitra</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Status</th>
						<th>Status Instalasi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelInst as $row) {
		 				if($row['STAT_NAME']=='DROP'){
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['INST_ODP']."</td>";
		 					echo "<td>".$row['INST_MATERIAL']."</td>";
		 					echo "<td>".$row['INST_JASA']."</td>";
		 					echo "<td>".$row['INST_TOTAL']."</td>";
		 					echo "<td>".$row['MTRA_NAME']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "<td>".$row['STIN_NAME']."</td>";
		 					echo "</tr>";
		 				}
		 					$no++;
		 				}
		 			}if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN INSTALASI') {
       					 echo '<div class="col-md-12">';
     					 }else{
       					 echo '<div class="col-md-6">';
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
        $('#LAPORAN_Wode').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>

<script type="text/javascript">
    $(function () {
        $('#LAPORAN_DropWo').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
        $('#LAPORAN_DropSurv').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
        $('#LAPORAN_DropInst').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>

<script type="text/javascript">
    $(function () {
        $('#LAPORAN_Surv').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>

<script type="text/javascript">
    $(function () {
        $('#LAPORAN_Inst').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>

<script type="text/javascript">
    $(function () {
        $('#LAPORAN_Bast').dataTable( {
          "bSort": false,
          dom:'B <"content-header" <"col-sm-2"l> f>tipH',
          buttons: [ 'excel' ]
        } );
  });
</script>


<?php
      }
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN WORK ORDER' || $_SESSION['level'] != 'ADMIN INSTALASI' || $_SESSION['level'] != 'ADMIN BAST' || $_SESSION['level'] != 'ADMIN SURVEY' ) {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>