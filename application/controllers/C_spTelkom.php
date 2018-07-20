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
		$spTelkom=$this->M_spTelkom->view();
		$workOrder=$this->M_spTelkom->getWorkOrder();
		$survey=$this->M_spTelkom->getSurvey();
		$data = array(
			'title' 	=> 'Input SP Telkom',
			'content'	=> 'V_spTelkom',
			'spTelkom'	=> $spTelkom,
			'workOrder'	=> $workOrder,
			'survey'	=> $survey
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function form()        
	{
		$idTa		= $_POST['txtIDTA'];
		$nospTelkom	= $_POST['txtnoSpTelkom'];
		$idp		= $_POST['idp'];
		$noPo		= $_POST['txtnoPo'];
		$material	= $_POST['txtmaterial'];
		$jasa		= $_POST['txtjasa'];
		$total		= $_POST['txttotal'];
		
	$data = array(
		'SPTL_WODE_ID'	=> $IdTa,
		'SPTL_NO'		=> $noSpTelkom,
		'SPTL_IDP'		=> $idp,
		'SPTL_NO_PO'	=> $noPo,
		'SURV_MATERIAL'	=> $material,
		'SURV_JASA'		=> $jasa,
		'SURV_TOTAL'	=> $total
		);
	$spTelkom=$this->M_spTelkom->insert($data);
	redirect('C_spTelkom');
	}
	public function formUpdate()
	{
		$spTelkom=$this->M_spTelkom->view();
		$workOrder=$this->M_spTelkom->getWorkOrder();
		$survey=$this->M_spTelkom->getSurvey();
		$data = array(
			'title' 	=> 'Edit SP_Telkom',
			'content'	=> 'V_editSpTelkom',
			'sp_telkom'	=> $spTelkom,
			'workOrder'	=> $workOrder,
			'survey'	=> $survey
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function updateData($id)
	{
		$idTa		= $_POST['txtIDTA'];
		$nospTelkom	= $_POST['txtnoSpTelkom'];
		$idp		= $_POST['idp'];
		$noPo		= $_POST['txtnoPo'];
		$material	= $_POST['txtmaterial'];
		$jasa		= $_POST['jasa'];
		$total		= $_POST['total'];
		
	$data = array(
		'SPTL_WODE_ID'	=> $IdTa,
		'SPTL_NO'		=> $noSpTelkom,
		'SPTL_IDP'		=> $idp,
		'SPTL_NO_PO'	=> $noPo,
		'SPTL_SURV_ID'	=> $total
		);
	$spTelkom=$this->M_spTelkom->insert($id, $data);
	redirect('C_spTelkom');
	}
	public function delete($id)
	{
		$this->db->delete('sp_telkom', array('SPTL_ID' => $id));
		redirect('C_spTelkom');
	}
}
?>