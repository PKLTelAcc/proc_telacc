<!-- <table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Witel</th>
			<th>Work Order</th>
			<th>Survey</th>
		</tr>
	</thead>
	<?php 
	 ?>
	<tbody>
		<?php 
			$no=1;
			foreach ($dataStat as $row) {
		?>	
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['WTEL_NAME']; ?></td>
				<td><?php echo $row['jumlah'];?></td>
			</tr>
		<?php
			$no++;
			}
		?>
	</tbody>
</table> -->

<table border="1">
	<thead align="center">
		<tr>
			<th>WITEL</th>
			<th>DROP</th>
			<th> - </th>
			<th>GOLIVE</th>
		</tr>
	</thead>
	<tbody align="center">
		<tr>
			<td><?php echo $dataStat[0]['WTEL_NAME']; ?></td>
			<td><?php echo $dataStat[0]['jumlah']; ?></td>
			<td><?php echo $dataStat2[0]['jumlah']; ?></td>
			<td><?php echo $dataStat3[0]['jumlah']; ?></td>
		</tr>
		<tr>
			<td><?php echo $dataStat[1]['WTEL_NAME']; ?></td>
			<td><?php echo $dataStat[1]['jumlah']; ?></td>
			<td><?php echo $dataStat2[1]['jumlah']; ?></td>
			<td><?php echo $dataStat3[1]['jumlah']; ?></td>
		</tr>
	</tbody>
</table>

<h1><strong><marquee>HEHEHEHEHEHEHEHEHEHE :)</marquee></strong></h1>