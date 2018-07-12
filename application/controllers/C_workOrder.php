<?php 
/**
 * 
 */
class C_workOrder extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_workOrder');
	}

	public function index()
	{
		$workOrder=$this->M_workOrder->view();
		$data = array(
			'title' 	=> 'Input Work Order',
			'content'	=> 'V_workOrder',
			'workOrder'	=> $workOrder
		);
		$this->load->view('tampilan/V_combine',$data);
	}
}
 ?>