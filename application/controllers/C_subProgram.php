<?php
/**
* 
*/
class C_subProgram extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_subProgram');
	}

	public function index()
	{

		$subProgram=$this->M_subProgram->view();
		$data = array(
			'title'		=>'Input Sub Program',
			'content' 	=> 'V_subProgram',
			'sub_program' 	=>$subProgram,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'SUPR_NAME' =>$nama
			);
		$subProgram=$this->M_subProgram->insert($data);
		 redirect('C_subProgram');
	}
	public function formUpdate($id)
	{
		$subProgram=$this->M_subProgram->update($id);
		$data = array(
			'content'	=>'v_editSubProgram',
			'title'		=>'Edit Sub Program',
			'sub_program' 	=>$subProgram,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'SUPR_NAME' =>$nama
			);
		$subProgram=$this->M_subProgram->updateData($id, $data);
		 redirect('C_subProgram');
	}
	public function delete($id)
	{
		$this->db->delete('sub_program', array('SUPR_ID' => $id));
		redirect('C_subProgram');
	}
}
?>
