<?php 

/**
 * 
 */
class C_dashboardInstalasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboardInstalasi');
	}

	public function index()
	{

	}

	public function dashboardInstalasi()
	{
		$view = 'V_dashboardInstalasi';
		$data = array(
			'title' => 'Dashboard Instalasi',
			'content' => $view,
			'menu'	=> 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function dashboardInstalasiField($wtelid)
	{
		$view = 'V_dashboardInstalasiField';
		$getCount = $this->M_dashboardInstalasi->getCountField($wtelid);
		$getWitel = $this->M_dashboardInstalasi->getWitelField($wtelid);
		$data = array(
			'title' => 'Dashboard Instalasi',
			'content' => $view,
			'menu'	=> 'Report',
			'getCount' => $getCount,
			'getWitel' => $getWitel
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailInst($wtelid,$stinid)
	{
		$dataReportByWitelStatusInst		= $this->M_dashboardInstalasi->getReportByWitelStatusInst($wtelid,$stinid);
		$witelStatusInstalasi			= $this->M_dashboardInstalasi->getWitelStatusInstalasi($wtelid, $stinid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusInst' 		=> $dataReportByWitelStatusInst,
			'witelStatusInstalasi'			=> $witelStatusInstalasi,
			'content' 				=> 'V_reportDetailWitelStatusInst',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusInst[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusInst[0]['STIN_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusInst($id)
	{
		$dataReportByStatusInst		= $this->M_dashboardInstalasi->getReportByStatusInstId($id);
		$statusInstalasi			= $this->M_dashboardInstalasi->getStatusInstalasi($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusInst' 	=> $dataReportByStatusInst,
			'statusInstalasi'			=> $statusInstalasi,
			'content' 				=> 'V_reportDetailStatusInst',
			'title'					=> 'Detail Status '.$dataReportByStatusInst[0]['STIN_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
}

 ?>