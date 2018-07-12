<form action="<?php echo base_url(). 'C_mitra/updateData/' .$mitra[0]["MTRA_ID"]; ?>" method="POST">
	<h3>Edit Mitra</h3>
	<label>Nama Mitra</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($mitra[0]['MTRA_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>

</form>