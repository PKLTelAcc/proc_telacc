<!-- Main content -->
<div class="content">
	<div class="row">
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
	                <div class="row">
	                  <div class="col-md-10">
	                    <button type="reset" class="btn btn-default pull-right">Cancel</button>
	                  </div>
	                  <div class="col-md-2">
	                    <button type="submit" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-success2" onclick="modalKonfirmasiTakJadi()" >Input Level</button>
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
						<th>Nama</th>
						<th>NIK</th>
						<th>PSA</th>
						<th style="text-align: center">Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1; 
		 				foreach ($pegawai as $row) {
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['PEGA_NAME']."</td>";
		 					echo "<td>".$row['PEGA_NIK']."</td>";
		 					echo "<td>".$row['PEGA_PSA']."</td>";
		 					echo "<td><a href='".base_url()."C_pegawai/FormUpdate/".$row['PEGA_ID']."'>Edit</a> | 
		 						<a href='".base_url()."C_pegawai/delete/".$row['PEGA_ID']."'>Delete</a></td>";
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