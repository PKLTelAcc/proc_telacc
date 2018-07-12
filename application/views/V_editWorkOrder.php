<h3>Edit Work Order</h3>
<form action="<?php echo base_url().'C_workOrder/updateData/' .$workOrder[0]["WODE_ID"]; ?>" method="POST">
	<label>ID TA</label>
	<input type="text" name="txtIDTA" required="true" value="<?php echo($workOrder[0]['WODE_ID_TA'])?>"><br>
	<label>Witel</label>
	<select name="txtWtel" id="cmbWtel" required="true">
		<option value="0">== Pilih Witel ==</option>
		<?php  
			foreach ($witel as $row){
				if ($row['WTEL_ID'] == $workOrder[0]['WODE_WTEL_ID']){
		?>
		    		<option value="<?php echo $row['WTEL_ID'] ?>" selected><?php echo $row['WTEL_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['WTEL_ID'] ?>" ><?php echo $row['WTEL_NAME']?></option>
		<?php
		        }
			}
		?>
	</select> <br>
	<label>Sub Witel</label>
	<select name="txtSwit" id="cmbSwit" required="true">
		<option value="0">== Pilih Sub Witel ==</option>
		<?php  
			foreach ($subWitel as $row){
				if ($row['SWIT_ID'] == $workOrder[0]['WODE_SWIT_ID']){
		?>
		    		<option value="<?php echo $row['SWIT_ID'] ?>" selected><?php echo $row['SWIT_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['SWIT_ID'] ?>" ><?php echo $row['SWIT_NAME']?></option>
		<?php
		        }
			}
		?>
	</select> <br>
	<label>Program</label>
	<select name="txtProg" id="cmbProg" required="true">
		<option value="0">== Pilih Program ==</option>
		<?php  
			foreach ($program as $row){
				if ($row['PROG_ID'] == $workOrder[0]['WODE_PROG_ID']){
		?>
		    		<option value="<?php echo $row['PROG_ID'] ?>" selected><?php echo $row['PROG_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['PROG_ID'] ?>" ><?php echo $row['PROG_NAME']?></option>
		<?php
		        }
			}
		?>
	</select> <br>
	<label>Nama Lokasi</label>
	<textarea type="text" name="txtLokasi" required="true"><?php echo($workOrder[0]['WODE_NAMA_LOKASI'])?></textarea><br>
	<label>Alamat Lokasi</label>
	<textarea type="text" name="txtAlamat"><?php echo($workOrder[0]['WODE_ALAMAT'])?></textarea><br>
	<label>Koordinat Lokasi</label>
	<textarea type="text" name="txtKoordinat"><?php echo($workOrder[0]['WODE_KOORDINAT'])?></textarea><br>
	<label>Tanggal Masuk</label>
	<input type="date" name="dateMasuk" required="true" value="<?php echo($workOrder[0]['WODE_TANGGAL'])?>"><br>
	<label>Status</label>
	<select name="txtStat" id="cmbStat" required="true">
		<option value="0">== Pilih Status ==</option>
		<?php  
			foreach ($status as $row){
				if ($row['STAT_ID'] == $workOrder[0]['WODE_STAT_ID']){
		?>
		    		<option value="<?php echo $row['STAT_ID'] ?>" selected><?php echo $row['STAT_NAME']?></option>
		<?php
		        } else {                               
		?>
		           	<option value="<?php echo $row['STAT_ID'] ?>" ><?php echo $row['STAT_NAME']?></option>
		<?php
		        }
			}
		?>
	</select> <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>