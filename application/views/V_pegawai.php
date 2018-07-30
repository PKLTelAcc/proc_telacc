<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER') {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Pegawai</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url(). 'C_pegawai/form'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">Object ID</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Object ID" name="txtIdObj" required placeholder="0">  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
	                  <label class=" control-label">Nama Pegawai</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Nama" name="txtNama" required placeholder="0">  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
	                  <label class=" control-label">NIK</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Nik" name="txtNik" required placeholder="0">  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
	                  <label class=" control-label">PSA</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="psa" name="txtpsa" required placeholder="0">  
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
	            <form action="<?php echo base_url();?>C_pegawai/upload/" enctype="multipart/form-data" method="post">
	            <div class="form-group">
	            	<div class="row">
	            		<div class="col-md-11">
	            			<input type="file" name="file" class="btn btn-danger">
	            		</div>
	            		<div class="col-md-1">
	            			<input type="submit" value="Import File" class="btn btn-danger pull-right">
	            		</div>
	            	</div>
	            </div>
	            </form>
	            <?php echo $this->session->flashdata('msg'); ?> 
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
	        <h3 class="box-title">Data Pegawai</h3>

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
						<th>Object ID</th>
						<th>Nama</th>
						<th>NIK</th>
						<th>PSA</th>
						<th>Witel</th>
						<th style="text-align: center">Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1; 
		 				foreach ($pegawai as $row) {
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['PEGA_ID_OBJ']."</td>";
		 					echo "<td>".$row['PEGA_NAME']."</td>";
		 					echo "<td>".$row['PEGA_NIK']."</td>";
		 					echo "<td>".$row['PEGA_PSA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td><a href='".base_url()."C_pegawai/FormUpdate/".$row['PEGA_ID']."'>Edit</a> | 
		 						<a href='".base_url()."C_pegawai/delete/".$row['PEGA_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
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

<script type="text/javascript">
		$(document).on('click', '.search', function (e) {
		document.getElementById("cmbWtel").value 		= $(this).attr('data-id');
        $('#modalWodeWtel').modal('hide');
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