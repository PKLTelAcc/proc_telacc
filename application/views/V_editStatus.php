<!-- Main content -->
<div class="content">
	<div class="row">
	  <div class="col-md-12">
	    <div class="box box-info">
	      <div class="box-header with-border">
	        <h3 class="box-title">Edit Status</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url(). 'C_status/updateData/' .$status[0]["STAT_ID"]; ?>" method="POST">
	              <div class="form-group">
	                  <label class=" control-label">Level</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text" placeholder="Level .." name="txtNama" required placeholder="0" value="<?php echo($status[0]['STAT_NAME'])?>">  
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
	  <div class="col-md-6">
	    
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->