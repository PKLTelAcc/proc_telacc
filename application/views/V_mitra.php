 <!-- Main content -->
<div class="content">
	<div class="row">
	  		<div class="col-md-12">
			    <div class="box box-danger">
			      <div class="box-header with-border">
			        <h3 class="box-title">Input Mitra</h3>

			        <div class="box-tools pull-right">
			          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			        </div>
			      </div>
			      <!-- /.box-header -->
			      <div class="box-body">
			        <div class="row">
			          <div class="col-md-12 ">
			            <form action="<?php echo base_url().'C_mitra/form'; ?>" method="POST">
	                      <div class="form-group">
			                  <label class=" control-label">Input Mitra</label>
			                  <div>
			                    <span >
			                      <input class="form-control" type="text" placeholder="Mitra" id="mitra" name="txtNama">  
			                    </span>
			                  </div>
			              </div>
			              <div class="form-group">
			                  <div class="row">
			                  	<div class="col-md-10">
				                    <button type="reset" class="btn btn-default pull-right">Cancel</button>
				                  </div>
				                  <div class="col-md-2">
				                    <button type="submit" class="btn btn-danger pull-right">Input Data</button>
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
<!--'<div class="col-md-6">'; (itu di atas di echo) -->		
	    }
	    <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Data Mitra</h3>

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
						<th>level</th>
						<th style="text-align: center">Action </th>
					</tr>
				</thead>
					<tbody>
					 <tbody>
		 			  	<tr>
		 			  		<?php
		 			  		$no=1;
		 			  		foreach ($mitra as $row) {
		 			  			?>
		 			  		<td><?php echo $no; ?></td>
		 			  		<td><?php echo $row['MTRA_NAME']; ?></td>
					 			 <td class="center">
					 			  <a href="<?php echo base_url().'C_mitra/delete/'.$row['MTRA_ID']; ?>">Delete</a>
					 			  |
					 			  <a href="<?php echo base_url().'C_mitra/FormUpdate/'.$row['MTRA_ID']; ?>"> Edit</a>
					 			 </td>
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
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->