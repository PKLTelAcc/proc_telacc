<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Input sub witel</h3>
	<form <?php echo base_url(). 'c_barangChild/form'; ?>" method="POST">
		<label>Witel</label>
		<select name="txtnamaWitel">
			<option>====> Witel <====</option>
			<?php  
			foreach ($witel as $row){
				echo "<option value='".$row['WTEL_ID']."'>";
				echo $row ['WTEL_NAME'];
				echo "</option>";
				}
			?>
		</select><br>
		<label>Sub Witel</label>
		<input type="text" name="txtsubWitel">
		<button type="submit">Submit</button>
		<button type="reset">Cancel</button>
	</form>

	<table>
		<tr>
			<th>witel</th>
			<th>sub witel</th>
		</tr>
	</table>	
</body>
</html>