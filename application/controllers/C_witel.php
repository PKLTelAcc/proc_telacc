<?php 

/**
 * 
 */
class C_witel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_witel');
	}

	public function index(){
		   $data = array(
		   	'title' 	=> 'Witel',
		   	'content' 	=> 'V_witel',
		   );
		   $this->load->view('tampilan/V_combine',$data);
	}
}

 ?>