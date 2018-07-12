<form action="<?php echo base_url(). 'C_pegawai/updateData/' .$pegawai[0]["PEGA_ID"]; ?>" method="POST">
	<h3>Edit Pegawai</h3>
	<label>Nama Pegawai</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($pegawai[0]['PEGA_NAME'])?>"><br>
	<label>NIK</label>
	<input type="number" name="txtNik" required="true" value="<?php echo($pegawai[0]['PEGA_NIK'])?>"><br>
	<label>PSA</label>
	<input type="number" name="txtpsa" required="true" value="<?php echo($pegawai[0]['PEGA_PSA'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>

</form>