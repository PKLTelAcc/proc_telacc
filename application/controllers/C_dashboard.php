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
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitel' 	=> $dataReportByWitel,
			'content' 				=> 'V_reportDetailWitel',
			'title'					=> 'Detail Witel '.$dataReportByWitel[0]['WTEL_NAME'].' | '.date("l jS \of F Y h:i A"),
		);
		$this->load->view('tampilan/v_combine',$data);	
	}

	public function detailStatus($id)
	{
		$dataReportByStatus		= $this->M_dashboard->getReportByStatusId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatus' 	=> $dataReportByStatus,
			'content' 				=> 'V_reportDetailStatus',
			'title'					=> 'Detail Status '.$dataReportByStatus[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
		);
		$this->load->view('tampilan/v_combine',$data);	
	}

	public function detail($wtelid,$statid)
	{
		$dataReportByWitelStatus		= $this->M_dashboard->getReportByWitelStatus($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatus' 		=> $dataReportByWitelStatus,
			'content' 				=> 'V_reportDetailWitelStatus',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatus[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatus[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
		);
		$this->load->view('tampilan/v_combine',$data);	
	} 
}
 ?>