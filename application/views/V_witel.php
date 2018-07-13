<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-info">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Witel</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url(). 'c_witel/form'; ?>" method="POST">
	              <div class="form-group">
	                  <label class=" control-label">Witel</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Level .." name="txtNama" required placeholder="0">  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
	                <div class="row">
	                  <div class="col-md-10">
	                    <button type="reset" class="btn btn-default pull-right">Cancel</button>
	                  </div>
	                  <div class="col-md-2">
	                    <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modal-success2" onclick="modalKonfirmasiTakJadi()" >Input Level</button>
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
	    <div class="box box-info">
	      <div class="box-header with-border">
	        <h3 class="box-title">Data Witel</h3>

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
						<th>witel</th>
						<th style="text-align: center">Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1; 
		 				foreach ($witel as $row) {
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td><a href='".base_url()."c_witel/FormUpdate/".$row['WTEL_ID']."'>Edit</a> | 
		 						<a href='".base_url()."c_witel/delete/".$row['WTEL_ID']."'>Delete</a></td>";
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



<h3>Input Witel</h3>

<form action="<?php echo base_url(). 'C_witel/form'; ?>" method="POST">
	<label>Nama Witel</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Witel</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Witel</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($witel as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td><a href='".base_url()."C_witel/FormUpdate/".$row['WTEL_ID']."'>Edit</a> | <a href='".base_url()."C_witel/delete/".$row['WTEL_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>