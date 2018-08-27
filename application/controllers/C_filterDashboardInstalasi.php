<?php 
/**
 * 
 */
class C_filterDashboardInstalasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_filterDashboardInstalasi');
	}

	public function index()
	{

	}

	public function dashboardInstalasi($awal,$akhir,$bulan,$tahun)
	{
		$view = 'V_filterDashboardInstalasi';
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'title' => 'Dashboard Instalasi',
			'content' => $view,
			'menu'	=> 'Report',
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function dashboardInstalasiField($wtelid, $awal, $akhir, $bulan, $tahun)
	{
		$view = 'V_filterDashboardInstalasiField';
		$getCount = $this->M_filterDashboardInstalasi->getCountField($wtelid, $awal, $akhir, $bulan, $tahun);
		$getWitel = $this->M_filterDashboardInstalasi->getWitelField($wtelid, $awal, $akhir, $bulan, $tahun);
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'title' => 'Dashboard Instalasi',
			'content' => $view,
			'menu'	=> 'Report',
			'getCount' => $getCount,
			'getWitel' => $getWitel,
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailInst($wtelid,$stinid, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelStatusInst		= $this->M_filterDashboardInstalasi->getReportByWitelStatusInst($wtelid,$stinid, $awal, $akhir, $bulan, $tahun);
		$witelStatusInstalasi			= $this->M_filterDashboardInstalasi->getWitelStatusInstalasi($wtelid, $stinid, $awal,$akhir,$bulan,$tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusInst' 		=> $dataReportByWitelStatusInst,
			'witelStatusInstalasi'			=> $witelStatusInstalasi,
			'content' 				=> 'V_reportDetailWitelStatusInst',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusInst[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusInst[0]['STIN_NAME'].' | '.$dataReportByWitelStatusInst[0]['INST_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'menu'      => 'Report',
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusInst($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByStatusInst		= $this->M_filterDashboardInstalasi->getReportByStatusInstId($id, $awal, $akhir, $bulan, $tahun);
		$statusInstalasi			= $this->M_filterDashboardInstalasi->getStatusInstalasi($id, $awal,$akhir,$bulan,$tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusInst' 	=> $dataReportByStatusInst,
			'statusInstalasi'			=> $statusInstalasi,
			'content' 				=> 'V_reportDetailStatusInst',
			'title'					=> 'Detail Status '.$dataReportByStatusInst[0]['STIN_NAME'].' | '.$dataReportByStatusInst[0]['INST_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'menu'      => 'Report',
		);
		$this->load->view('tampilan/v_combine',$data);
	}
}
 ?>