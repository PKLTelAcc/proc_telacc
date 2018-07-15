<h3>Input Survey</h3>
<form action="<?php echo base_url().'C_survey/form'; ?>" method="POST">
	<label>ID TA</label>
	<input name="txtIDTAMuncul" id="myInput" required="true">
	<input id="txtIDTA" type="hidden" name="txtIDTA">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalIDTASurvey">Search</button><br>	
	<label>Witel</label>
	<input id="inputWitel" type="text" name="txtWtelMuncul" required="true" readonly="true">
	<input id="witel" type="hidden" name="txtWtel"><br>
	<label>Sub Witel</label>
	<input id="inputSubWitel" type="text" name="txtSwitMuncul" required="true" readonly="true">
	<input id="subWitel" type="hidden" name="txtSwit"><br>
	<label>Program</label>
	<input id="inputProgram" type="text" name="txtProgMuncul" required="true" readonly="true">
	<input id="program" type="hidden" name="txtProg"><br>
	<label>Nama Lokasi</label>
	<input id="namaLokasi" type="text" name="txtLokasi" required="true" readonly="true"><br>
	<label>Nilai Material</label>
	<input type="number" name="txtMaterial" required="true"><br>
	<label>Nilai Jasa</label>
	<input type="number" name="txtJasa" required="true"><br>
	<label>Nilai Total</label>
	<input type="number" name="txtTotal" required="true"><br>
	<label>Jumlah ODP</label>
	<input type="number" name="txtODP" required="true"><br>
	<label>Nama Surveyer</label>
	<input name="txtSurveyerMuncul" id="myInput2" required="true">
	<input id="txtSurveyer" type="hidden" name="txtSurveyer">
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalSurveyer">Search</button><br>
	<label>NIK Surveyer</label>
	<input id="nik" type="text" name="txtNIK" required="true" readonly="true"><br>
	<label>Tanggal Selesai Survey</label>
	<input type="date" name="dateSurvey" required="true"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				echo "<option value='".$row['STAT_ID']."'>";
				echo $row ['STAT_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Survey</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
<!-- 			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th> -->
			<th>Nilai Material</th>
			<th>Nilai Jasa</th>
			<th>Nilai Total</th>
			<th>Jumlah ODP</th>
			<th>Nama Surveyer</th>
			<th>NIK Surveyer</th>
			<th>Tanggal Selesai Survey</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($survey as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				// echo "<td>".$row['WTEL_NAME']."</td>";
				// echo "<td>".$row['SWIT_NAME']."</td>";
				// echo "<td>".$row['PROG_NAME']."</td>";
				// echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['SURV_MATERIAL']."</td>";
				echo "<td>".$row['SURV_JASA']."</td>";
				echo "<td>".$row['SURV_TOTAL']."</td>";
				echo "<td>".$row['SURV_ODP']."</td>";
				echo "<td>".$row['PEGA_NAME']."</td>";
				echo "<td>".$row['PEGA_NIK']."</td>";
				echo "<td>".$row['SURV_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_survey/formUpdate/".$row['SURV_ID']."'>Edit</a> | <a href='".base_url()."C_survey/delete/".$row['SURV_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>

<!-- modal IDTA -->
<div class="modal fade" id="modalIDTASurvey" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Work Order</h4>
            </div>
            <div class="modal-body">
                <table id="lookup" class="table table-bordered table-hover table-striped">
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
                <table id="dataTableSurveyer" class="table table-bordered table-hover table-striped">
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
        $('#modalIDTASurvey').modal('hide');
	});

    $(document).on('click', '.isi2', function (e) {
		document.getElementById("txtSurveyer").value 		= $(this).attr('data-id2');
        document.getElementById("myInput2").value 		= $(this).attr('data-pegawai');
        document.getElementById("nik").value 			= $(this).attr('data-nik');
        $('#modalSurveyer').modal('hide');        
    });
</script>

