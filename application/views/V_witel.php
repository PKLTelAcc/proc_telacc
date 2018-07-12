<h3>Input Witel</h3>

<form action="<?php echo base_url(). 'C_witel/form'; ?>" method="POST">
	<label>Nama Witel</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Witel</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Witel</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($witel as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td><a href='".base_url()."C_witel/FormUpdate/".$row['WTEL_ID']."'>Edit</a> | <a href='".base_url()."C_witel/delete/".$row['WTEL_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>