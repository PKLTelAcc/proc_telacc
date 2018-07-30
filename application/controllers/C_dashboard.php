<?php 

/**
 * 
 */
class C_dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index(){
		if (empty($_SESSION['level'])) {
			redirect('c_login','refresh');
		}
		if ($_SESSION['level'] == 'SUPER USER' || $_SESSION['level'] == 'ADMIN' ) {
			$view = 'tampilan/v_content';
			}else{
			$view = 'tampilan/index';
		}
		$data = array(
			'title'		=> 'Dashboard',
			'content' 	=> $view
		);
			$this->load->view('tampilan/v_combine',$data);
	}

	public function detailWitel($id)
	{
		$dataReportByWitel		= $this->M_dashboard->getReportByWitelId($id);
		$data = array(
			'dataReportByWitel' 	=> $dataReportByWitel,
			'content' 				=> 'V_reportDetailWitel',
			'title'					=> 'Detail '.$dataReportByWitel[0]['WTEL_NAME'],
		);
		$this->load->view('tampilan/v_combine',$data);	
	}

	public function detailStatus($id)
	{
		$dataReportByStatus		= $this->M_dashboard->getReportByStatusId($id);
		$data = array(
			'dataReportByStatus' 	=> $dataReportByStatus,
			'content' 				=> 'V_reportDetailStatus',
			'title'					=> 'Detail '.$dataReportByStatus[0]['STAT_NAME'],
		);
		$this->load->view('tampilan/v_combine',$data);	
	} 
}
 ?>