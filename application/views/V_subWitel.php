<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Sub Witel</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url(). 'C_subWitel/form'; ?>" method="POST">
	            <div class="form-group">
					<label class="control-label">Nama Witel</label>
					<div class="input-group">
						<select name="txtWtel" id="cmbWtel" class="form-control">
						  <option value="0">== Pilih Witel ==</option>
							  <?php  
							    foreach ($witel as $row) {
											echo "<option value ='".$row['WTEL_ID']."'> ".$row['WTEL_NAME']." </option>";
							    }
							  ?>
							</select> <br>
						<div class="input-group-btn">
						  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWtel">Search</button>
						</div>
					</div>
				</div>
	              <div class="form-group">
	                  <label class=" control-label">Sub Witel</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Sub Witel" name="txtNama" required placeholder="0">  
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
	        <h3 class="box-title">Data Sub Witel</h3>

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
						<th>Witel</th>
						<th>Sub Witel</th>
						<th style="text-align: center">Action </th>
					</tr>
				</thead>
				<tbody>
		<?php 
			$no=1;
			foreach ($sub_witel as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_subWitel/formUpdate/".$row['SWIT_ID']."'>Edit</a> | <a href='".base_url()."C_subWitel/delete/".$row['SWIT_ID']."'>Delete</a></td>";
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

<!-- modal Witel -->
<div class="modal fade" id="modalWtel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Witel</h4>
            </div>
            <div class="modal-body">
                <table id="witel" class="table table-bordered table-hover table-striped">
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
        $('#modalWtel').modal('hide');
	});

</script>