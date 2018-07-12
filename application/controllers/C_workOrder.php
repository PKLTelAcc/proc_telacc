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
			'status'	=> $status
		);
		$this->load->view('tampilan/V_combine',$data);
	}

	public function form()
	{	
		$idta = $_POST['txtIDTA'];
		$witel = $_POST['txtWtel'];
		$subWitel = $_POST['txtSwit'];
		$program = $_POST['txtProg'];
		$lokasi = $_POST['txtLokasi'];
		$alamat = $_POST['txtAlamat'];
		$koordinat = $_POST['txtKoordinat'];
		$date = $_POST['dateMasuk'];
		$status = $_POST['txtStat'];
		$data = array(
			'WODE_ID_TA' => $idta,
			'WODE_WTEL_ID' => $witel,
			'WODE_SWIT_ID' => $subWitel,
			'WODE_PROG_ID' => $program,
			'WODE_NAMA_LOKASI' => $lokasi,
			'WODE_ALAMAT' => $alamat,
			'WODE_KOORDINAT' => $koordinat,
			'WODE_TANGGAL' => $date,
			'WODE_STAT_ID' => $status
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
			'title' 	=> 'Input Work Order',
			'content'	=> 'V_editWorkOrder',
			'workOrder'	=> $workOrder,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status
		);
		$this->load->view('tampilan/V_combine',$data);
	}

	public function updateData($id)
	{	
		$idta = $_POST['txtIDTA'];
		$witel = $_POST['txtWtel'];
		$subWitel = $_POST['txtSwit'];
		$program = $_POST['txtProg'];
		$lokasi = $_POST['txtLokasi'];
		$alamat = $_POST['txtAlamat'];
		$koordinat = $_POST['txtKoordinat'];
		$date = $_POST['dateMasuk'];
		$status = $_POST['txtStat'];
		$data = array(
			'WODE_ID_TA' => $idta,
			'WODE_WTEL_ID' => $witel,
			'WODE_SWIT_ID' => $subWitel,
			'WODE_PROG_ID' => $program,
			'WODE_NAMA_LOKASI' => $lokasi,
			'WODE_ALAMAT' => $alamat,
			'WODE_KOORDINAT' => $koordinat,
			'WODE_TANGGAL' => $date,
			'WODE_STAT_ID' => $status
		);
		$workOrder=$this->M_workOrder->updateData($id,$data);
		redirect('C_workOrder');
	}

	public function delete($id)
	{
		$this->db->delete('work_order', array('WODE_ID' => $id));
		redirect('C_workOrder');
	}
}
 ?>