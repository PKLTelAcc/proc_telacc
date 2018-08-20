<?php 

/**
 * 
 */
class C_dashboardInstalasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboardInstalasi');
	}

	public function index()
	{

	}

	public function dashboardInstalasi()
	{
		$view = 'V_dashboardInstalasi';
		$data = array(
			'title' => 'Dashboard Instalasi',
			'content' => $view,
		);
		$this->load->view('tampilan/v_combine',$data);
	}

	public function dashboardInstalasiField($wtelid)
	{
		$view = 'V_dashboardInstalasiField';
		$getCount = $this->M_dashboardInstalasi->getCountField($wtelid);
		$getWitel = $this->M_dashboardInstalasi->getWitelField($wtelid);
		$data = array(
			'title' => 'Dashboard Instalasi',
			'content' => $view,
			'getCount' => $getCount,
			'getWitel' => $getWitel
		);
		$this->load->view('tampilan/v_combine',$data);
	}
}

 ?>