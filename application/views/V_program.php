<form action="<?php echo base_url(). 'C_program/form'; ?>" method="POST">
	<h3>Input Program</h3>
	<label>Nama Program</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Program</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Program</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($program as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['PROG_NAME']."</td>";
				echo "<td><a href='".base_url()."C_program/FormUpdate/".$row['PROG_ID']."'>Edit</a> | <a href='".base_url()."C_program/delete/".$row['PROG_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>