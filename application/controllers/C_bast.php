<?php
/**
 * 
 */
class C_bast extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_bast');	
	}
	public function index()
	{
		$bast=$this->M_bast->view();
		$workOrder=$this->M_bast->getWorkOrder();
		$spTelkom=$this->M_bast->getSpTelkom();
		$instalasi=$this->M_bast->getInstalasi();
		$status=->$this->M_bast->getStatus();
		$data = array(
			'title' 	=> 'Input BAST',
			'content'	=> 'V_bast',
			'bast'		=> $bast,
			'workOrder'	=> $workOrder,
			'sp_telkom'	=> $spTelkom,
			'instalasi'	=> $instalasi,
			'status'	=> $status
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function form()        
	{
		$idTa		= $_POST['txtIDTA'];
		$noBast		= $_POST['txtnoBast'];
		$noPo		= $_POST['txtnoPo'];
		$material	= $_POST['txtmaterial'];
		$jasa		= $_POST['jasa'];
		$total		= $_POST['total'];
		$odp		= $_POST['odp'];
		$tanggal	= $_POST['tanggal'];
	
	$data = array(
		'BATS_WODE_ID'	=> $IdTa,
		'BATS_NO'		=> $noBast,
		'BAST_SPTL_ID'	=> $noPo,
		'BAST_INST_ID'	=> $material,
		'BAST_TANGGAL'	=> $tanggal
		);
	$bast=$this->M_bast->insert($data);
	redirect('C_bast');
	}
	public function formUpdate($id)
	{
		$bast=$this->M_bast->view($id);
		$workOrder=$this->M_bast->getWorkOrder();
		$spTelkom=$this->M_bast->getSpTelkom();
		$instalasi=$this->M_bast->getInstalasi();
		$status=->$this->M_bast->getStatus();
		$data = array(
			'title' 	=> 'Edit BAST',
			'content'	=> 'V_editBast',
			'bast'		=> $bast,
			'workOrder'	=> $workOrder,
			'sp_telkom'	=> $spTelkom,
			'instalasi'	=> $instalasi,
			'status'	=> $status
			);
	$this->load->view('tampilan/V_combine',$data);
	}
	public function updateData($id)
	{
		$idTa		= $_POST['txtIDTA'];
		$noBast		= $_POST['txtnoBast'];
		$noPo		= $_POST['txtnoPo'];
		$material	= $_POST['txtmaterial'];
		$jasa		= $_POST['jasa'];
		$total		= $_POST['total'];
		$odp		= $_POST['odp'];
		$tanggal	= $_POST['tanggal'];
	
	$data = array(
		'BATS_WODE_ID'	=> $IdTa,
		'BATS_NO'		=> $noBast,
		'BAST_SPTL_ID'	=> $noPo,
		'BAST_INST_ID'	=> $material,
		'BAST_TANGGAL'	=> $tanggal
		);
	$bast=$this->M_bast->updateData($id,$data);
		redirect('C_bast');
	}
	public function delete($id)
	{
		$this->db->delete('BAST', array('BAST_ID' => $id));
		redirect('C_bast');
	}
}
?>