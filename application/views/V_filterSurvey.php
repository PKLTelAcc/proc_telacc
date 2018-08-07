<table class="table table-bordered table-hover table-striped" id="lookup">

				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
<!-- KOMEN INI JANGAN DIHAPUS -->
						<!-- <th>Nama Surveyer</th>
						<th>NIK Surveyer</th> -->
<!-- SAMPAI SINI -->
						<th>Tanggal Selesai Survey</th>
						<th>Status</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($survey as $row) {
							if($row['STAT_NAME']=='SURVEY'){
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";
							echo "<td>".$row['SURV_MATERIAL']."</td>";
							echo "<td>".$row['SURV_JASA']."</td>";
							echo "<td>".$row['SURV_TOTAL']."</td>";
							echo "<td>".$row['SURV_ODP']."</td>";
//KOMEN INI JANGAN DIHAPUS
							// echo "<td>".$row['PEGA_NAME']."</td>";
							// echo "<td>".$row['PEGA_NIK']."</td>";
//SAMPAI SINI
							echo "<td>".$row['SURV_TANGGAL']."</td>";
							echo "<td>".$row['STAT_NAME']."</td>";
							echo "<td><a href='".base_url()."C_survey/formUpdate/".$row['SURV_ID']."'>Edit</a> | <a href='".base_url()."C_survey/delete/".$row['SURV_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
							echo "</tr>";
							}

							$no++;
						}
					 ?>
				</tbody>
			</table>