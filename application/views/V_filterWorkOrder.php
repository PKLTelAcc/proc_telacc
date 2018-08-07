<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>Nama Witel</th>
						<th>Nama Sub Witel</th>
						<th>Program</th>
						<th>Sub Program</th>
						<th>Nama Lokasi</th>
						<th>Alamat Lokasi</th>
						<th>Koordinat Lokasi</th>
						<th>Tanggal Masuk</th>
						<th>Status</th>
						<th style="text-align: center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($workOrder as $row) {
							if($row['STAT_NAME']=='WORK ORDER' || $row['STAT_NAME']=='DROP'){
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
							echo "<td>".$row['WODE_TANGGAL']."</td>";
							echo "<td>".$row['STAT_NAME']."</td>";
							echo "<td><a href='".base_url()."C_workOrder/formUpdate/".$row['WODE_ID']."'>Edit</a> | <a href='".base_url()."C_workOrder/delete/".$row['WODE_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
							echo "</tr>";
						}
							$no++;
							}
					 ?>
				</tbody>
			</table>