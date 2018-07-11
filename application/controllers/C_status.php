<?php
/**
* 
*/
class C_status extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_status');
	}

	public function index()
	{

		$status=$this->M_status->view();
		$data = array(
			'title'=>'Input Status',
			'content' => 'V_status',
			'status' =>$status
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'STAT_NAME' =>$nama
			);
		$status=$this->M_status->insert($data);
		 redirect('C_status');
	}
	public function formUpdate($id)
	{
		$status=$this->M_status->update($id);
		$data = array(
			'content'=>'v_editStatus',
			'title'=>'Edit Status',
			'status' =>$status
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'STAT_NAME' =>$nama
			);
		$status=$this->M_status->updateData($id, $data);
		 redirect('C_status');
	}
	public function delete($id)
	{
		$this->db->delete('status', array('STAT_ID' => $id));
		redirect('C_status');
	}
}
?>
