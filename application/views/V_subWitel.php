<h3>Input Sub Witel</h3>

<form action="<?php echo base_url(). 'C_subWitel/form'; ?>" method="POST">
	<label>Nama Witel</label>
	<select name="txtWtel" id="cmbWtel" required="true">
		<option value="0">== Pilih Witel ==</option>
		<?php  
			foreach ($witel as $row){
				echo "<option value='".$row['WTEL_ID']."'>";
				echo $row ['WTEL_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<label>Nama Sub Witel</label>
	<input type="text" name="txtNama" required="true">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Sub Witel</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Sub Witel</th>
			<th>Nama Witel</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($sub_witel as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td><a href='".base_url()."C_subWitel/formUpdate/".$row['SWIT_ID']."'>Edit</a> | <a href='".base_url()."C_subWitel/delete/".$row['SWIT_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>