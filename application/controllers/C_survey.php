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

	public function form()
	{	
		$idta = $_POST['txtIDTA'];
		$witel = $_POST['txtWtel'];
		$subWitel = $_POST['txtSwit'];
		$lokasi = $_POST['txtLokasi'];
		$material = $_POST['txtMaterial'];
		$jasa = $_POST['txtJasa'];
		$total = $_POST['txtTotal'];
		$odp = $_POST['txtODP'];
		$surveyer = $_POST['txtSuveyer'];
		$nik = $_POST['txtNIK'];
		$date = $_POST['dateSurvey'];
		$status = $_POST['txtStat'];
		
		$data = array(
			'SURV_ID_TA' => $idta,
		);
		$survey=$this->M_survey->insert($data);
		redirect('C_survey');
	}
}
 ?>