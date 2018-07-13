<?php
/**
* 
*/
class C_subWItel extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_subWitel');
	}

	public function index()
	{
		$subWitel=$this->M_subWitel->view();
		$witel=$this->M_subWitel->getWitel();
		$data = array(
			'sub_witel' =>$subWitel,
			'witel' 	=>$witel,
			'title'		=>'Input Sub Witel',
			'content' 	=> 'V_subWitel'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$witel = $_POST['txtWtel'];
		$nama = $_POST['txtNama'];

		$data = array(
			'SWIT_WTEL_ID' 	=>$witel,
			'SWIT_NAME' 	=>$nama
			);
		$subWitel=$this->M_subWitel->insert($data);
		 redirect('C_subWitel');
	}
	public function formUpdate($id){
		$subWitel=$this->M_subWitel->update($id); 
		$witel=$this->M_subWitel->getWitel();
		$data  = array(
			'content'=>'V_editSubWitel',
			'witel' =>$witel,
			'title'=>'Edit Sub Witel',
			'sub_witel' =>$subWitel
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function updateData($id)
	{
		$witel = $_POST['txtWtel'];
		$nama = $_POST['txtNama'];

		$data = array(
			'SWIT_WTEL_ID' 	=>$witel,
			'SWIT_NAME' 	=>$nama
			);
		$subWitel=$this->M_subWitel->updateData($id, $data);
		redirect('C_subWitel');
	}
	public function delete($id)
	{
		$this->db->delete('sub_witel', array('SWIT_ID' => $id));
		redirect('C_subWitel');
	}


}
?>
