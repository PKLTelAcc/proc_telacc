<table class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>ID TA</th>
						<th>No BAST</th>
						<th>No Po</th>
						<th>Nilai Material</th>
						<th>Nilai Jasa</th>
						<th>Nilai Total</th>
						<th>Jumlah ODP</th>
						<th>Tanggal Bast</th>
						<th style="text-align: center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no=1;
						foreach ($bast as $row) {
							echo "<tr>";
							echo "<td>".$no."</td>";
							echo "<td>".$row['WODE_ID_TA']."</td>";;
							echo "<td>".$row['BAST_NO']."</td>";
							echo "<td>".$row['SPTL_NO_PO']."</td>";
							echo "<td>".$row['INST_MATERIAL']."</td>";
							echo "<td>".$row['INST_JASA']."</td>";
							echo "<td>".$row['INST_TOTAL']."</td>";
							echo "<td>".$row['INST_ODP']."</td>";
							echo "<td>".$row['BAST_TANGGAL']."</td>";
							echo "<td><a href='".base_url()."C_bast/formUpdate/".$row['BAST_ID']."'>Edit</a> | <a href='".base_url()."C_bast/delete/".$row['BAST_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a></td>";
							echo "</tr>";

							$no++;
						}
					 ?>
				</tbody>
			</table>