<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
						<th>Mitra</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Waspang</th>
						<th>NIK Waspang</th> -->
<!-- SAMPAI SINI -->
						<th>Tanggal Selesai Survey</th>
						<th>Target Selesai</th>
						<th>Status</th>
						<th>Status Instalasi</th>
						<th>Progres</th>
						<th>Kendala</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($instalasi as $row) {
							if($row['STAT_NAME']=='INSTALASI' || $row['STAT_NAME']=='BAST' || $row['STAT_NAME']=='DROP'){
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";
							echo "<td>".$row['INST_MATERIAL']."</td>";
							echo "<td>".$row['INST_JASA']."</td>";
							echo "<td>".$row['INST_TOTAL']."</td>";
							echo "<td>".$row['INST_ODP']."</td>";
							echo "<td>".$row['MTRA_NAME']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
							echo "<td>".$row['INST_TANGGAL']."</td>";
							echo "<td>".$row['INST_TARGET']."</td>";
							echo "<td>".$row['STAT_NAME']."</td>";
							echo "<td>".$row['STIN_NAME']."</td>";
							echo "<td>".$row['INST_PROGRES']."</td>";
							echo "<td>".$row['INST_KENDALA']."</td>";
							echo "<td><a href='".base_url()."C_instalasi/formUpdate/".$row['INST_ID']."'>Edit</a> | <a href='".base_url()."C_instalasi/delete/".$row['INST_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
							echo "</tr>";
							}

							$no++;
						}
					 ?>
				</tbody>
			</table>