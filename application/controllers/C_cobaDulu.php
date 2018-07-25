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
		$dataIDTA=$this->M_cobaDulu->getIDTA();

		$data = array(
			'title' 	=>	'Coba Dulu',
			'content'	=>	'V_cobaDulu',
			'dataIDTA'	=>	$dataIDTA 
		);

		$this->load->view('tampilan/V_combine', $data);
	}
}
?>