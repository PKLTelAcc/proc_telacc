<form action="<?php echo base_url(). 'C_level/updateData/' .$level[0]["LEVE_ID"]; ?>" method="POST">
	<h3>Edit Level</h3>
	<label>Nama Level</label>
	<input type="text" name="txtLevel" required="true" value="<?php echo($level[0]['LEVE_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>

</form>