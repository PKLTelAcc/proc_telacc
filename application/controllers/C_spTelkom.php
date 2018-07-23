<?php
/**
 * 
 */
class C_spTelkom extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_spTelkom');
	}
	public function index()
	{
		$sp_telkom=$this->M_spTelkom->view();
		$workOrder=$this->M_spTelkom->getWorkOrder();
		$survey=$this->M_spTelkom->getSurvey();
		$data = array(
			'title' 	=> 'Input SP Telkom',
			'content'	=> 'V_spTelkom',
			'sp_telkom'	=> $sp_telkom,
			'workOrder'	=> $workOrder,
			'survey'	=> $survey
		);
		$this->load->view('tampilan/V_combine', $data);
	}
	public function form()        
	{
		$idTa 		= $_POST['txtIDTA'];
			$nospTelkom = $_POST['txtnoSpTelkom'];
			$idp 		= $_POST['txtidp'];
			$noPo 		= $_POST['txtnoPo'];
			$idSurvey 	= $_POST['txtSurvey'];
			$material 	= $_POST['txtMaterial'];
			$jasa 		= $_POST['txtJasa'];	
	$data = array(
		'SPTL_WODE_ID'	=> $idTa,
		'SPTL_NO'		=> $nospTelkom,
		'SPTL_IDP'		=> $idp,
		'SPTL_NO_PO'	=> $noPo,
		'SPTL_SURV_ID'	=> $idSurvey
		);
	$id = array(
		'SURV_MATERIAL'	=> $material,
		'SURV_JASA'		=> $jasa,
		'SURV_TOTAL'	=> $total
		);
	$spTelkom=$this->M_spTelkom->insert($data, $id);
	redirect('C_spTelkom');
	}
	public function formUpdate($id)
	{
		$sp_telkom=$this->M_spTelkom->update($id);
		$workOrder=$this->M_spTelkom->getWorkOrder();
		$survey=$this->M_spTelkom->getSurvey();
		$data = array(
			'title' 	=> 'Edit SP_Telkom',
			'content'	=> 'V_editSpTelkom',
			'sp_telkom'	=> $sp_telkom,
			'workOrder'	=> $workOrder,
			'survey'	=> $survey
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function updateData()
	{
			$idTa 		= $_POST['txtIDTA'];
			$nospTelkom = $_POST['txtnoSpTelkom'];
			$idp 		= $_POST['txtidp'];
			$noPo 		= $_POST['txtnoPo'];
			$idSurvey 	= $_POST['txtSurvey'];
			$material 	= $_POST['txtMaterial'];
			$jasa 		= $_POST['txtJasa'];	
	$data = array(
		'SPTL_WODE_ID'	=> $idTa,
		'SPTL_NO'		=> $nospTelkom,
		'SPTL_IDP'		=> $idp,
		'SPTL_NO_PO'	=> $noPo,
		'SPTL_SURV_ID'	=> $idSurvey
		);
	$data2 = array(
		'SURV_MATERIAL'	=> $material,
		'SURV_JASA'		=> $jasa,
		'SURV_TOTAL'	=> $total
		);
	$spTelkom=$this->M_spTelkom->insert( $data, $data2);
	redirect('C_spTelkom');
	}
	public function delete($id)
	{
		$this->db->delete('sp_telkom', array('SPTL_ID' => $id));
		redirect('C_spTelkom');
	}
}
?>