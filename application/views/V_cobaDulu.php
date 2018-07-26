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
