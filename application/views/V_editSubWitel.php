<h3>Edit Sub Witel</h3>
<form action="<?php echo base_url(). 'C_subWitel/updateData/' .$update[0]["SWIT_ID"]; ?>" method="POST">
	<label>nama witel</label>
	<select name="txtnamaWitel">
					      <option>== Pilih Witel ==</option>
					      <?php  

					        foreach ($witel as $row){
                              if ($row['WTEL_ID'] == $update[0]['SWIT_WTEL_ID']){
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
	<label>nama sub witel</label>
	<input  type="text"  name="txtnamaSub" required="true" value="<?php echo($update[0]['SWIT_NAME'])?>">  <br>
	<button type="reset">Cancel</button>
	<button type="submit">Input Data</button>
</form>