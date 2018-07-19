<!-- Main content -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Input Work Order</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12 ">
              <form action="<?php echo base_url().'C_workOrder/updateData/' .$workOrder[0]["WODE_ID"]; ?>" method="POST">
                <div class="form-group">
                    <label class=" control-label">ID TA</label>
                    <div>
                      <span id="qty">
                        <input class="form-control" type="text" placeholder="ID TA" name="txtIDTA" required="true" value="<?php echo($workOrder[0]['WODE_ID_TA'])?>">  
                      </span>
                    </div>
                  </div>
                <div class="form-group">
            <label class="control-label">Witel</label>
            <div class="input-group">
              <input class="form-control readonly" placeholder="== Pilih Witel ==" name="txtWtelMuncul" id="myInput" required="true" value="<?php echo($witel[0]['WTEL_NAME'])?>">
                        <input class="form-control" id="txtWtel" type="hidden" name="txtWtel" value="<?php echo($witel[0]['WTEL_ID'])?>">
              <!-- <select name="txtWtel" id="cmbWtel" required="true" class="form-control">
                <option value="0">== Pilih Witel ==</option>
                  <?php  
                    foreach ($witel as $row){
                      if ($row['WTEL_ID'] == $workOrder[0]['WODE_WTEL_ID']){
                  ?>
                          <option value="<?php echo $row['WTEL_ID'] ?>" selected><?php echo $row['WTEL_NAME']?></option>
                  <?php
                          } else {                               
                  ?>
                              <option value="<?php echo $row['WTEL_ID'] ?>" ><?php echo $row['WTEL_NAME']?></option>
                  <?php
                          }
                    }
                  ?>
                </select> -->
              <div class="input-group-btn">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeWtel">Search</button>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label">Sub Witel</label>
            <div class="input-group">
              <input class="form-control readonly" placeholder="== Pilih Sub Witel ==" name="txtSwitMuncul" id="myInput2" required="true" value="<?php echo($subWitel[0]['SWIT_NAME'])?>">
              <input class="form-control" id="txtSwit" type="hidden" name="txtSwit" value="<?php echo($subWitel[0]['SWIT_ID'])?>">
              <!-- <select name="txtSwit" id="cmbSwit" required="true" class="form-control">
                <option value="0">== Pilih Sub Witel ==</option>
                  <?php  
                    foreach ($subWitel as $row){
                      if ($row['SWIT_ID'] == $workOrder[0]['WODE_SWIT_ID']){
                  ?>
                          <option value="<?php echo $row['SWIT_ID'] ?>" selected><?php echo $row['SWIT_NAME']?></option>
                  <?php
                          } else {                               
                  ?>
                              <option value="<?php echo $row['SWIT_ID'] ?>" ><?php echo $row['SWIT_NAME']?></option>
                  <?php
                          }
                    }
                  ?>
                </select> -->
              <div class="input-group-btn">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeSwit">Search</button>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label">Program</label>
            <div class="input-group">
              <input class="form-control readonly" placeholder="== Pilih Program ==" name="txtProgMuncul" id="myInput3" required="true" value="<?php echo($program[0]['PROG_NAME'])?>">
              <input class="form-control" id="txtProg" type="hidden" name="txtProg" value="<?php echo($program[0]['PROG_ID'])?>">
              <!-- <select name="txtProg" id="cmbProg" required="true" class="form-control">
                <option value="0">== Pilih Program ==</option>
                  <?php  
                    foreach ($program as $row){
                      if ($row['PROG_ID'] == $workOrder[0]['WODE_PROG_ID']){
                  ?>
                          <option value="<?php echo $row['PROG_ID'] ?>" selected><?php echo $row['PROG_NAME']?></option>
                  <?php
                          } else {                               
                  ?>
                              <option value="<?php echo $row['PROG_ID'] ?>" ><?php echo $row['PROG_NAME']?></option>
                  <?php
                          }
                    }
                  ?>
                </select> -->
              <div class="input-group-btn">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeProg">Search</button>
              </div>
            </div>
          </div>
          <div class="form-group">
                  <label class=" control-label">Nama Lokasi</label>
                    <div>
                      <span id="qty">
                        <textarea class="form-control" type="text" name="txtLokasi" placeholder="Nama Lokasi" required="true"><?php echo($workOrder[0]['WODE_NAMA_LOKASI'])?></textarea>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" control-label">Alamat Lokasi</label>
                    <div>
                      <span id="qty">
                        <textarea class="form-control" type="text" name="txtAlamat" placeholder="Alamat Lokasi"><?php echo($workOrder[0]['WODE_ALAMAT'])?></textarea>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" control-label">Koordinat Lokasi</label>
                    <div>
                      <span id="qty">
                        <textarea class="form-control" type="text" name="txtKoordinat" placeholder="Alamat Lokasi"><?php echo($workOrder[0]['WODE_KOORDINAT'])?></textarea>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" control-label">Tanggal Masuk</label>
                    <div>
                      <span id="qty">
                        <input class="form-control" type="date" name="dateMasuk" required="true" value="<?php echo($workOrder[0]['WODE_TANGGAL'])?>"> 
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
            <label class="control-label">Status</label>
            <div>
              <select class="form-control" name="txtStat" id="cmbStat" required="true">
                <option value="0">== Pilih Status ==</option>
                  <?php  
                    foreach ($status as $row){
                      if ($row['STAT_ID'] == $workOrder[0]['WODE_STAT_ID']){
                  ?>
                          <option value="<?php echo $row['STAT_ID'] ?>" selected><?php echo $row['STAT_NAME']?></option>
                  <?php
                          } else {                               
                  ?>
                              <option value="<?php echo $row['STAT_ID'] ?>" ><?php echo $row['STAT_NAME']?></option>
                  <?php
                          }
                    }
                  ?>
              </select>
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
                          <tr class="search" style="cursor: pointer;" data-id = "<?=$row['WTEL_ID']?>" data-wtel = "<?=$row['WTEL_NAME']?>">
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


<!-- modal WodeSwit -->
<div class="modal fade" id="modalWodeSwit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Sub Witel</h4>
            </div>
            <div class="modal-body">
                <table id="tableSubWitel" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Sub Witel</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($subWitel as $row) {
                        ?>
                          <tr class="search2" style="cursor: pointer;" data-id2 = "<?=$row['SWIT_ID']?>" data-swit = "<?=$row['SWIT_NAME']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
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

<!-- modal WodeProg -->
<div class="modal fade" id="modalWodeProg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Program</h4>
            </div>
            <div class="modal-body">
                <table id="tableProgram" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Program</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($program as $row) {
                        ?>
                          <tr class="search3" style="cursor: pointer;" data-id3 = "<?=$row['PROG_ID']?>" data-prog = "<?=$row['PROG_NAME']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PROG_NAME']?></td>
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
    document.getElementById("txtWtel").value    = $(this).attr('data-id');
    document.getElementById("myInput").value    = $(this).attr('data-wtel');
        $('#modalWodeWtel').modal('hide');
  });;

    $(document).on('click', '.search2', function (e) {
    document.getElementById("txtSwit").value    = $(this).attr('data-id2');
    document.getElementById("myInput2").value     = $(this).attr('data-swit');
        $('#modalWodeSwit').modal('hide');
  });

    $(document).on('click', '.search3', function (e) {
    document.getElementById("txtProg").value    = $(this).attr('data-id3');
    document.getElementById("myInput3").value     = $(this).attr('data-prog');
        $('#modalWodeProg').modal('hide');
  });
</script>


<!-- =========================================================================================================================================== -->

<!-- <h3>Edit Work Order</h3>
<form action="<?php echo base_url().'C_workOrder/updateData/' .$workOrder[0]["WODE_ID"]; ?>" method="POST">
	<label>ID TA</label>
	<input type="text" name="txtIDTA" required="true" value="<?php echo($workOrder[0]['WODE_ID_TA'])?>"><br>
	<label>Witel</label>
	<select name="txtWtel" id="cmbWtel" required="true">
		<option value="0">== Pilih Witel ==</option>
		<?php  
			foreach ($witel as $row){
				if ($row['WTEL_ID'] == $workOrder[0]['WODE_WTEL_ID']){
		?>
		    		<option value="<?php echo $row['WTEL_ID'] ?>" selected><?php echo $row['WTEL_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['WTEL_ID'] ?>" ><?php echo $row['WTEL_NAME']?></option>
		<?php
		        }
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeWtel">Search</button><br>
	<label>Sub Witel</label>
	<select name="txtSwit" id="cmbSwit" required="true">
		<option value="0">== Pilih Sub Witel ==</option>
		<?php  
			foreach ($subWitel as $row){
				if ($row['SWIT_ID'] == $workOrder[0]['WODE_SWIT_ID']){
		?>
		    		<option value="<?php echo $row['SWIT_ID'] ?>" selected><?php echo $row['SWIT_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['SWIT_ID'] ?>" ><?php echo $row['SWIT_NAME']?></option>
		<?php
		        }
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeSwit">Search</button><br>
	<label>Program</label>
	<select name="txtProg" id="cmbProg" required="true">
		<option value="0">== Pilih Program ==</option>
		<?php  
			foreach ($program as $row){
				if ($row['PROG_ID'] == $workOrder[0]['WODE_PROG_ID']){
		?>
		    		<option value="<?php echo $row['PROG_ID'] ?>" selected><?php echo $row['PROG_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['PROG_ID'] ?>" ><?php echo $row['PROG_NAME']?></option>
		<?php
		        }
			}
		?>
	</select>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeProg">Search</button><br>
	<label>Nama Lokasi</label>
	<textarea type="text" name="txtLokasi" required="true"><?php echo($workOrder[0]['WODE_NAMA_LOKASI'])?></textarea><br>
	<label>Alamat Lokasi</label>
	<textarea type="text" name="txtAlamat"><?php echo($workOrder[0]['WODE_ALAMAT'])?></textarea><br>
	<label>Koordinat Lokasi</label>
	<textarea type="text" name="txtKoordinat"><?php echo($workOrder[0]['WODE_KOORDINAT'])?></textarea><br>
	<label>Tanggal Masuk</label>
	<input type="date" name="dateMasuk" required="true" value="<?php echo($workOrder[0]['WODE_TANGGAL'])?>"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				if ($row['STAT_ID'] == $workOrder[0]['WODE_STAT_ID']){
		?>
		    		<option value="<?php echo $row['STAT_ID'] ?>" selected><?php echo $row['STAT_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['STAT_ID'] ?>" ><?php echo $row['STAT_NAME']?></option>
		<?php
		        }
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form> 