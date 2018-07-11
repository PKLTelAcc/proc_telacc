<?php 

/**
 * 
 */
class C_witelParent extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_witelParent');
	}

	public function index(){
		   $data = array(
		   	'title' 	=> 'Witel',
		   	'content' 	=> 'V_witelParent',
		   );
		   $this->load->view('tampilan/V_combine',$data);
	}
}

 ?>