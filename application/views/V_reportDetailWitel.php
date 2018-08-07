<!-- Report Wode -->
<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER') {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Work Order</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	      	<div class="col-md-12">
		        <div class="box box-danger box-solid collapsed-box">
		          <div class="box-header with-border">
		            <h3 class="box-title">Filter Data</h3>

		            <div class="box-tools pull-right">
		              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
		              </button>
		            </div>
		            <!-- /.box-tools -->
		          </div>
		          <!-- /.box-header -->
		          <div class="box-body" style="display: none">
		            <div class="col-md-4">
		              <div class="form-group col-md-6">
		                  <label class=" control-label">Tanggal Awal</label>
		                  <div>
		                  <select class="form-control" name="cmbHariPertama" id="cmbHariPertama">
		                    <option value="0">=== Pilih Tanggal ===</option>
		                    <?php
		                      for ($i=1; $i < 32; $i++) { 
		                        echo "<option value = '$i'>$i</option>";
		                      }
		                    ?>
		                  </select>
		                  </div>
		              </div>
		              <div class="form-group col-md-6">
		                  <label class=" control-label">Tanggal Akhir</label>
		                  <div>
		                  <select class="form-control" name="cmbHariKedua" id="cmbHariKedua">
		                    <option value="31">=== Pilih Tanggal ===</option>
		                    <?php
		                      for ($i=1; $i < 32; $i++) { 
		                        echo "<option value = '$i'>$i</option>";
		                      }
		                    ?>
		                  </select>
		                  </div>
		              </div>
		            </div>
		            <div class="form-group col-md-4">
		                <label class=" control-label">Bulan</label>
		                <div>
		                  <select name="cmbBulan" id="cmbBulan" class="form-control">
		                    <option value="<?php echo date('m')?>">=== Pilih Bulan ====</option>
		                    <option value="1">Januari</option>
		                    <option value="2">Februari</option>
		                    <option value="3">Maret</option>
		                    <option value="4">April</option>
		                    <option value="5">Mei</option>
		                    <option value="6">Juni</option>
		                    <option value="7">Juli</option>
		                    <option value="8">Agustus</option>
		                    <option value="9">September</option>
		                    <option value="10">Oktober</option>
		                    <option value="11">November</option>
		                    <option value="12">Desember</option>
		                  </select>
		                </div>
		            </div>
		            <div class="form-group col-md-4">
		                <label class=" control-label">Tahun</label>
		                <div>
		                <select class="form-control" name="cmbTahun" id="cmbTahun">
		                  <option value="<?php echo date('Y'); ?>">=== Pilih Tahun ===</option>
		                  <?php
		                    $tahun_sekarang = date('Y');
		                    $tahun_dulu     = date('Y')-25;
		                    for ($i=$tahun_dulu; $i <= $tahun_sekarang; $i++) { 
		                      echo "<option value = '$i'>$i</option>";
		                    }
		                  ?>
		                </select>
		                </div>
		            </div>
		          </div>
		          <div class="box-footer">
		            <button class="btn btn-danger pull-right" onclick="filterTanggal()">Filter</button>
		          </div>
		          <!-- /.box-body -->
		        </div>
		        <!-- /.box -->
		      </div>
		    <div class="col-md-12">
		    <div id="tableWitelWode">
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
		 			 ?>
				</tbody>
			</table>
			</div>
			</div>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->


<!-- Report Drop -->
<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Report Drop</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="LAPORAN_Drop">
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


<!-- Report Surv -->
<!-- Main content -->
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

<?php
$witel=$this->M_dashboard->getWitel();
foreach ($witel as $key) {
	$id=$key['WTEL_ID'];
}
?>


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
        $('#LAPORAN_Drop').dataTable( {
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
  function filterTanggal() {
      var hariPertama = document.getElementById('cmbHariPertama').value;
      var hariKedua   = document.getElementById('cmbHariKedua').value;
      var bulan       = document.getElementById('cmbBulan').value;
      var tahun       = document.getElementById('cmbTahun').value;
      $.ajax({
          type: "POST",
          data: {
            awal : hariPertama,
            akhir: hariKedua,
            bulan: bulan,
            tahun: tahun,
          },
          url: "<?php echo base_url()?>C_filter/witelWode/<?php echo $id; ?>",
          success: function(html) {
              var target      = '#tableWitelWode';
              $(target).html(html);
                $('#LAPORAN_Wode').dataTable( {
                  "bSort": false,
                  dom:'B <"content-header" <"col-sm-2"l> f>tipH',
                  buttons: [ 'excel' ]
                } );
          }
      });
    }
</script>

<?php
      }
      if ($_SESSION['level'] != 'SUPER USER') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>