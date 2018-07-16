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
			'content' => $view	
		);
			$this->load->view('tampilan/v_combine',$data);
	}
}
 ?>