<form action="<?php echo base_url(). 'C_status/updateData/' .$status[0]["STAT_ID"]; ?>" method="POST">
	<h3>Edit Status</h3>
	<label>Nama Status</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($status[0]['STAT_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>