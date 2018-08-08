<div class="card">
  <div class="card-header no-border">
    <h3 class="card-title"></h3>
      <div class="card-tools">
          <!-- <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fa fa-bars"></i>
          </a> -->
        </div>
      </div>
      <div class="card-body p-0">
        <div class="col-md-12">
            <div class="box box-danger box-solid collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Filter Data</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body" style="display: none">
                <div class="col-md-4">
                  <div class="form-group col-md-6">
                      <label class=" control-label">Tanggal Awal</label>
                      <div>
                      <select class="form-control" name="cmbHariPertama" id="cmbHariPertama">
                        <option value="0">=== Pilih Tanggal ===</option>
                        <?php
                          for ($i=1; $i < 32; $i++) { 
                            echo "<option value = '$i'>$i</option>";
                          }
                        ?>
                      </select>
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                      <label class=" control-label">Tanggal Akhir</label>
                      <div>
                      <select class="form-control" name="cmbHariKedua" id="cmbHariKedua">
                        <option value="31">=== Pilih Tanggal ===</option>
                        <?php
                          for ($i=1; $i < 32; $i++) { 
                            echo "<option value = '$i'>$i</option>";
                          }
                        ?>
                      </select>
                      </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label">Bulan</label>
                    <div>
                      <select name="cmbBulan" id="cmbBulan" class="form-control">
                        <option value="<?php echo date('m')?>">=== Pilih Bulan ====</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label">Tahun</label>
                    <div>
                    <select class="form-control" name="cmbTahun" id="cmbTahun">
                      <option value="<?php echo date('Y'); ?>">=== Pilih Tahun ===</option>
                      <?php
                        $tahun_sekarang = date('Y');
                        $tahun_dulu     = date('Y')-25;
                        for ($i=$tahun_dulu; $i <= $tahun_sekarang; $i++) { 
                          echo "<option value = '$i'>$i</option>";
                        }
                      ?>
                    </select>
                    </div>
                </div>
              </div>
              <div class="box-footer">
                <button class="btn btn-danger pull-right" onclick="filterTanggal()">Filter</button>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        <div class="col-md-12">
        <div id="tableDashboard">
        <table class="table table-striped table-valign-middle">
          <thead>
          <tr>
            <th>WITEL</th>
            <?php
            $thead=$this->M_dashboard->getStatus();
            foreach ($thead as $row) {
            ?>
              <th>
                <?php if($row['STAT_NAME']=='WORK ORDER'){ ?>
                <a href="<?php echo base_url().'C_dashboard/detailStatusWode/'.$row['STAT_ID'];?>" class="text-info">
                <?php }else if($row['STAT_NAME']=='DROP'){ ?>
                <a href="<?php echo base_url().'C_dashboard/detailStatusDrop/'.$row['STAT_ID'];?>" class="text-info">
                <?php }else if($row['STAT_NAME']=='SURVEY'){ ?>
                <a href="<?php echo base_url().'C_dashboard/detailStatusSurv/'.$row['STAT_ID'];?>" class="text-info">
                <?php }else if($row['STAT_NAME']=='INSTALASI'){ ?>
                <a href="<?php echo base_url().'C_dashboard/detailStatusInst/'.$row['STAT_ID'];?>" class="text-info">
                <?php } ?>
                  <?php echo $row['STAT_NAME'];?>
                </a>
              </th>
            <?php
            }
             ?>
             <th>GOLIVE</th>
             <th>Total</th>
             <th>Detail</th>
          </tr>
          </thead>
          <tbody align="center">
            <?php
            $witel=$this->M_dashboard->getWitel();
            $total = 0;
            $totalGolive = 0;
            foreach ($witel as $row) {
              ?>
              <tr>
                <th><?=$row['WTEL_NAME']?></th>
              <?php
                  $count = $this->M_dashboard->getCount($row['WTEL_ID']);
                  foreach ($count as $key) {
              ?>
                    <td>
                      <?php if($key['STAT_NAME']=='WORK ORDER' && $key['WODE_STAT_ID']!=null){ ?>
                      <a href="<?php echo base_url().'C_dashboard/detailWode/'.$key['WTEL_ID'].'/'.$key['STAT_ID'];?>" class="text-info">
                      <?php }else if($key['STAT_NAME']=='DROP' && $key['WODE_STAT_ID']!=null){ ?>
                      <a href="<?php echo base_url().'C_dashboard/detailDrop/'.$key['WTEL_ID'].'/'.$key['STAT_ID'];?>" class="text-info">
                      <?php }else if($key['STAT_NAME']=='SURVEY' && $key['WODE_STAT_ID']!=null){ ?>
                      <a href="<?php echo base_url().'C_dashboard/detailSurv/'.$key['WTEL_ID'].'/'.$key['STAT_ID'];?>" class="text-info">
                      <?php }else if($key['STAT_NAME']=='INSTALASI' && $key['WODE_STAT_ID']!=null){ ?>
                      <a href="<?php echo base_url().'C_dashboard/detailInst/'.$key['WTEL_ID'].'/'.$key['STAT_ID'];?>" class="text-info">
                      <?php } ?>
                        <?=$key['jumlah']?>
                      </a>
                    </td>
              <?php
                  $total = $total + $key['jumlah'];
                }
                $golive = $this->M_dashboard->getGolive($row['WTEL_ID']);
                foreach ($golive as $key2) {
                  $totalGolive = $totalGolive + $key2['jumlah'];
                }
              ?>
                  <td><?=$totalGolive?></td>
                  <td><?=$total?></td>
                  <td>
                    <a href="<?php echo base_url().'C_dashboard/detailWitel/'.$row['WTEL_ID'];?>" class="text-info">
                      <i class="fa fa-search"></i>
                    </a>
                  </td>
              </tr>
              <?php
              $total = 0;
              $totalGolive = 0;
            }
            ?>
          </tbody>
        </table>
        </div>
        </div>
       </div>
    </div>


<script type="text/javascript">
  function filterTanggal() {
      var hariPertama = document.getElementById('cmbHariPertama').value;
      var hariKedua   = document.getElementById('cmbHariKedua').value;
      var bulan       = document.getElementById('cmbBulan').value;
      var tahun       = document.getElementById('cmbTahun').value;
      $.ajax({
          type: "POST",
          data: {
            awal : hariPertama,
            akhir: hariKedua,
            bulan: bulan,
            tahun: tahun,
          },
          url: "<?php echo base_url()?>C_filter/dashboard/",
          success: function(html) {
              var target      = '#tableDashboard';
              $(target).html(html);
          }
      });
    }
</script>