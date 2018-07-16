<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Work Order</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_workOrder/form';?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="ID TA" name="txtIDTA" required="true">  
	                    </span>
	                  </div>
	              	</div>
		            <div class="form-group">
						<label class="control-label">Witel</label>
						<div class="input-group">
							<select name="txtWtel" id="cmbWtel" required="true" class="form-control">
							  <option value="0">== Pilih Witel ==</option>
								<?php  
									foreach ($witel as $row){
										echo "<option value='".$row['WTEL_ID']."'>";
										echo $row ['WTEL_NAME'];
										echo "</option>";
									}
								?>
								</select>
							<div class="input-group-btn">
							  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeWtel">Search</button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Sub Witel</label>
						<div class="input-group">
							<select name="txtSwit" id="cmbSwit" required="true" class="form-control">
							  <option value="0">== Pilih Sub Witel ==</option>
								<?php  
									foreach ($subWitel as $row){
										echo "<option value='".$row['SWIT_ID']."'>";
										echo $row ['SWIT_NAME'];
										echo "</option>";
									}
								?>
								</select>
							<div class="input-group-btn">
							  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeSwit">Search</button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Program</label>
						<div class="input-group">
							<select name="txtProg" id="cmbProg" required="true" class="form-control">
							  <option value="0">== Pilih Program ==</option>
								<?php  
									foreach ($program as $row){
										echo "<option value='".$row['PROG_ID']."'>";
										echo $row ['PROG_NAME'];
										echo "</option>";
									}
								?>
								</select>
							<div class="input-group-btn">
							  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeProg">Search</button>
							</div>
						</div>
					</div>
					<div class="form-group">
	                  <label class=" control-label">Nama Lokasi</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtLokasi" placeholder="Nama Lokasi" required="true"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Alamat Lokasi</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtAlamat" placeholder="Alamat Lokasi"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Koordinat Lokasi</label>
	                  <div>
	                    <span id="qty">
	                      <textarea class="form-control" type="text" name="txtKoordinat" placeholder="Alamat Lokasi"></textarea>
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Tanggal Masuk</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="dateMasuk" required="true">  
	                    </span>
	                  </div>
	              	</div>
	              	<div class="form-group">
						<label class="control-label">Status</label>
						<div class="input-group">
							<select name="txtStat" id="cmbStat" required="true" class="form-control">
								<option value="0">== Pilih Status ==</option>
								<?php  
									foreach ($status as $row){
										echo "<option value='".$row['STAT_ID']."'>";
										echo $row ['STAT_NAME'];
										echo "</option>";
									}
								?>
							</select>
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
	        <h3 class="box-title">Data Work Order</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th>
			<th>Alamat Lokasi</th>
			<th>Koordinat Lokasi</th>
			<th>Tanggal Masuk</th>
			<th>Status</th>
			<th style="text-align: center;">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($workOrder as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td>".$row['PROG_NAME']."</td>";
				echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['WODE_ALAMAT']."</td>";
				echo "<td>".$row['WODE_KOORDINAT']."</td>";
				echo "<td>".$row['WODE_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_workOrder/formUpdate/".$row['WODE_ID']."'>Edit</a> | <a href='".base_url()."C_workOrder/delete/".$row['WODE_ID']."'>Delete</a></td>";
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

<!-- modal WodeWtel -->
<div class="modal fade" id="modalWodeWtel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Witel</h4>
            </div>
            <div class="modal-body">
                <table id="tableWitel" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Witel</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($witel as $row) {
                        ?>
                          <tr class="search" style="cursor: pointer;" data-id = "<?=$row['WTEL_ID']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WTEL_NAME']?></td>
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

<!-- modal WodeSwit -->
<div class="modal fade" id="modalWodeSwit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Sub Witel</h4>
            </div>
            <div class="modal-body">
                <table id="tableSubWitel" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Sub Witel</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($subWitel as $row) {
                        ?>
                          <tr class="search2" style="cursor: pointer;" data-id2 = "<?=$row['SWIT_ID']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
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

<!-- modal WodeProg -->
<div class="modal fade" id="modalWodeProg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Program</h4>
            </div>
            <div class="modal-body">
                <table id="tableProgram" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Program</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($program as $row) {
                        ?>
                          <tr class="search3" style="cursor: pointer;" data-id3 = "<?=$row['PROG_ID']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PROG_NAME']?></td>
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
		$(document).on('click', '.search', function (e) {
		document.getElementById("cmbWtel").value 		= $(this).attr('data-id');
        $('#modalWodeWtel').modal('hide');
	});

		$(document).on('click', '.search2', function (e) {
		document.getElementById("cmbSwit").value 		= $(this).attr('data-id2');
        $('#modalWodeSwit').modal('hide');
	});

		$(document).on('click', '.search3', function (e) {
		document.getElementById("cmbProg").value 		= $(this).attr('data-id3');
        $('#modalWodeProg').modal('hide');
	});
</script>






<!-- ========================================================================================================================= -->

<!-- <h3>Input Work Order</h3>
<form action="<?php echo base_url().'C_workOrder/form';?>" method="POST">
	<label>ID TA</label>
	<input type="text" name="txtIDTA" required="true"><br>
	<label>Witel</label>
	<select name="txtWtel" id="cmbWtel" required="true">
		<option value="0">== Pilih Witel ==</option>
		<?php  
			foreach ($witel as $row){
				echo "<option value='".$row['WTEL_ID']."'>";
				echo $row ['WTEL_NAME'];
				echo "</option>";
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeWtel">Search</button><br> -->
	<!-- <label>Sub Witel</label>
	<select name="txtSwit" id="cmbSwit" required="true">
		<option value="0">== Pilih Sub Witel ==</option>
		<?php  
			foreach ($subWitel as $row){
				echo "<option value='".$row['SWIT_ID']."'>";
				echo $row ['SWIT_NAME'];
				echo "</option>";
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeSwit">Search</button><br> -->
	<!-- <label>Program</label>
	<select name="txtProg" id="cmbProg" required="true">
		<option value="0">== Pilih Program ==</option>
		<?php  
			foreach ($program as $row){
				echo "<option value='".$row['PROG_ID']."'>";
				echo $row ['PROG_NAME'];
				echo "</option>";
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeProg">Search</button><br> -->
	<!-- <label>Nama Lokasi</label>
	<textarea type="text" name="txtLokasi" required="true"></textarea><br> -->
<!-- 	<label>Alamat Lokasi</label>
	<textarea type="text" name="txtAlamat"></textarea><br>
	<label>Koordinat Lokasi</label>
	<textarea type="text" name="txtKoordinat"></textarea><br>
	<label>Tanggal Masuk</label>
	<input type="date" name="dateMasuk" required="true"><br>
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

<h3>Data Work Order</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th>
			<th>Alamat Lokasi</th>
			<th>Koordinat Lokasi</th>
			<th>Tanggal Masuk</th>
			<th>Status</th>
			<th style="text-align: center;">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($workOrder as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td>".$row['PROG_NAME']."</td>";
				echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['WODE_ALAMAT']."</td>";
				echo "<td>".$row['WODE_KOORDINAT']."</td>";
				echo "<td>".$row['WODE_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_workOrder/formUpdate/".$row['WODE_ID']."'>Edit</a> | <a href='".base_url()."C_workOrder/delete/".$row['WODE_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table> -->

