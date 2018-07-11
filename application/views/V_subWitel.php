<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Input sub witel</h3>
	<form <?php echo base_url(). 'C_subWitel/form'; ?>" method="POST">
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

	<h3>Data Sub Witel</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($subwitel as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_subWitel/formUpdate/".$row['SWIT_ID']."'>Edit</a> | <a href='".base_url()."C_subWitel/delete/".$row['SWIT_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>
</body>
</html>