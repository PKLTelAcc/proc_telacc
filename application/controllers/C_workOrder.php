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
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}

	public function index()
	{
		if ($_SESSION['level'] == 'SUPER USER') {
			$workOrder=$this->M_workOrder->view();
		} else if($_SESSION['level'] == 'ADMIN WORK ORDER' &&  $_SESSION['WTEL_ID']){
			$workOrder=$this->M_workOrder->viewByWitel($_SESSION['WTEL_ID']);
		}
		
		$witel=$this->M_workOrder->getWitel();
		$subWitel=$this->M_workOrder->getSubWitel();
		$program=$this->M_workOrder->getProgram();
		$status=$this->M_workOrder->getStatus();
		$subProgram=$this->M_workOrder->getSubProgram();
		$data = array(
			'title' 	=> 'Input Work Order',
			'content'	=> 'V_workOrder',
			'workOrder'	=> $workOrder,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'subProgram'=> $subProgram,
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
		$subProgram = $_POST['txtSupr'];
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
			'WODE_SUPR_ID'		=> $subProgram,
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
		$subProgram=$this->M_workOrder->getSubProgram();
		$status=$this->M_workOrder->getStatus();
		$data = array(
			'title' 	=> 'Edit Work Order',
			'content'	=> 'V_editWorkOrder',
			'workOrder'	=> $workOrder,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'subProgram'=> $subProgram,
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
		$subProgram = $_POST['txtSupr'];
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
			'WODE_SUPR_ID'		=> $subProgram,
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

	public function upload()
	{
		$fileName = $this->input->post('file', TRUE);

		$config['upload_path'] = './upload/uploadWO/'; 
		$config['file_name'] = $fileName;
		$config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
		$config['max_size'] = 99999999;

		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		  
		if (!$this->upload->do_upload('file')) {
		   $error = array('error' => $this->upload->display_errors());
		   $this->session->set_flashdata('msg','Ada kesalahan dalam upload');
		   redirect('C_workOrder');
		} else {
		   $media = $this->upload->data();
		   $inputFileName = 'upload/uploadWO/'.$media['file_name'];

		   try {
		    $inputFileType = IOFactory::identify($inputFileName);
		    $objReader = IOFactory::createReader($inputFileType);
		    $objPHPExcel = $objReader->load($inputFileName);
		   } catch(Exception $e) {
		    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
		   }

		   $sheet = $objPHPExcel->getSheet(0);
		   $highestRow = $sheet->getHighestRow();
		   $highestColumn = $sheet->getHighestColumn();

		   for ($row = 2; $row <= $highestRow; $row++){
		     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
		       NULL,
		       TRUE,
		       FALSE);

		     $idWtel = array(
		     "WTEL_NAME"=> $rowData[0][1]
		    );


		     $cekWtel=$this->M_workOrder->cekWtel($rowData[0][1]);

		     //jika data duplicate ditemukan
		     if ($cekWtel!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertWtel($idWtel);
		     }

		     $ambilIDWtel=$this->M_workOrder->ambilIDWtel($rowData[0][1]);

		     $idSwit = array(
		     "SWIT_NAME"=> $rowData[0][2],
		     "SWIT_WTEL_ID"=> $ambilIDWtel[0]["WTEL_ID"]
		    );

		     $cekSwit=$this->M_workOrder->cekSwit($rowData[0][2]);

		     //jika data duplicate ditemukan
		     if ($cekSwit!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertSwit($idSwit);
		     }

		     $idProg = array(
		     	"PROG_NAME" => $rowData[0][3]
		     );

		     $cekProg=$this->M_workOrder->cekProg($rowData[0][3]);

		     //jika data duplicate ditemukan
		     if ($cekProg!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertProg($idProg);
		     }

		     $idStat = array(
		     	"STAT_NAME" => $rowData[0][9]
		     );

		     $cekStat=$this->M_workOrder->cekStat($rowData[0][9]);

		     //jika data duplicate ditemukan
		     if ($cekStat!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertStat($idStat);
		     }

		     $idSupr = array(
		     	"SUPR_NAME" => $rowData[0][8]
		     );

		     $cekSupr=$this->M_workOrder->cekSupr($rowData[0][8]);

		     //jika data duplicate ditemukan
		     if ($cekSupr!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertSupr($idStat);
		     }

		     $ambilIDSwit=$this->M_workOrder->ambilIDSwit($rowData[0][2]);
		     $ambilIDProg=$this->M_workOrder->ambilIDProg($rowData[0][3]);
		     $ambilIDStat=$this->M_workOrder->ambilIDStat($rowData[0][9]);
		     $ambilIDSupr=$this->M_workOrder->ambilIDSupr($rowData[0][8]);

		     $idWode = array(
		     "WODE_ID_TA"	=> $rowData[0][4],
		     "WODE_NAMA_LOKASI"	=> $rowData[0][7],
		     "WODE_WTEL_ID"	=> $ambilIDWtel[0]["WTEL_ID"],
		     "WODE_SWIT_ID"	=> $ambilIDSwit[0]["SWIT_ID"],
		     "WODE_PROG_ID"	=> $ambilIDProg[0]["PROG_ID"],
		     "WODE_STAT_ID"	=> $ambilIDStat[0]["STAT_ID"],
		     "WODE_SUPR_ID"	=> $ambilIDSupr[0]["SUPR_ID"]
		    );

		     $cekWode=$this->M_workOrder->cekWode($rowData[0][4]);

		     //jika data duplicate ditemukan
		     if ($cekWode!=null) {
		     	echo "";
		     }else{
		     	$this->M_workOrder->insertWode($idWode);
		     }

		   }
		   $this->session->set_flashdata('msg','Berhasil upload ...!!');
		   redirect('C_workOrder');
		}
	}
}
 ?>