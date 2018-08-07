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
}
 ?>