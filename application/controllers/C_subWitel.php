<?php
/**
 * 
 */
class C_subWitel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_subWitel');
	}
	public function index()
	{
		$subwitel=$this->M_subWitel->view();

		$data = array(
			'title' 	=> 'sub witel',
			'content'	=> 'V_subWitel',
			'sub_witel' => $subwitel
		);

		$this->load->view('tampilan/V_combine',$data);
	}
	public function form()
	{
		$namaSub	= $_POST['txtsubWitel'];
		$namaWitel	= $_POST['txtnamaWitel'];

		$data = array(
			'SWIT_NAME' => $namaSub,
			'SWIT_WTEL_ID' => $namaWitel
		);

		$swit=$this->M_subWitel->insert($data);
		redirect ('C_subWitel');
	}
	public function formUpdate($id)
	{
		$view 		=$this->M_subWitel->view();
		$update		=$this->M_subWitel->update($id);	
		$witel 	 	=$this->M_subWitel->getWitel();

		$data = array(
			'update'	=> $update,
			'title' 	=> 'edit sub witel',
			'content'	=> 'V_subWitel'
		);

		$this->load->view('V_editSubWitel',$data);
	}
	public function updateData($id)
	{
		$namaSub	= $_POST['txtsubWitel'];
		$namaWitel	= $_POST['txtnamaWitel'];


		$data = array(
			'SWIT_WTEL_ID' => $namaWitel,
			'SWIT_NAME' => $namaSub
		);
		$swit=$this->M_subWitel->updateData($id, $data);
		redirect ('C_subWitel');
	}
	public function delete($id)
	{
		$this->db->delete('sub_witel', array('SWIT_ID' => $id));
		redirect('C_subWitel');
	}
}
?>