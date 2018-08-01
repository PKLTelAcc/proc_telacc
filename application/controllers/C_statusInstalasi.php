<?php
/**
* 
*/
class C_statusInstalasi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_statusInstalasi');
	}

	public function index()
	{

		$statusInstalasi=$this->M_statusInstalasi->view();
		$data = array(
			'title'				=>'Input Status Instalasi',
			'content' 			=> 'V_statusInstalasi',
			'status_instalasi' 	=>$statusInstalasi,
			'menu'      		=>'system'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'STIN_NAME' =>$nama
			);
		$statusInstalasi=$this->M_statusInstalasi->insert($data);
		 redirect('C_statusInstalasi');
	}
	public function formUpdate($id)
	{
		$statusInstalasi=$this->M_statusInstalasi->update($id);
		$data = array(
			'content'			=>'v_editStatusInstalasi',
			'title'				=>'Edit Status Instalasi',
			'status_instalasi' 	=>$statusInstalasi,
			'menu'     			=>'system'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];


		$data = array(
			'STIN_NAME' =>$nama
			);
		$statusInstalasi=$this->M_statusInstalasi->updateData($id, $data);
		 redirect('C_statusInstalasi');
	}
	public function delete($id)
	{
		$this->db->delete('status_instalasi', array('STIN_ID' => $id));
		redirect('C_statusInstalasi');
	}
}
?>
