<form action="<?php echo base_url(). 'C_pegawai/form'; ?>" method="POST">
	<h3>Input Pegawai</h3>
	<label>Nama Pegawai</label>
	<input type="text" name="txtNama" required="true"><br>
	<label>NIK</label>
	<input type="number" name="txtNik" required="true"><br>
	<label>PSA</label>
	<input type="number" name="txtpsa" required="true">	
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data pegawai</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama pegawai</th>
			<th>Nik</th>
			<th>PSA</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($pegawai as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['PEGA_NAME']."</td>";
				echo "<td>".$row['PEGA_NIK']."</td>";
				echo "<td>".$row['PEGA_PSA']."</td>";
				echo "<td><a href='".base_url()."C_pegawai/FormUpdate/".$row['PEGA_ID']."'>Edit</a> | <a href='".base_url()."C_pegawai/delete/".$row['PEGA_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>