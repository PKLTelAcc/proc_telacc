<table class="table table-striped table-valign-middle">
          <thead>
          <tr>
            <th>WITEL</th>
            <?php
            $thead=$this->M_filter->getStatus();
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
            $witel=$this->M_filter->getWitel();
            $total = 0;
            $totalGolive = 0;
            foreach ($witel as $row) {
              ?>
              <tr>
                <th><?=$row['WTEL_NAME']?></th>
              <?php
                  $count = $this->M_filter->getCount($row['WTEL_ID'],$awal, $akhir, $bulan, $tahun);
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
                $golive = $this->M_filter->getGolive($row['WTEL_ID'],$awal, $akhir, $bulan, $tahun);
                foreach ($golive as $key2) {
                  $totalGolive = $totalGolive + $key2['jumlah'];
                }
              ?>
                  <td><?=$totalGolive?></td>
                  <td><?=$total?></td>
                  <td>
                    <a href="<?php echo base_url().'C_filter/detailWitel/'.$row['WTEL_ID'].'/'.$awal.'/'.$akhir.'/'.$bulan.'/'.$tahun;?>" class="text-info">
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