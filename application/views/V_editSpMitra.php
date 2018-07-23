<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Edit SP Mitra</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url().'C_spMitra/updateData/'; ?>" method="POST">
	            	<div class="form-group">
	                  <label class=" control-label">ID TA</label>
	                  <div class="input-group">
	                      <input class="form-control readonly" placeholder="== Pilih ID TA ==" name="txtIDTAMuncul" id="myInput" required="true" value="<?php echo($sp_mitra[0]['WODE_ID_TA'])?>">
	                      <input class="form-control" id="txtIDTA" type="hidden" name="txtIDTA">
						<div class="input-group-btn">
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalspMitra">Search</button>
						</div>
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">No SP Mitra</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtNo" required="true" value="<?php echo($sp_mitra[0]['SPMT_NO'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">ID PR</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtIDPR" required="true" value="<?php echo($sp_mitra[0]['SPMT_ID_PR'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Status Pembayaran</label>
	                  <div>
	                      <input class="form-control" placeholder="Jumlah ODP" type="number" name="txtStatus" required="true" value="<?php echo($sp_mitra[0]['SPMT_STATUS'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Material</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Material" type="number" name="txtMaterial" required="true" id="survMaterial" value="<?php echo($sp_mitra[0]['SPMT_MATERIAL'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Jasa</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Jasa" type="number" name="txtJasa" required="true" id="survJasa" value="<?php echo($sp_mitra[0]['SPMT_JASA'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nilai Total</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtTotal" required="true" id="survTotal" value="<?php echo($sp_mitra[0]['SPMT_TOTAL'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">ODP</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtOdp" required="true" id="survTotal" value="<?php echo($sp_mitra[0]['SPMT_TOTAL'])?>">
	                  </div>
	              	</div>
	              	<div class="form-group">
	                  <label class=" control-label">Nomor APM</label>
	                  <div>
	                      <input class="form-control" placeholder="Nilai Total" type="number" name="txtApm" required="true" id="survTotal" value="<?php echo($sp_mitra[0]['SPMT_NO_APM'])?>">
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