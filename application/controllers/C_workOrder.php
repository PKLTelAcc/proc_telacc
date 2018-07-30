<?php 
/**
 * 
 */
class C_workOrder extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_workOrder');
	}

	public function index()
	{
		$workOrder=$this->M_workOrder->view();
		$witel=$this->M_workOrder->getWitel();
		$subWitel=$this->M_workOrder->getSubWitel();
		$program=$this->M_workOrder->getProgram();
		$status=$this->M_workOrder->getStatus();
		$data = array(
			'title' 	=> 'Input Work Order',
			'content'	=> 'V_workOrder',
			'workOrder'	=> $workOrder,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'menu'      =>'Input Work Order'
		);
		$this->load->view('tampilan/V_combine',$data);
	}

	public function form()
	{	
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		$program 	= $_POST['txtProg'];
		$lokasi 	= $_POST['txtLokasi'];
		$alamat 	= $_POST['txtAlamat'];
		$koordinat 	= $_POST['txtKoordinat'];
		$date 		= $_POST['dateMasuk'];
		$status 	= $_POST['txtStat'];
		$data = array(
			'WODE_ID_TA' 		=> $idta,
			'WODE_WTEL_ID' 		=> $witel,
			'WODE_SWIT_ID' 		=> $subWitel,
			'WODE_PROG_ID' 		=> $program,
			'WODE_NAMA_LOKASI' 	=> $lokasi,
			'WODE_ALAMAT' 		=> $alamat,
			'WODE_KOORDINAT' 	=> $koordinat,
			'WODE_TANGGAL' 		=> $date,
			'WODE_STAT_ID' 		=> $status
		);
		$workOrder=$this->M_workOrder->insert($data);
		redirect('C_workOrder');
	}

	public function formUpdate($id)
	{
		$workOrder=$this->M_workOrder->update($id);
		$witel=$this->M_workOrder->getWitel();
		$subWitel=$this->M_workOrder->getSubWitel();
		$program=$this->M_workOrder->getProgram();
		$status=$this->M_workOrder->getStatus();
		$data = array(
			'title' 	=> 'Edit Work Order',
			'content'	=> 'V_editWorkOrder',
			'workOrder'	=> $workOrder,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'menu'      =>'Input Work Order'
		);
		$this->load->view('tampilan/V_combine',$data);
	}

	public function updateData($id)
	{	
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		$program 	= $_POST['txtProg'];
		$lokasi 	= $_POST['txtLokasi'];
		$alamat 	= $_POST['txtAlamat'];
		$koordinat 	= $_POST['txtKoordinat'];
		$date 		= $_POST['dateMasuk'];
		$status 	= $_POST['txtStat'];
		$data = array(
			'WODE_ID_TA' 		=> $idta,
			'WODE_WTEL_ID' 		=> $witel,
			'WODE_SWIT_ID' 		=> $subWitel,
			'WODE_PROG_ID' 		=> $program,
			'WODE_NAMA_LOKASI' 	=> $lokasi,
			'WODE_ALAMAT' 		=> $alamat,
			'WODE_KOORDINAT' 	=> $koordinat,
			'WODE_TANGGAL' 		=> $date,
			'WODE_STAT_ID' 		=> $status
		);
		$workOrder=$this->M_workOrder->updateData($id,$data);
		redirect('C_workOrder');
	}

	public function delete($id)
	{
		$this->db->delete('work_order', array('WODE_ID' => $id));
		redirect('C_workOrder');
	}

	public function searchSwit()
	{
		$str = $_GET['q'];
    	$subWitel  = $this->M_workOrder->getSwitName($str);
    	?>
    		<input class="form-control readonly" placeholder="== Pilih Sub Witel ==" name="txtSwitMuncul" id="myInput2" required="true" >
	        <input class="form-control" id="txtSwit" type="hidden" name="txtSwit">
			<div class="input-group-btn">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalWodeSwit" onclick="modalCariSwit()">Search</button>
			</div>
    	<?php
	}

	public function modalSwit()
	{
		$txtWtel = $_GET['wtel'];
     	$subWitel = $this->M_workOrder->getSwitByWtelId($txtWtel);
     	$data = array(
      	'txtWtel' => $txtWtel ,
      	'subWitel' => $subWitel 
    );
		?>
		<div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Sub Witel</h4>
            </div>
            <div class="modal-body">
                <table id="tableSubWitel" class="table table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Sub Witel</th>
                      </tr>
                    </thead>        
                    <tbody>
                      <?php 
                      $no=1;
                      foreach ($subWitel as $row) {
                        ?>
                          <tr class="search2" style="cursor: pointer;" data-id2 = "<?=$row['SWIT_ID']?>" data-swit = "<?=$row['SWIT_NAME']?>">
                            <td><?php echo $no?></td>
                            <td><?php echo $row['SWIT_NAME']?></td>
                          </tr>
                        <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                </table>  
            </div>
        </div>
		<?php
	}
	public function getView()
	{
		$this->M_workOrder->getView();
	}
}
 ?>