<!-- Main content -->
<div class="content">
	<div class="row">
		 <?php
      if ($_SESSION['level'] == 'SUPER USER' || ($_SESSION['level'] == 'ADMIN INSTALASI' &&  $_SESSION['WTEL_ID'])) {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Instalasi</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_instalasi/form'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTAInstalasi">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Witel</label>
	                  <div>
	                      <input class="form-control readonly" placeholder="Witel" id="inputWitel" type="text" name="txtWtelMuncul" required="true">
	                      <input class="form-control" id="witel" type="hidden" name="txtWtel">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Sub Witel</label>
	                  <div>
	                      <input class="form-control readonly" placeholder="Sub Witel" id="inputSubWitel" type="text" name="txtSwitMuncul" required="true">
	                      <input class="form-control" id="subWitel" type="hidden" name="txtSwit">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Program</label>
	                  <div>
	                      <input class="form-control readonly" placeholder="Program" id="inputProgram" type="text" name="txtProgMuncul" required="true">
	                      <input class="form-control" id="program" type="hidden" name="txtProg">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nama Lokasi</label>
	                  <div>
	                      <input class="form-control readonly" placeholder="Nama Lokasi" id="namaLokasi" type="text" name="txtLokasi" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" id="survMaterial" placeholder="Nilai Material" type="number" name="txtMaterial" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" id="survJasa" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" id="survTotal" placeholder="Nilai Total" type="number" name="txtTotal" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Jumlah ODP</label>
	                  <div>
	                      <input class="form-control" id="survODP" placeholder="Jumlah ODP" type="number" name="txtODP" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nama Waspang</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih Waspang ==" name="txtSurveyerMuncul" id="myInput2" required="true">
	                      <input class="form-control" id="txtSurveyer" type="hidden" name="txtSurveyer">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">NIK Waspang</label>
	                  <div>
	                      <input class="form-control readonly" placeholder="NIK Surveyer" id="nik" type="text" name="txtNIK" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
						<label class="control-label">Mitra</label>
						<div class="input-group">
							<input class="form-control readonly" placeholder="== Pilih Mitra ==" name="txtMitraMuncul" id="myInput3" required="true">
	                      	<input class="form-control" id="txtMitra" type="hidden" name="txtMitra">
							<!-- <select class="form-control" name="txtMitra" id="cmbMitra" required="true" >
								<option value="0">== Pilih Mitra ==</option>
									<?php  
										foreach ($mitra as $row){
											echo "<option value='".$row['MTRA_ID']."'>";
											echo $row ['MTRA_NAME'];
											echo "</option>";
										}
									?>
							</select> -->
							<div class="input-group-btn">
						  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalMitra">Search</button>
						</div>
						</div>
					</div>
	              	<div class="form-group">
	                  <label class=" control-label">Tanggal Selesai Instalasi</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="dateInstalasi">  
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Target Selesai</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="dateTarget" required="true">  
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
					<label class="control-label">Status</label>
						<div class="input-group">
							<input class="form-control readonly" placeholder="== Pilih Status ==" name="txtStatMuncul" id="myInput4" required="true" >
		                    <input class="form-control" id="txtStat" type="hidden" name="txtStat">
							<!-- <div>
								<select class="form-control" name="txtStat" id="cmbStat" required="true" >
									<option value="0">== Pilih Status ==</option>
										<?php  
											foreach ($status as $row){
												echo "<option value='".$row['STAT_ID']."'>";
												echo $row ['STAT_NAME'];
												echo "</option>";
											}
										?>
								</select>
							</div> -->
							<div class="input-group-btn">
								 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalInstStat">Search</button>
							</div>
						</div>
					</div>

					<div class="form-group">
					<label class="control-label">Status Instalasi</label>
						<div class="input-group">
							<input class="form-control readonly" placeholder="== Pilih Status Instalasi ==" name="txtStinMuncul" id="myInput5" required="true" >
		                    <input class="form-control" id="txtstin" type="hidden" name="txtstin">
							<div class="input-group-btn">
								 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalStin">Search</button>
							</div>
						</div>
					</div>

	                  <div class="form-group">
	                  <label class=" control-label">Progres</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtprogres" placeholder="Progres"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Kendala</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtkendala" placeholder="Kendala"></textarea>
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
	        <h3 class="box-title">Data Instalasi</h3>

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
		    <div id="tableInst">
			<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
						<th>Mitra</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Tanggal Selesai Survey</th>
						<th>Target Selesai</th>
						<th>Status</th>
						<th>Status Instalasi</th>
						<th>Progres</th>
						<th>Kendala</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($instalasi as $row) {
							if($row['STAT_NAME']=='INSTALASI' || $row['STAT_NAME']=='BAST' || $row['STAT_NAME']=='DROP'){
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";
							echo "<td>".$row['INST_MATERIAL']."</td>";
							echo "<td>".$row['INST_JASA']."</td>";
							echo "<td>".$row['INST_TOTAL']."</td>";
							echo "<td>".$row['INST_ODP']."</td>";
							echo "<td>".$row['MTRA_NAME']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
							echo "<td>".$row['INST_TANGGAL']."</td>";
							echo "<td>".$row['INST_TARGET']."</td>";
							echo "<td>".$row['STAT_NAME']."</td>";
							echo "<td>".$row['STIN_NAME']."</td>";
							echo "<td>".$row['INST_PROGRES']."</td>";
							echo "<td>".$row['INST_KENDALA']."</td>";
							echo "<td><a href='".base_url()."C_instalasi/formUpdate/".$row['INST_ID']."'>Edit</a> | <a href='".base_url()."C_instalasi/delete/".$row['INST_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
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
	</div>
</div>
<!-- /.content -->

<!-- modal IDTA -->
<div class="modal fade" id="modalIDTAInstalasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="surveyIDTA" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID TA</th>
                        <th>Witel</th>
                        <th>Sub Witel</th>
                        <th>Program</th>
                       	<th>Nama Lokasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      foreach ($workOrder as $row) {
                      	if($row['STAT_NAME']=='SURVEY'){
                        ?>
                          <tr class="isi" style="cursor: pointer;" data-id = "<?=$row['WODE_ID']?>" data-lokasi="<?php echo $row['WODE_NAMA_LOKASI']; ?>" data-program="<?php echo $row['PROG_ID']; ?>" data-inputProgram="<?php echo $row['PROG_NAME']; ?>" data-subWitel="<?php echo $row['SWIT_ID']; ?>" data-inputSubWitel="<?php echo $row['SWIT_NAME']; ?>" data-witel="<?php echo $row['WTEL_ID']; ?>" data-idta="<?php echo $row['WODE_ID_TA']; ?>" data-inputWitel="<?php echo $row['WTEL_NAME']; ?>" data-survMaterial="<?php echo $row['SURV_MATERIAL']; ?>" data-survJasa="<?php echo $row['SURV_JASA']; ?>"
                          	data-survTotal="<?php echo $row['SURV_TOTAL']; ?>" data-survODP="<?php echo $row['SURV_ODP']; ?>" data-id4 = "<?=$row['STAT_ID']?>" data-stat = "<?=$row['STAT_NAME']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WODE_ID_TA']?></td>
                            <td><?php echo $row['WTEL_NAME']?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
                            <td><?php echo $row['PROG_NAME']?></td>
                            <td><?php echo $row['WODE_NAMA_LOKASI']?></td>
                          </tr>
                        <?php
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

<?php
      }
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN INSTALASI') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>

<!-- Modal Surveyer -->
<div class="modal fade" id="modalSurveyer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="surveyer" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIK Waspang</th>
                        <th>Nama Waspang</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($pegawai as $row) {
                        ?>
                          <tr class="isi2" style="cursor: pointer;" data-id2 = "<?=$row['PEGA_ID']?>" data-nik="<?php echo $row['PEGA_NIK']; ?>" data-pegawai="<?php echo $row['PEGA_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PEGA_NIK']?></td>
                            <td><?php echo $row['PEGA_NAME']?></td>
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

<!-- Modal Mitra -->
<div class="modal fade" id="modalMitra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="tableMitra" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Mitra</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      foreach ($mitra as $row) {
                        ?>
                          <tr class="isi3" style="cursor: pointer;" data-id3 = "<?=$row['MTRA_ID']?>" data-mitra="<?php echo $row['MTRA_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['MTRA_NAME']?></td>
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

<!-- modal InstStat -->
<div class="modal fade" id="modalInstStat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Status</h4>
            </div>
            <div class="modal-body">
                <table id="tableStatus" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody align="center">
                      <?php
                      $no=1;
                      foreach ($status as $row) {
                        ?>
                          <tr class="isi4" style="cursor: pointer;" data-id4 = "<?=$row['STAT_ID']?>" data-stat = "<?=$row['STAT_NAME']?>">
                          	<?php if($row['STAT_NAME']=='INSTALASI' || $row['STAT_NAME']=='BAST' || $row['STAT_NAME']=='DROP'){ ?>
                            <td><?php echo $no?></td>
                            <td><?php echo $row['STAT_NAME']?></td>
                        	<?php } ?>
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

<!-- modal InstStat -->
<div class="modal fade" id="modalStin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Status Instalasi</h4>
            </div>
            <div class="modal-body">
                <table id="tableStin" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Status Instalasi</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($status_instalasi as $row) {
                        ?>
                          <tr class="isi5" style="cursor: pointer;" data-id5 = "<?=$row['STIN_ID']?>" data-stin = "<?=$row['STIN_NAME']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['STIN_NAME']?></td>
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
        document.getElementById("namaLokasi").value 	= $(this).attr('data-lokasi');
        document.getElementById("program").value 		= $(this).attr('data-program');
        document.getElementById("inputProgram").value 	= $(this).attr('data-inputProgram');
        document.getElementById("subWitel").value 		= $(this).attr('data-subWitel');
        document.getElementById("inputSubWitel").value 	= $(this).attr('data-inputSubWitel');
        document.getElementById("witel").value 			= $(this).attr('data-witel');
        document.getElementById("inputWitel").value 	= $(this).attr('data-inputWitel');
        document.getElementById("survMaterial").value 	= $(this).attr('data-survMaterial');
        document.getElementById("survJasa").value 		= $(this).attr('data-survJasa');
        document.getElementById("survTotal").value 		= $(this).attr('data-survTotal');
        document.getElementById("survODP").value 		= $(this).attr('data-survODP');
        document.getElementById("txtStat").value 		= $(this).attr('data-id4');
		document.getElementById("myInput4").value 		= $(this).attr('data-stat');
        $('#modalIDTAInstalasi').modal('hide');
	});

    $(document).on('click', '.isi2', function (e) {
		document.getElementById("txtSurveyer").value 		= $(this).attr('data-id2');
        document.getElementById("myInput2").value 		= $(this).attr('data-pegawai');
        document.getElementById("nik").value 			= $(this).attr('data-nik');
        $('#modalSurveyer').modal('hide');        
    });
    $(document).on('click', '.isi3', function (e) {
		document.getElementById("txtMitra").value 		= $(this).attr('data-id3');
		document.getElementById("myInput3").value 		= $(this).attr('data-mitra');
        $('#modalMitra').modal('hide');        
    });

    $(document).on('click', '.isi4', function (e) {
		document.getElementById("txtStat").value 		= $(this).attr('data-id4');
		document.getElementById("myInput4").value 		= $(this).attr('data-stat');
        $('#modalInstStat').modal('hide');
	});
	$(document).on('click', '.isi5', function (e) {
		document.getElementById("txtstin").value 		= $(this).attr('data-id5');
		document.getElementById("myInput5").value 		= $(this).attr('data-stin');
        $('#modalStin').modal('hide');
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
          url: "<?php echo base_url()?>C_filter/instalasi/",
          success: function(html) {
              var target      = '#tableInst';
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

<!-- =========================================================================================================================================== -->

<!-- <h3>Input Survey</h3>
<form action="<?php echo base_url().'C_survey/form'; ?>" method="POST">
	<label>ID TA</label>
	<input name="txtIDTAMuncul" id="myInput" required="true">
	<input id="txtIDTA" type="hidden" name="txtIDTA">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTASurvey">Search</button><br>	
	<label>Witel</label>
	<input id="inputWitel" type="text" name="txtWtelMuncul" required="true" readonly="true">
	<input id="witel" type="hidden" name="txtWtel"><br>
	<label>Sub Witel</label>
	<input id="inputSubWitel" type="text" name="txtSwitMuncul" required="true" readonly="true">
	<input id="subWitel" type="hidden" name="txtSwit"><br>
	<label>Program</label>
	<input id="inputProgram" type="text" name="txtProgMuncul" required="true" readonly="true">
	<input id="program" type="hidden" name="txtProg"><br>
	<label>Nama Lokasi</label>
	<input id="namaLokasi" type="text" name="txtLokasi" required="true" readonly="true"><br>
	<label>Nilai Material</label>
	<input type="number" name="txtMaterial" required="true"><br>
	<label>Nilai Jasa</label>
	<input type="number" name="txtJasa" required="true"><br>
	<label>Nilai Total</label>
	<input type="number" name="txtTotal" required="true"><br>
	<label>Jumlah ODP</label>
	<input type="number" name="txtODP" required="true"><br>
	<label>Nama Surveyer</label>
	<input name="txtSurveyerMuncul" id="myInput2" required="true">
	<input id="txtSurveyer" type="hidden" name="txtSurveyer">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button><br>
	<label>NIK Surveyer</label>
	<input id="nik" type="text" name="txtNIK" required="true" readonly="true"><br>
	<label>Tanggal Selesai Survey</label>
	<input type="date" name="dateInstalasi" required="true"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				echo "<option value='".$row['STAT_ID']."'>";
				echo $row ['STAT_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form> -->

<!-- <hr>

<h3>Data Survey</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th>
			<th>Nilai Material</th>
			<th>Nilai Jasa</th>
			<th>Nilai Total</th>
			<th>Jumlah ODP</th>
			<th>Nama Surveyer</th>
			<th>NIK Surveyer</th>
			<th>Tanggal Selesai Survey</th>
			<th>Status</th>
			<th style="text-align: center">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($survey as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				// echo "<td>".$row['WTEL_NAME']."</td>";
				// echo "<td>".$row['SWIT_NAME']."</td>";
				// echo "<td>".$row['PROG_NAME']."</td>";
				// echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['SURV_MATERIAL']."</td>";
				echo "<td>".$row['SURV_JASA']."</td>";
				echo "<td>".$row['SURV_TOTAL']."</td>";
				echo "<td>".$row['SURV_ODP']."</td>";
				echo "<td>".$row['PEGA_NAME']."</td>";
				echo "<td>".$row['PEGA_NIK']."</td>";
				echo "<td>".$row['SURV_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_survey/formUpdate/".$row['SURV_ID']."'>Edit</a> | <a href='".base_url()."C_survey/delete/".$row['SURV_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table> -->



