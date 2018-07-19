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
			'title' 	=> 'Input Survey',
			'content'	=> 'V_survey',
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
		$idTa		= $_OST['txtIdTa'];
		
	}
}
?>