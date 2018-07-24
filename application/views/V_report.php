<!-- Main content -->
<div class="content">
	<div class="row">
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
			<table class="table table-bordered table-hover table-striped" id="report">
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
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1; 
		 				foreach ($dataReport as $row) {
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
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "</tr>";
		 					$no++;
		 				}
		 			 ?>
				</tbody>
			</table>
	      </div>
	      <form action="<?php echo base_url();?>C_report/upload/" enctype="multipart/form-data" method="post">
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
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->