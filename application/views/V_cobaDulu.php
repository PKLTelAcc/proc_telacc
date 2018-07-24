<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Witel</th>
			<th>Work Order</th>
		</tr>
	</thead>
	<?php 
	 ?>
	<tbody>
		<?php 
			$no=1;
			foreach ($dataIDTA as $row) {
		?>	
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['WTEL_NAME']; ?></td>
				<td><?php echo $row['jumlah'] ;?></td>
			</tr>
		<?php
			$no++;
			}
		?>
	</tbody>
</table>