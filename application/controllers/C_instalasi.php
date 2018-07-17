<?php
/**
 * 
 */
class C_instalasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_instalasi');
	}
	public function index()
	{
		$instalasi=$this->M_instalasi->view();
		$witel=$this->M_instalasi->getWitel();
		$subWitel=$this->M_instalasi->getSubWitel();
		$program=$this->M_instalasi->getProgram();
		$status=$this->M_instalasi->getStatus();
		$workOrder=$this->M_instalasi->getWorkOrder();
		$pegawai=$this->M_instalasi->getPegawai();
		$mitra=$this->M_instalasi->getMitra();
		$data = array(
			'title' 	=> 'Input Instalasi',
			'content'	=> 'V_instalasi',
			'survey'	=> $survey,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'workOrder'	=> $workOrder,
			'pegawai'	=> $pegawai,
			'mitra'		=> $mitra
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function form()
	{			
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];
		$odp 		= $_POST['txtODP'];
		$date 		= $_POST['dateinstalasi'];
		$status 	= $_POST['txtStat'];
		$program 	= $_POST['txtProg'];
}
?>