<h3>Edit Work Order</h3>
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

<!-- modal WodeWtel -->
<div class="modal fade" id="modalWodeWtel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<!-- modal WodeSwit -->
<div class="modal fade" id="modalWodeSwit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Sub Witel</h4>
            </div>
            <div class="modal-body">
                <table id="subWitel" class="table table-bordered table-hover table-striped">
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
                          <tr class="search2" style="cursor: pointer;" data-id2 = "<?=$row['SWIT_ID']?>">
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
                <table id="program" class="table table-bordered table-hover table-striped">
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
                          <tr class="search3" style="cursor: pointer;" data-id3 = "<?=$row['PROG_ID']?>">
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
		document.getElementById("cmbWtel").value 		= $(this).attr('data-id');
        $('#modalWodeWtel').modal('hide');
	});

		$(document).on('click', '.search2', function (e) {
		document.getElementById("cmbSwit").value 		= $(this).attr('data-id2');
        $('#modalWodeSwit').modal('hide');
	});

		$(document).on('click', '.search3', function (e) {
		document.getElementById("cmbProg").value 		= $(this).attr('data-id3');
        $('#modalWodeProg').modal('hide');
	});
</script>