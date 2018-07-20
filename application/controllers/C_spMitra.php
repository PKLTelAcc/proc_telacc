<?php
/**
 * 
 */
class C_spMitra extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_spMitra');
	}
	public function index()
	{
		$sp_mitra=$this->M_spMitra->view();
		$workOrder=$this->M_spMitra->getWorkOrder();
		$data = array(
			'title' 	=> 'Input SP Mitra',
			'content'	=> 'V_spMitra',
			'sp_mitra'	=> $sp_mitra,
			'workOrder'	=> $workOrder
		);
		$this->load->view('tampilan/V_combine', $data);
	}
	public function form()
	{
		$idTa		= $_POST['txtIDTA'];
		$no			= $_POST['txtNo'];
		$idPr		= $_POST['txtIDPR'];
		$status		= $_POST['txtStatus'];
		$material	= $_POST['txtMaterial'];
		$jasa		= $_POST['txtJasa'];
		$total		= $_POST['txtTotal'];
		$odp		= $_POST['txtOdp'];
		$apm		= $_POST['txtApm'];

		$data = array(
			'SPMT_WODE_ID'	=> $idTa,
			'SPMT_NO'		=> $no,
			'SPMT_ID_PR'	=> $idPr,
			'SPMT_STATUS'	=> $status,
			'SPMT_MATERIAL'	=> $material,
			'SPMT_JASA'		=> $jasa,
			'SPMT_TOTAL'	=> $total,
			'SPMT_ODP'		=> $odp,
			'SPMT NO_APM'	=> $apm
		 );
		$spMitra=$this->M_spMitra->insert($data, $id);
	redirect('C_spMitra');
	}
	public function formUpdate($id)
	{
		$sp_mitra=$this->M_spMitra->view();
		$workOrder=$this->M_spMitra->getWorkOrder();
		$data = array(
			'title' 	=> 'Input SP Mitra',
			'content'	=> 'V_editSpMitra',
			'sp_mitra'	=> $sp_mitra,
			'workOrder'	=> $workOrder
		);
		$this->load->view('tampilan/V_combine', $data);
	}
	public function updateData()
	{
		$idTa		= $_POST['txtIDTA'];
		$no			= $_POST['txtNo'];
		$idPr		= $_POST['txtIDPR'];
		$status		= $_POST['txtStatus'];
		$material	= $_POST['txtMaterial'];
		$jasa		= $_POST['txtJasa'];
		$total		= $_POST['txtTotal'];
		$odp		= $_POST['txtOdp'];
		$apm		= $_POST['txtApm'];

		$data = array(
			'SPMT_WODE_ID'	=> $idTa,
			'SPMT_NO'		=> $no,
			'SPMT_ID_PR'	=> $idPr,
			'SPMT_STATUS'	=> $status,
			'SPMT_MATERIAL'	=> $material,
			'SPMT_JASA'		=> $jasa,
			'SPMT_TOTAL'	=> $total,
			'SPMT_ODP'		=> $odp,
			'SPMT NO_APM'	=> $apm
		 );
		$spMitra=$this->M_spMitra->insert($data, $id);
	redirect('C_spMitra');
	}
	public function delete($id)
	{
		$this->db->delete('sp_mitra', array('SPMT_ID' => $id));
		redirect('C_spMitra');
	}
}
?>