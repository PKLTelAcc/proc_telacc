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
			'content' 	=> $view,
			'menu'      => 'Report',
		);
			$this->load->view('tampilan/v_combine',$data);
	}

	public function detailWitel($id)
	{
		$dataReportByWitelWode		= $this->M_dashboard->getReportByWitelWodeId($id);
		$dataReportByWitelSurv		= $this->M_dashboard->getReportByWitelSurvId($id);
		$dataReportByWitelInst		= $this->M_dashboard->getReportByWitelInstId($id);
		$dataReportByWitelBast		= $this->M_dashboard->getReportByWitelBastId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelWode' 	=> $dataReportByWitelWode,
			'dataReportByWitelSurv' 	=> $dataReportByWitelSurv,
			'dataReportByWitelInst' 	=> $dataReportByWitelInst,
			'dataReportByWitelBast' 	=> $dataReportByWitelBast,
			'content' 				=> 'V_reportDetailWitel',
			'title'					=> 'Detail Witel '.$dataReportByWitelWode[0]['WTEL_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusWode($id)
	{
		$dataReportByStatusWode		= $this->M_dashboard->getReportByStatusWodeId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusWode' 	=> $dataReportByStatusWode,
			'content' 				=> 'V_reportDetailStatusWode',
			'title'					=> 'Detail Status '.$dataReportByStatusWode[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusDrop($id)
	{
		$dataReportByStatusWode		= $this->M_dashboard->getReportByStatusWodeId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusWode' 	=> $dataReportByStatusWode,
			'content' 				=> 'V_reportDetailStatusDrop',
			'title'					=> 'Detail Status '.$dataReportByStatusWode[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusSurv($id)
	{
		$dataReportByStatusSurv		= $this->M_dashboard->getReportByStatusSurvId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusSurv' 	=> $dataReportByStatusSurv,
			'content' 				=> 'V_reportDetailStatusSurv',
			'title'					=> 'Detail Status '.$dataReportByStatusSurv[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusInst($id)
	{
		$dataReportByStatusInst		= $this->M_dashboard->getReportByStatusInstId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusInst' 	=> $dataReportByStatusInst,
			'content' 				=> 'V_reportDetailStatusInst',
			'title'					=> 'Detail Status '.$dataReportByStatusInst[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusBast($id)
	{
		$dataReportByStatusBast		= $this->M_dashboard->getReportByStatusBastId($id);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusBast' 	=> $dataReportByStatusBast,
			'content' 				=> 'V_reportDetailStatusBast',
			'title'					=> 'Detail Status '.$dataReportByStatusBast[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailWode($wtelid,$statid)
	{
		$dataReportByWitelStatusWode		= $this->M_dashboard->getReportByWitelStatusWode($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusWode' 		=> $dataReportByWitelStatusWode,
			'content' 				=> 'V_reportDetailWitelStatusWode',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusWode[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusWode[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailDrop($wtelid,$statid)
	{
		$dataReportByWitelStatusWode		= $this->M_dashboard->getReportByWitelStatusWode($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusWode' 		=> $dataReportByWitelStatusWode,
			'content' 				=> 'V_reportDetailWitelStatusDrop',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusWode[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusWode[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailSurv($wtelid,$statid)
	{
		$dataReportByWitelStatusSurv		= $this->M_dashboard->getReportByWitelStatusSurv($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusSurv' 		=> $dataReportByWitelStatusSurv,
			'content' 				=> 'V_reportDetailWitelStatusSurv',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusSurv[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusSurv[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailInst($wtelid,$statid)
	{
		$dataReportByWitelStatusInst		= $this->M_dashboard->getReportByWitelStatusInst($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusInst' 		=> $dataReportByWitelStatusInst,
			'content' 				=> 'V_reportDetailWitelStatusInst',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusInst[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusInst[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailBast($wtelid,$statid)
	{
		$dataReportByWitelStatusBast		= $this->M_dashboard->getReportByWitelStatusBast($wtelid,$statid);
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusBast' 		=> $dataReportByWitelStatusBast,
			'content' 				=> 'V_reportDetailWitelStatusBast',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusBast[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusBast[0]['STAT_NAME'].' | '.date("l jS \of F Y h:i A"),
			'menu'      => 'Report'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
}
 ?>