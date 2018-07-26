<?php
/**
 * 
 */
class C_cobaDulu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_cobaDulu');
	}

	public function index()
	{
		$dataStat=$this->M_cobaDulu->getStat();
		$dataStat2=$this->M_cobaDulu->getStat2();
		$dataStat3=$this->M_cobaDulu->getStat3();

		$data = array(
			'title' 	=>	'Coba Dulu',
			'content'	=>	'V_cobaDulu',
			'dataStat'	=>	$dataStat,
			'dataStat2'	=>	$dataStat2,
			'dataStat3'	=>	$dataStat3,
		);

		$this->load->view('tampilan/V_combine', $data);
	}
}
?>