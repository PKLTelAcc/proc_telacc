<table class="table table-bordered table-hover table-striped" id="LAPORAN_Wode">
				<thead>
					<tr>
						<th>No</th>
						<th>ID TA</th>
						<th>Witel</th>
						<th>Sub Witel</th>
						<th>Program</th>
						<th>sub Program</th>
						<th>Nama Lokasi</th>
						<th>Alamat Lokasi</th>
						<th>Koordinat Lokasi</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=1;
		 				foreach ($dataReportByWitelWode as $row) {
		 				if($row['STAT_NAME']=='WORK ORDER'){
		 					echo "<tr>";
		 					echo "<td>".$no."</td>";
		 					echo "<td>".$row['WODE_ID_TA']."</td>";
		 					echo "<td>".$row['WTEL_NAME']."</td>";
		 					echo "<td>".$row['SWIT_NAME']."</td>";
		 					echo "<td>".$row['PROG_NAME']."</td>";
		 					echo "<td>".$row['SUPR_NAME']."</td>";
		 					echo "<td>".$row['WODE_NAMA_LOKASI']."</td>";
		 					echo "<td>".$row['WODE_ALAMAT']."</td>";
		 					echo "<td>".$row['WODE_KOORDINAT']."</td>";
		 					echo "<td>".$row['STAT_NAME']."</td>";
		 					echo "</tr>";
		 				}
		 					$no++;
		 				}
		 			 ?>
				</tbody>
			</table>