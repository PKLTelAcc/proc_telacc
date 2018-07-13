<h3>Input Survey</h3>
<form action="<?php echo base_url().'C_survey/form'; ?>" method="POST">
	<label>ID TA</label>
	<select name="txtIDTA" id="cmbIDTA" required="true">
		<option value="0">== ID TA ==</option>
		<?php  
			foreach ($workOrder as $row){
				echo "<option value='".$row['WODE_ID']."'>";
				echo $row ['WODE_ID_TA'];
				echo "</option>";
			}
		?>
	</select> <br>
	<label>Witel</label>
	<input type="text" name="txtWtel" required="true" readonly="true"><br>
	<label>Sub Witel</label>
	<input type="text" name="txtSwit" required="true" readonly="true"><br>
	<label>Nama Lokasi</label>
	<input type="text" name="txtLokasi" required="true" readonly="true"><br>
	<label>Nilai Material</label>
	<input type="number" name="txtMaterial" required="true"><br>
	<label>Nilai Jasa</label>
	<input type="number" name="txtJasa" required="true"><br>
	<label>Nilai Total</label>
	<input type="number" name="txtTotal" required="true"><br>
	<label>Jumlah ODP</label>
	<input type="number" name="txtODP" required="true"><br>
	<label>Nama Surveyer</label>
	<select name="txtSurveyer" id="cmbSurveyer" required="true">
		<option value="0">== Nama Surveyer ==</option>
		<?php  
			foreach ($pegawai as $row){
				echo "<option value='".$row['PEGA_ID']."'>";
				echo $row ['PEGA_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<label>NIK Surveyer</label>
	<input type="text" name="txtNIK" required="true" readonly="true"><br>
	<label>Tanggal Selesai Survey</label>
	<label>Status</label>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>