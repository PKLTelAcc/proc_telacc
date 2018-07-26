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
			<?php
			$s=$this->M_cobaDulu->status();
			foreach ($s as $row) {
				echo "<th>".$row['STAT_NAME']."</th>";
			}
			 ?>
			 <th>Total</th>
		</tr>
	</thead>
	<tbody align="center">
		<?php
		$i=$this->M_cobaDulu->getWitel();
		$total = 0;
		foreach ($i as $row) {
			?>
			<tr>
				<th><?=$row['WTEL_NAME']?></th>
				<?php
					$hanip = $this->M_cobaDulu->getStat($row['WTEL_ID']);
					foreach ($hanip as $key) {
						?>
						<td><?=$key['jumlah']?></td>
						<?php
						$total = $total + $key['jumlah'];
					}
				?>
				<td><?=$total?></td>
			</tr>
			<?php
			$total = 0;
		}
		?>
	</tbody>
</table>

<h1><strong><marquee>HEHEHEHEHEHEHEHEHEHE :)</marquee></strong></h1>