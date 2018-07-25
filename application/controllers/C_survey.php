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
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		// $lokasi 	= $_POST['txtLokasi'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];
		$odp 		= $_POST['txtODP'];
		$surveyer 	= $_POST['txtSurveyer'];
		// $nik 		= $_POST['txtNIK'];
		$date 		= $_POST['dateSurvey'];
		$status 	= $_POST['txtStat'];
		$program 	= $_POST['txtProg'];
		
		$data = array(
			'SURV_WODE_ID'		=> $idta,
			'SURV_WTEL_ID' 		=> $witel,
			'SURV_SWIT_ID' 		=> $subWitel,
			// 'SURV_WODE_ID' 		=> $lokasi,
			'SURV_MATERIAL' 	=> $material,
			'SURV_JASA' 		=> $jasa,
			'SURV_TOTAL' 		=> $total,
			'SURV_ODP' 			=> $odp,
			'SURV_PEGA_ID' 		=> $surveyer,
			// 'SURV_PEGA_ID' 		=> $nik,
			'SURV_TANGGAL' 		=> $date,
			'SURV_PROG_ID' 		=> $program
		);
		$data2 = array(
			'WODE_STAT_ID' 		=> $status
		);
		$survey=$this->M_survey->insert($data,$data2);
		redirect('C_survey');
	}

	public function formUpdate($id)
	{
		$survey=$this->M_survey->update($id);
		$witel=$this->M_survey->getWitel();
		$subWitel=$this->M_survey->getSubWitel();
		$program=$this->M_survey->getProgram();
		$status=$this->M_survey->getStatus();
		$workOrder=$this->M_survey->getWorkOrder();
		$pegawai=$this->M_survey->getPegawai();
		$data = array(
			'title' 	=> 'Edit Survey',
			'content'	=> 'V_editSurvey',
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

	public function updateData($id)
	{	
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		// $lokasi 	= $_POST['txtLokasi'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];
		$odp 		= $_POST['txtODP'];
		$surveyer 	= $_POST['txtSurveyer'];
		// $nik 		= $_POST['txtNIK'];
		$date 		= $_POST['dateSurvey'];
		$status 	= $_POST['txtStat'];
		$program 	= $_POST['txtProg'];
		
		$data = array(
			'SURV_WODE_ID'		=> $idta,
			'SURV_WTEL_ID' 		=> $witel,
			'SURV_SWIT_ID' 		=> $subWitel,
			// 'SURV_WODE_ID' 		=> $lokasi,
			'SURV_MATERIAL' 	=> $material,
			'SURV_JASA' 		=> $jasa,
			'SURV_TOTAL' 		=> $total,
			'SURV_ODP' 			=> $odp,
			'SURV_PEGA_ID' 		=> $surveyer,
			// 'SURV_PEGA_ID' 		=> $nik,
			'SURV_TANGGAL' 		=> $date,
			'SURV_PROG_ID' 		=> $program
		);
		$data2 = array(
			'WODE_STAT_ID' 		=> $status
		);
		$survey=$this->M_survey->updateData($id,$data, $data2);
		redirect('C_survey');
	}

	public function delete($id)
	{
		$this->db->delete('survey', array('SURV_ID' => $id));
		redirect('C_survey');
	}
}
 ?>