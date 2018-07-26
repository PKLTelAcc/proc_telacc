<?php
/**
* 
*/
class C_mitra extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mitra');
	}

	public function index()
	{

		$mitra=$this->M_mitra->view();
		$data = array(
			'title'		=>'Input mitra',
			'content' 	=> 'V_mitra',
			'mitra' 	=>$mitra,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'MTRA_NAME' =>$nama
			);
		$mitra=$this->M_mitra->insert($data);
		 redirect('C_mitra');
	}
	public function formUpdate($id)
	{
		$mitra=$this->M_mitra->update($id);
		$data = array(
			'content'	=>'v_editMitra',
			'title'		=>'Edit Mitra',
			'mitra' 	=>$mitra,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'MTRA_NAME' =>$nama
			);
		$mitra=$this->M_mitra->updateData($id, $data);
		 redirect('C_mitra');
	}
	public function delete($id)
	{
		$this->db->delete('mitra', array('MTRA_ID' => $id));
		redirect('C_mitra');
	}
}
?>
