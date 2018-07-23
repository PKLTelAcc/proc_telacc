<?php 
/**
 * 
 */
class C_report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_report');
	}

	public function index()
	{
		$dataWitel 			= $this->M_report->getWitel();
		$dataSubWitel 		= $this->M_report->getSubWitel();
		$dataProgram 		= $this->M_report->getProgram();
		$dataStatus 		= $this->M_report->getStatus();
		$dataMitra			= $this->M_report->getMitra();
		$dataWorkOrder 		= $this->M_report->getWorkOrder();
		$dataSurvey 		= $this->M_report->getSurvey();
		$dataInstalasi 		= $this->M_report->getInstalasi();

		$data = array(
			'title'			=> 'Report',
			'content' 		=> 'V_report',
			'dataWitel' 	=> $dataWitel,
			'dataSubWitel'	=> $dataSubWitel,
			'dataProgram'	=> $dataProgram,
			'dataStatus'	=> $dataStatus,
			'dataMitra'		=> $dataMitra,
			'dataWorkOrder'	=> $dataWorkOrder,
			'dataSurvey'	=> $dataSurvey,
			'dataInstalasi'	=> $dataInstalasi
		);

		$this->load->view('tampilan/V_combine',$data);
	}
}
 ?>