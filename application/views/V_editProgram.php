<form action="<?php echo base_url(). 'C_program/updateData/' .$program[0]["PROG_ID"]; ?>" method="POST">
	<h3>Edit Program</h3>
	<label>Nama Program</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($program[0]['PROG_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>