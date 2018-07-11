<?php
/**
* 
*/
class C_program extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_program');
	}

	public function index()
	{

		$program=$this->M_program->view();
		$data = array(
			'title'=>'Input Program',
			'content' => 'V_program',
			'program' =>$program
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'PROG_NAME' =>$nama
			);
		$program=$this->M_program->insert($data);
		 redirect('C_program');
	}
	public function formUpdate($id)
	{
		$program=$this->M_program->update($id);
		$data = array(
			'content'=>'v_editProgram',
			'title'=>'Edit Program',
			'program' =>$program
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'PROG_NAME' =>$nama
			);
		$program=$this->M_program->updateData($id, $data);
		 redirect('C_program');
	}
	public function delete($id)
	{
		$this->db->delete('program', array('PROG_ID' => $id));
		redirect('C_program');
	}
}
?>
