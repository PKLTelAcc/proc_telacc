<h3>Edit Survey</h3>
<form action="<?php echo base_url().'C_survey/updateData/' .$survey[0]["SURV_ID"]; ?>" method="POST">
	<label>ID TA</label>
	<input name="txtIDTAMuncul" id="myInput" required="true" value="<?php echo($survey[0]['WODE_ID_TA'])?>">
	<input id="txtIDTA" type="hidden" name="txtIDTA" >
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTA">Search</button><br>	
	<label>Witel</label>
	<input id="inputWitel" type="text" name="txtWtelMuncul" required="true" readonly="true" value="<?php echo($survey[0]['WTEL_NAME'])?>">
	<input id="witel" type="hidden" name="txtWtel" value="<?php echo($survey[0]['WTEL_ID'])?>"><br>
	<label>Sub Witel</label>
	<input id="inputSubWitel" type="text" name="txtSwitMuncul" required="true" readonly="true" value="<?php echo($survey[0]['SWIT_NAME'])?>">
	<input id="subWitel" type="hidden" name="txtSwit" value="<?php echo($survey[0]['SWIT_ID'])?>"><br>
	<label>Program</label>
	<input id="inputProgram" type="text" name="txtProgMuncul" required="true" readonly="true" value="<?php echo($survey[0]['PROG_NAME'])?>">
	<input id="program" type="hidden" name="txtProg" value="<?php echo($survey[0]['PROG_ID'])?>"><br>
	<label>Nama Lokasi</label>
	<input id="namaLokasi" type="text" name="txtLokasi" required="true" readonly="true" value="<?php echo($survey[0]['WODE_NAMA_LOKASI'])?>"><br>
	<label>Nilai Material</label>
	<input type="number" name="txtMaterial" required="true" value="<?php echo($survey[0]['SURV_MATERIAL'])?>"><br>
	<label>Nilai Jasa</label>
	<input type="number" name="txtJasa" required="true" value="<?php echo($survey[0]['SURV_JASA'])?>"><br>
	<label>Nilai Total</label>
	<input type="number" name="txtTotal" required="true" value="<?php echo($survey[0]['SURV_TOTAL'])?>"><br>
	<label>Jumlah ODP</label>
	<input type="number" name="txtODP" required="true" value="<?php echo($survey[0]['SURV_ODP'])?>"><br>
	<label>Nama Surveyer</label>
	<input name="txtSurveyerMuncul" id="myInput2" required="true" value="<?php echo($survey[0]['PEGA_NAME'])?>">
	<input id="txtSurveyer" type="hidden" name="txtSurveyer" value="<?php echo($survey[0]['PEGA_ID'])?>">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button><br>
	<label>NIK Surveyer</label>
	<input id="nik" type="text" name="txtNIK" required="true" readonly="true" value="<?php echo($survey[0]['PEGA_NIK'])?>"><br>
	<label>Tanggal Selesai Survey</label>
	<input type="date" name="dateSurvey" required="true" value="<?php echo($survey[0]['SURV_TANGGAL'])?>"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				if ($row['STAT_ID'] == $survey[0]['SURV_STAT_ID']){
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

<!-- modal IDTA -->
<div class="modal fade" id="modalIDTA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <th>Witel</th>
                        <th>Sub Witel</th>
                        <th>Program</th>
                       	<th>Nama Lokasi</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($workOrder as $row) {
                        ?>
                          <tr class="isi" style="cursor: pointer;" data-id = "<?=$row['WODE_ID']?>" data-lokasi="<?php echo $row['WODE_NAMA_LOKASI']; ?>" data-program="<?php echo $row['PROG_ID']; ?>" data-inputProgram="<?php echo $row['PROG_NAME']; ?>" data-subWitel="<?php echo $row['SWIT_ID']; ?>" data-inputSubWitel="<?php echo $row['SWIT_NAME']; ?>" data-witel="<?php echo $row['WTEL_ID']; ?>" data-idta="<?php echo $row['WODE_ID_TA']; ?>" data-inputWitel="<?php echo $row['WTEL_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WODE_ID_TA']?></td>
                            <td><?php echo $row['WTEL_NAME']?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
                            <td><?php echo $row['PROG_NAME']?></td>
                            <td><?php echo $row['WODE_NAMA_LOKASI']?></td>
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
<div class="modal fade" id="modalSurveyer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Surveyer</h4>
            </div>
            <div class="modal-body">
                <table id="surveyer" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIK Surveyer</th>
                        <th>Nama Surveyer</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($pegawai as $row) {
                        ?>
                          <tr class="isi2" style="cursor: pointer;" data-id2 = "<?=$row['PEGA_ID']?>" data-nik="<?php echo $row['PEGA_NIK']; ?>" data-pegawai="<?php echo $row['PEGA_NAME']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PEGA_NIK']?></td>
                            <td><?php echo $row['PEGA_NAME']?></td>
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
        document.getElementById("namaLokasi").value 	= $(this).attr('data-lokasi');
        document.getElementById("program").value 		= $(this).attr('data-program');
        document.getElementById("inputProgram").value 	= $(this).attr('data-inputProgram');
        document.getElementById("subWitel").value 		= $(this).attr('data-subWitel');
        document.getElementById("inputSubWitel").value 	= $(this).attr('data-inputSubWitel');
        document.getElementById("witel").value 			= $(this).attr('data-witel');
        document.getElementById("inputWitel").value 	= $(this).attr('data-inputWitel');
        $('#modalIDTA').modal('hide');
	});

    $(document).on('click', '.isi2', function (e) {
		document.getElementById("txtSurveyer").value 		= $(this).attr('data-id2');
        document.getElementById("myInput2").value 		= $(this).attr('data-pegawai');
        document.getElementById("nik").value 			= $(this).attr('data-nik');
        $('#modalSurveyer').modal('hide');        
    });
</script>
