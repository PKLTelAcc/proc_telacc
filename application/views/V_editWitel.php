<form action="<?php echo base_url(). 'C_witel/updateData'; ?>" method="POST">
	<h3>Edit Witel</h3>
	<label>Nama Witel</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($witel[0]['WTEL_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>