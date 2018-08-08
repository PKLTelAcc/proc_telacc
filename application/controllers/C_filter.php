<?php
	/**
	 *
	 */
	class C_filter extends CI_controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('M_filter');
		}

		public function index()
		{
			

		}

		public static function format($timestamp = '', $date_format = 'd F Y', $suffix = '')
		{
			$real = $timestamp;
		    if($timestamp == NULL)
		      return '-';

		    if($timestamp == '1970-01-01' || $timestamp == '0000-00-00' || $timestamp == '-25200')
		      return '-';

		    if (trim ($timestamp) == '')
		    {
		            $timestamp = time ();
		    }
		    elseif (!ctype_digit ($timestamp))
		    {
		        $timestamp = strtotime ($timestamp);
		    }
		    # remove S (st,nd,rd,th) there are no such things in indonesia :p
		    $date_format = preg_replace ("/S/", "", $date_format);
		    $pattern = array (
		        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
		        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
		        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
		        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
		        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
		        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
		        '/April/','/June/','/July/','/August/','/September/','/October/',
		        '/November/','/December/',
		    );
		    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
		        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
		        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
		        'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
		        'Oktober','November','Desember',
		    );
		    $date = date ($date_format, $timestamp);
		    $date = preg_replace ($pattern, $replace, $date);
		    $date = "{$date} {$suffix}";
		    return $date;
		}

		public function workOrder()
	{
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		$workOrder	= $this->M_filter->getWorkOrderFilter($awal, $akhir, $bulan, $tahun);
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'workOrder' 	=> $workOrder,
			'menu'      => 'Work Order',
			'controller' => 'C_workOrder'
		);
		$this->load->view('V_filterWorkOrder',$data);
	}
	public function instalasi()
	{
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		$instalasi	= $this->M_filter->getInstalasiFilter($awal, $akhir, $bulan, $tahun);
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'instalasi' 	=> $instalasi,
			'menu'      => 'Instalasi',
			'controller' => 'C_instalasi'
		);
		$this->load->view('V_filterInstalasi',$data);
	}
	public function survey()
	{
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		$survey	= $this->M_filter->getSurveyFilter($awal, $akhir, $bulan, $tahun);
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'survey' 	=> $survey,
			'menu'      => 'Survey',
			'controller' => 'C_survey'
		);
		$this->load->view('V_filterSurvey',$data);
	}
	public function bast()
	{
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		$bast	= $this->M_filter->getBastFilter($awal, $akhir, $bulan, $tahun);
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'bast' 	=> $bast,
			'menu'      => 'Bast',
			'controller' => 'C_bast'
		);
		$this->load->view('V_filterBast',$data);
	}

	public function dashboard()
	{
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		$data = array(
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('V_filterDashboard',$data);
	}

	public function detailWitel($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelWode		= $this->M_filter->getReportByWitelWodeId($id, $awal, $akhir, $bulan, $tahun);
		$dataReportByWitelSurv		= $this->M_filter->getReportByWitelSurvId($id, $awal, $akhir, $bulan, $tahun);
		$dataReportByWitelInst		= $this->M_filter->getReportByWitelInstId($id, $awal, $akhir, $bulan, $tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelWode' 	=> $dataReportByWitelWode,
			'dataReportByWitelSurv' 	=> $dataReportByWitelSurv,
			'dataReportByWitelInst' 	=> $dataReportByWitelInst,
			'content' 				=> 'V_reportDetailWitel',
			'title'					=> 'Detail Witel '.$dataReportByWitelWode[0]['WTEL_NAME'].' | '.$dataReportByWitelWode[0]['WODE_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusWode($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByStatusWode		= $this->M_filter->getReportByStatusWodeId($id, $awal, $akhir, $bulan, $tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusWode' 	=> $dataReportByStatusWode,
			'content' 				=> 'V_reportDetailStatusWode',
			'title'					=> 'Detail Status '.$dataReportByStatusWode[0]['STAT_NAME'].' | '.$dataReportByStatusWode[0]['WODE_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusDrop($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByStatusWode		= $this->M_filter->getReportByStatusWodeId($id, $awal, $akhir, $bulan, $tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusWode' 	=> $dataReportByStatusWode,
			'content' 				=> 'V_reportDetailStatusDrop',
			'title'					=> 'Detail Status '.$dataReportByStatusWode[0]['STAT_NAME'].' | '.$dataReportByStatusWode[0]['WODE_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusSurv($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByStatusSurv		= $this->M_filter->getReportByStatusSurvId($id, $awal, $akhir, $bulan, $tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusSurv' 	=> $dataReportByStatusSurv,
			'content' 				=> 'V_reportDetailStatusSurv',
			'title'					=> 'Detail Status '.$dataReportByStatusSurv[0]['STAT_NAME'].' | '.$dataReportByStatusWode[0]['SURV_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailStatusInst($id, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByStatusInst		= $this->M_filter->getReportByStatusInstId($id, $awal, $akhir, $bulan, $tahun);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByStatusInst' 	=> $dataReportByStatusInst,
			'content' 				=> 'V_reportDetailStatusInst',
			'title'					=> 'Detail Status '.$dataReportByStatusInst[0]['STAT_NAME'].' | '.$dataReportByStatusWode[0]['INST_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailWode($wtelid,$statid, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelStatusWode		= $this->M_filter->getReportByWitelStatusWode($wtelid,$statid);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusWode' 		=> $dataReportByWitelStatusWode,
			'content' 				=> 'V_reportDetailWitelStatusWode',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusWode[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusWode[0]['STAT_NAME'].' | '.$dataReportByWitelStatusWode[0]['WODE_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailDrop($wtelid,$statid, $awal, $akhir, $bulan, $tahun, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelStatusWode		= $this->M_filter->getReportByWitelStatusWode($wtelid,$statid);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusWode' 		=> $dataReportByWitelStatusWode,
			'content' 				=> 'V_reportDetailWitelStatusDrop',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusWode[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusWode[0]['STAT_NAME'].' | '.$dataReportByWitelStatusWode[0]['WODE_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailSurv($wtelid,$statid, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelStatusSurv		= $this->M_filter->getReportByWitelStatusSurv($wtelid,$statid);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusSurv' 		=> $dataReportByWitelStatusSurv,
			'content' 				=> 'V_reportDetailWitelStatusSurv',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusSurv[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusSurv[0]['STAT_NAME'].' | '.$dataReportByWitelStatusSurv[0]['SURV_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function detailInst($wtelid,$statid, $awal, $akhir, $bulan, $tahun)
	{
		$dataReportByWitelStatusInst		= $this->M_filter->getReportByWitelStatusInst($wtelid,$statid);
		$awal 			= $this->input->post('awal');
		$akhir 			= $this->input->post('akhir');
		$bulan 			= $this->input->post('bulan');
		$tahun 			= $this->input->post('tahun');
		date_default_timezone_set("Asia/Bangkok");
		$data = array(
			'dataReportByWitelStatusInst' 		=> $dataReportByWitelStatusInst,
			'content' 				=> 'V_reportDetailWitelStatusInst',
			'title'					=> 'Detail Witel '.$dataReportByWitelStatusInst[0]['WTEL_NAME'].' Status '.$dataReportByWitelStatusInst[0]['STAT_NAME'].' | '.$dataReportByWitelStatusInst[0]['INST_TANGGAL'],
			'awal' 		=> $awal ,
			'akhir' 	=> $akhir,
			'bulan' 	=> $bulan,
			'tahun' 	=> $tahun,
			'controller' => 'C_dashboard'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
}
 ?>