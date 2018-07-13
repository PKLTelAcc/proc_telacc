<?php 
/**
 * 
 */
class C_survey extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_survey');
	}

	public function index()
	{
		$survey=$this->M_survey->view();
		$witel=$this->M_survey->getWitel();
		$subWitel=$this->M_survey->getSubWitel();
		$program=$this->M_survey->getProgram();
		$status=$this->M_survey->getStatus();
		$workOrder=$this->M_survey->getWorkOrder();
		$pegawai=$this->M_survey->getPegawai();
		$data = array(
			'title' 	=> 'Input Survey',
			'content'	=> 'V_survey',
			'survey'	=> $survey,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'workOrder'	=> $workOrder,
			'pegawai'	=> $pegawai
		);
		$this->load->view('tampilan/V_combine',$data);
	}
}
 ?>