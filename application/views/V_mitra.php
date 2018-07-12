<form action="<?php echo base_url(). 'C_mitra/form'; ?>" method="POST">
	<h3>Input Mitra</h3>
	<label>Nama Mitra</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Mitra</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Mitra</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($mitra as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['MTRA_NAME']."</td>";
				echo "<td><a href='".base_url()."C_mitra/FormUpdate/".$row['MTRA_ID']."'>Edit</a> | <a href='".base_url()."C_mitra/delete/".$row['MTRA_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>