<!-- Main content -->
<div class="content">
	<div class="row">
		<?php
      if ($_SESSION['level'] == 'SUPER USER') {
        ?>
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Input Data</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
	        <div class="row">
	          <div class="col-md-12 ">
	            <form action="<?php echo base_url(). 'C_user/formRegister'; ?>"  method="post">
	              <div class="form-group">
	                  <label class=" control-label">Username</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="text"  name="txtusername" >  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
	                  <label class=" control-label">Password</label>
	                  <div>
	                    <span id="qty">
	                      <input class="form-control" type="password"  name="txtpassword" >  
	                    </span>
	                  </div>
	              </div>
	              <div class="form-group">
					<label class="control-label">Nama Pegawai</label>
						<div class="input-group">
						  <!-- /btn-group -->
						  <select name="cmbNamaPega" id="cmbNamaPega" class="form-control">
						    <option value="0">== Pilih Pegawai ==</option>
						    <?php  
						      foreach ($dataPegawai as $row){
						        echo "<option value='".$row['PEGA_ID']."'>";
						        echo $row ['PEGA_NAME'];
						       echo "</option>";
						      }
						    ?>
						  </select> 
						  <div class="input-group-btn">
						    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalRegister">Search</button>
						  </div>
						</div>
					</div>
					<div class="form-group">
					<label class="control-label">Posisi Witel</label>
						<div class="input-group">
						  <!-- /btn-group -->
						  <select name="cmbNamaWtel" id="cmbNamaWtel" class="form-control">
						    <option value="0">== Pilih Witel ==</option>
						    <?php  
						      foreach ($dataWitel as $row){
						        echo "<option value='".$row['WTEL_ID']."'>";
						        echo $row ['WTEL_NAME'];
						       echo "</option>";
						      }
						    ?>
						  </select> 
						  <div class="input-group-btn">
						    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWtel">Search</button>
						  </div>
						</div>
					</div>
	              <div class="form-group">
	                  <label >Level</label>
	                  <div>
	                      <select name="level" class="form-control">
	                      	<option value="0">== Pilih Level ==</option>
		 					<?php  
		 					foreach ($dataLevel as $row){
		 						echo "<option value='".$row['LEVE_ID']."'>";
		 						echo $row ['LEVE_NAME'];
		 					 echo "</option>";
		 					}
		 					 ?>
		 				</select>
	                  </div>
	              </div>
	              <div class="form-group">
	                <div class="row">
	                  <div class="col-md-10">
	                    <button type="reset" class="btn btn-danger pull-right">Cancel</button>
	                  </div>
	                  <div class="col-md-2">
	                    <button type="submit" class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-success2" onclick="modalKonfirmasiTakJadi()" >Input Data</button>
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	  <div class="col-md-12">
	    <div class="box box-danger">
	      <div class="box-header with-border">
	        <h3 class="box-title">Data User</h3>

	        <div class="box-tools pull-right">
	          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body">
			<table  class="table table-bordered table-hover table-striped" id="lookup">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Pegawai</th>
						<th>Username</th>
						<th>Level</th>
						<th>Posisi Witel</th>
						<th style="text-align: center" >Action </th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$no = 1;

	 				foreach ($dataUser as $row) {
	 					echo "<tr>";
	 					
	 					echo "<td>".$no++."</td>";
	 					echo "<td>".$row['PEGA_NAME']."</td>";
	 					echo "<td>".$row['USER_NAME']."</td>";
	 					echo "<td>".$row['LEVE_NAME']."</td>";
	 					echo "<td>".$row['WTEL_NAME']."</td>";
	 					echo "<td>
	 							<a href='".base_url()."C_user/FormUpdate/".$row['USER_ID']."'>Edit</a> |
	 							<a  href='".base_url()."C_user/Delete/".$row['USER_ID']."' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\")'>Delete</a>
	 						 </td>";

	 			 		echo "</tr>";
	 				}
	 			 ?>
				</tbody>
			</table>
	      </div>
	    </div>
	      <!-- /.box -->
	  </div> <!-- col-input -->
	</div>
</div>
<!-- /.content -->


<!-- modal  parent -->

<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lookup Data Pegawai</h4>
            </div>
            <div class="modal-body">
                <table id="registForm" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Pegawai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($dataPegawai as $row) {
                        ?>
                          <tr class="cari" data-namaPega="<?php echo $row['PEGA_ID']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['PEGA_NAME']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<!-- modal  witel -->

<div class="modal fade" id="modalWtel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lookup Data Witel</h4>
            </div>
            <div class="modal-body">
                <table id="tableWitel" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No. </th>
                        <th>Posisi Witel</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($dataWitel as $row) {
                        ?>
                          <tr class="cari2" data-namaWtel="<?php echo $row['WTEL_ID']; ?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['WTEL_NAME']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
    $(document).on('click', '.cari', function (e) {
        // alert("test");

        // parent
        document.getElementById("cmbNamaPega").value = $(this).attr('data-namaPega');
        $('#myModalRegister').modal('hide');

    });
</script>

<script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
    $(document).on('click', '.cari2', function (e) {
        // alert("test");

        // witel
        document.getElementById("cmbNamaWtel").value = $(this).attr('data-namaWtel');
        $('#modalWtel').modal('hide');
    });
</script>

<?php
      }
      if ($_SESSION['level'] != 'SUPER USER') {
        echo '<div class="col-md-12">';
      }else{
        echo '<div class="col-md-6">';
      }
    ?>