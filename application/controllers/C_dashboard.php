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
		$view = 'tampilan/V_content';
		$data = array(
			'title'		=> 'Dashboard',
			'content' 	=> $view 
		);
		$this->load->view('tampilan/V_combine',$data);
	}
}

 ?>