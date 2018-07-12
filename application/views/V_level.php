<form action="<?php echo base_url(). 'C_level/form'; ?>" method="POST">
	<h3>Input Level</h3>
	<label>Nama Level</label>
	<input type="text" name="txtLevel" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Mitra</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Level</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($level as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['LEVE_NAME']."</td>";
				echo "<td><a href='".base_url()."C_level/FormUpdate/".$row['LEVE_ID']."'>Edit</a> | <a href='".base_url()."C_level/delete/".$row['LEVE_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>