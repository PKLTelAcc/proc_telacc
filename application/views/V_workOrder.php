<h3>Input Work Order</h3>
<form action="<?php echo base_url().'C_workOrder/form';?>" method="POST">
	<label>ID TA</label>
	<input type="text" name="txtIDTA" required="true"><br>
	<label>Witel</label>
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
	<label>Sub Witel</label>
	<select name="txtSwit" id="cmbSwit" required="true">
		<option value="0">== Pilih Sub Witel ==</option>
		<?php  
			foreach ($subWitel as $row){
				echo "<option value='".$row['SWIT_ID']."'>";
				echo $row ['SWIT_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<label>Program</label>
	<select name="txtProg" id="cmbProg" required="true">
		<option value="0">== Pilih Program ==</option>
		<?php  
			foreach ($program as $row){
				echo "<option value='".$row['PROG_ID']."'>";
				echo $row ['PROG_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<label>Nama Lokasi</label>
	<textarea type="text" name="txtLokasi" required="true"></textarea><br>
	<label>Alamat Lokasi</label>
	<textarea type="text" name="txtAlamat"></textarea><br>
	<label>Koordinat Lokasi</label>
	<textarea type="text" name="txtKoordinat"></textarea><br>
	<label>Tanggal Masuk</label>
	<input type="date" name="dateMasuk" required="true"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				echo "<option value='".$row['STAT_ID']."'>";
				echo $row ['STAT_NAME'];
				echo "</option>";
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>

<hr>

<h3>Data Work Order</h3>
<table border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>ID TA</th>
			<th>Nama Witel</th>
			<th>Nama Sub Witel</th>
			<th>Program</th>
			<th>Nama Lokasi</th>
			<th>Alamat Lokasi</th>
			<th>Koordinat Lokasi</th>
			<th>Tanggal Masuk</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$no=1;
			foreach ($workOrder as $row) {
				echo "<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$row['WODE_ID_TA']."</td>";
				echo "<td>".$row['WTEL_NAME']."</td>";
				echo "<td>".$row['SWIT_NAME']."</td>";
				echo "<td>".$row['PROG_NAME']."</td>";
				echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
				echo "<td>".$row['WODE_ALAMAT']."</td>";
				echo "<td>".$row['WODE_KOORDINAT']."</td>";
				echo "<td>".$row['WODE_TANGGAL']."</td>";
				echo "<td>".$row['STAT_NAME']."</td>";
				echo "<td><a href='".base_url()."C_workOrder/formUpdate/".$row['WODE_ID']."'>Edit</a> | <a href='".base_url()."C_workOrder/delete/".$row['WODE_ID']."'>Delete</a></td>";
				echo "</tr>";

				$no++;
			}
		 ?>
	</tbody>
</table>