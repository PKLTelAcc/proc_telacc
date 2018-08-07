<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN BAST') {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Bast</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_bast/form'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA">
	                      <input class="form-control" id="txtInstalasi" type="hidden" name="txtInstalasi">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTASurvey">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor BAST</label>
	                  <div>
	                      <input class="form-control" placeholder="Nomor BAST" type="number" name="txtnoBast" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor PO</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih NO PO ==" name="txtIDTAMuncul" id="myInput2" required="true">
	                      <input class="form-control" id="txtnoPo" type="hidden" name="txtnoPo">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalPo">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Material" type="number" name="txtMaterial" required="true" id="bastMaterial">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true" id="bastJasa">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtTotal" required="true" id="bastTotal">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">ODP</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtOdp" required="true" id="bastOdp">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Tanggal BAST</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="txtBast" required="true">  
	                    </span>
	                  </div>
	              	</div>
	              <div class="form-group">
	                <div class="row">
	                  <div class="col-md-10">
	                    <button type="reset" class="btn btn-danger pull-right">Cancel</button>
	                  </div>
	                  <div class="col-md-2">
	                    <button type="submit" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-success2" onclick="modalKonfirmasiTakJadi()" >Input Data</button>
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Data BAST</h3>

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
		   	<div id="tableBast">
			<table class="table table-bordered table-hover table-striped" id="lookup">
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
						foreach ($bast as $row) {
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
	</div>
</div>
<!-- /.content -->
<?php
      }
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN bASI') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>

<!-- modal IDTA -->
<div class="modal fade" id="modalIDTASurvey" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Work Order</h4>
            </div>
            <div class="modal-body">
                <table id="surveyIDTA" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID TA</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($workOrder as $row) {
                        ?>
                          <tr class="isi" style="cursor: pointer;" data-id = "<?=$row['WODE_ID']?>" data-idta= "<?php echo $row['WODE_ID_TA']; ?>" data-material="<?php echo $row['INST_MATERIAL']; ?>" data-jasa="<?php echo $row['INST_JASA']; ?>" data-total="<?php echo $row['INST_TOTAL']; ?>" data-odp="<?php echo $row['INST_ODP']; ?>" data-instalasi="<?php echo $row['INST_ID']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WODE_ID_TA']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<!-- Modal Surveyer -->
<div class="modal fade" id="modalPo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data SP</h4>
            </div>
            <div class="modal-body">
                <table id="surveyer" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>PO Telkom</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($sp_telkom as $row) {
                        ?>
                          <tr class="isi2" style="cursor: pointer;" data-id2 = "<?=$row['SPTL_ID']?>" data-poTelkom="<?php echo $row['SPTL_NO_PO']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['SPTL_NO_PO']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).on('click', '.isi', function (e) {
		document.getElementById("txtIDTA").value 		= $(this).attr('data-id');
        document.getElementById("myInput").value 		= $(this).attr('data-idta');
        document.getElementById("bastMaterial").value 	= $(this).attr('data-material');
        document.getElementById("bastJasa").value 		= $(this).attr('data-jasa');
        document.getElementById("bastTotal").value 		= $(this).attr('data-total');
        document.getElementById("bastOdp").value 		= $(this).attr('data-odp');
        document.getElementById("txtInstalasi").value 		= $(this).attr('data-instalasi');
        $('#modalIDTASurvey').modal('hide');
	});

    $(document).on('click', '.isi2', function (e) {
		document.getElementById("txtnoPo").value 		= $(this).attr('data-id2');
        document.getElementById("myInput2").value 		= $(this).attr('data-poTelkom');
        $('#modalPo').modal('hide');        
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
          url: "<?php echo base_url()?>C_filter/bast/",
          success: function(html) {
              var target      = '#tableBast';
              $(target).html(html);
                $('#lookup').dataTable( {
                  "bSort": false,
                  dom:'B <"content-header" <"col-sm-2"l> f>tipH',
                  buttons: [ 'excel' ]
                } );
          }
      });
    }
</script>
