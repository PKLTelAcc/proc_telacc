<table border="1">
	<thead align="center">
		<tr>
			<th>WITEL</th>
			<?php
			$thead=$this->M_cobaDulu->getStatus();
			foreach ($thead as $row) {
				echo "<th>".$row['STAT_NAME']."</th>";
			}
			 ?>
			 <th>Total</th>
		</tr>
	</thead>
	<tbody align="center">
		<?php
		$witel=$this->M_cobaDulu->getWitel();
		$total = 0;
		foreach ($witel as $row) {
			?>
			<tr>
				<th><?=$row['WTEL_NAME']?></th>
				<?php
					$count = $this->M_cobaDulu->getCount($row['WTEL_ID']);
					foreach ($count as $key) {
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
