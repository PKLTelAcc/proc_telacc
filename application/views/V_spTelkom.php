<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input SP Telkom</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_spTelkom/form'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA">
	                      <input class="form-control" id="txtSurvey" type="hidden" name="txtSurvey">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalspTelkom">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">No SP Telkom</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtnospTelkom" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">IDP</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtidp" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor PO</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtnoPo" required="true">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Material" type="number" name="txtMaterial" required="true" id="survMaterial">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true" id="survJasa">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtTotal" required="true" id="survTotal">
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
	        <h3 class="box-title">Data SP Telkom</h3>

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
						<th>No SP Telkom</th>
						<th>IDP</th>
						<th>No PO</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($sp_telkom as $row) {
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";
							echo "<td>".$row['SPTL_NO']."</td>";
							echo "<td>".$row['SPTL_IDP']."</td>";
							echo "<td>".$row['SPTL_NO_PO']."</td>";
							echo "<td>".$row['SURV_MATERIAL']."</td>";
							echo "<td>".$row['SURV_JASA']."</td>";
							echo "<td>".$row['SURV_TOTAL']."</td>";
							echo "<td><a href='".base_url()."C_spTelkom/formUpdate/".$row['SPTL_ID']."'>Edit</a> | <a href='".base_url()."C_spTelkom/delete/".$row['SPTL_ID']."'>Delete</a></td>";
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

<!-- modal IDTA -->
<div class="modal fade" id="modalspTelkom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                          <tr class="isi" style="cursor: pointer;" data-id = "<?=$row['WODE_ID']?>" data-survMaterial="<?php echo $row['SURV_MATERIAL']; ?>" data-survJasa="<?php echo $row['SURV_JASA']; ?>"
                          	data-survTotal="<?php echo $row['SURV_TOTAL']; ?>" data-survODP="<?php echo $row['SURV_ODP']; ?>" data-idta="<?php echo $row['WODE_ID_TA']; ?>" data-survey="<?php echo $row['SURV_ID']; ?>">
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



<script type="text/javascript">
	$(document).on('click', '.isi', function (e) {
		document.getElementById("txtIDTA").value 		= $(this).attr('data-id');
        document.getElementById("myInput").value 		= $(this).attr('data-idta');
        document.getElementById("survMaterial").value 	= $(this).attr('data-survMaterial');
        document.getElementById("survJasa").value 		= $(this).attr('data-survJasa');
        document.getElementById("survTotal").value 		= $(this).attr('data-survTotal');
        document.getElementById("txtSurvey").value 		= $(this).attr('data-survey');
         $('#modalspTelkom').modal('hide');
    });
</script>