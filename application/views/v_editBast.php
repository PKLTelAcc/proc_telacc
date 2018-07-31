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
	            <form action="<?php echo base_url().'C_bast/updateData/'.$bast[0]["BAST_ID"]; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true" value="<?php echo($bast[0]['WODE_ID_TA'])?>">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA" value="<?php echo($bast[0]['BAST_WODE_ID'])?>">
	                      <input class="form-control" id="txtInstalasi" type="hidden" name="txtInstalasi" value="<?php echo($bast[0]['BAST_INST_ID'])?>">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTASurvey">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor BAST</label>
	                  <div>
	                      <input class="form-control" placeholder="Nomor BAST" type="number" name="txtnoBast" required="true" value="<?php echo($bast[0]['BAST_NO'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor PO</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih NO PO ==" name="txtIDTAMuncul" id="myInput2" required="true" value="<?php echo($bast[0]['SPTL_NO_PO'])?>">
	                      <input class="form-control" id="txtnoPo" type="hidden" name="txtnoPo" value="<?php echo($bast[0]['BAST_SPTL_ID'])?>">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalPo">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Material" type="number" name="txtMaterial" required="true" id="bastMaterial" value="<?php echo($bast[0]['INST_MATERIAL'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true" id="bastJasa" value="<?php echo($bast[0]['INST_JASA'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtTotal" required="true" id="bastTotal" value="<?php echo($bast[0]['INST_TOTAL'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">ODP</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtOdp" required="true" id="bastOdp" value="<?php echo($bast[0]['INST_ODP'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Tanggal BAST</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="date" name="txtBast" required="true" value="<?php echo($bast[0]['BAST_TANGGAL'])?>">  
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
<?php
      }
      if ($_SESSION['level'] != 'SUPER USER' || $_SESSION['level'] != 'ADMIN bASI') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>