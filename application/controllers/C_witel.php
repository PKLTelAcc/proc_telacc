<?php
/**
* 
*/
class C_witel extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_witel');
	}

	public function index()
	{

		$witel=$this->M_witel->view();
		$data = array(
			'title'=>'Input Witel',
			'content' => 'V_witel',
			'witel' =>$witel
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'WTEL_NAME' =>$nama
			);
		$witel=$this->M_witel->insert($data);
		 redirect('C_witel');
	}
	public function formUpdate($id)
	{
		$witel=$this->M_witel->update($id);
		$data = array(
			'content'=>'v_editWitel',
			'title'=>'Edit Witel',
			'witel' =>$witel
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'WTEL_NAME' =>$nama
			);
		$witel=$this->M_witel->updateData($id, $data);
		 redirect('C_witel');
	}
	public function delete($id)
	{
		$this->db->delete('witel', array('WTEL_ID' => $id));
		redirect('C_witel');
	}
}
?>
