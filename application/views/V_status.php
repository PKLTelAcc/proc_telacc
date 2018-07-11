<form action="<?php echo base_url(). 'C_status/form'; ?>" method="POST">
	<h3>Input Status</h3>
	<label>Nama Status</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Status</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($status as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_status/FormUpdate/".$row['STAT_ID']."'>Edit</a> | <a href='".base_url()."C_status/delete/".$row['STAT_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>