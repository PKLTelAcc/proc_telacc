<h3>Edit Sub Witel</h3>
<form action="<?php echo base_url(). 'C_subWitel/updateData/' .$sub_witel[0]["SWIT_ID"]; ?>" method="POST">
	<label>Nama Witel</label>
	<select name="txtWtel" id="cmbWtel" required="true">
		<option value="0">== Pilih Witel ==</option>
		<?php  
			foreach ($witel as $row){
				if ($row['WTEL_ID'] == $sub_witel[0]['SWIT_WTEL_ID']){
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
	<label>Nama Sub Witel</label>
	<input type="text" name="txtNama" required="true" value="<?php echo($sub_witel[0]['SWIT_NAME'])?>">
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>