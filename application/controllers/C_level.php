<?php
/**
* 
*/
class C_level extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_level');
	}

	public function index()
	{

		$level=$this->M_level->view();
		$data = array(
			'title'		=>'Input Level',
			'content' 	=> 'V_level',
			'level' 	=>$level,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$level = $_POST['txtLevel'];


		$data = array(
			'LEVE_NAME' =>$level
			);
		$level=$this->M_level->insert($data);
		 redirect('C_level');
	}
	public function formUpdate($id)
	{
		$level=$this->M_level->update($id);
		$data = array(
			'content'	=>'v_editlevel',
			'title'		=>'Edit level',
			'level' 	=>$level,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$level = $_POST['txtLevel'];



		$data = array(
			'LEVE_NAME' =>$level
			);
		$pegawai=$this->M_level->updateData($id, $data);
		 redirect('C_level');
	}
	public function delete($id)
	{
		$this->db->delete('level', array('LEVE_ID' => $id));
		redirect('C_level');
	}
}
?>
