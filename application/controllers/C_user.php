<?php
/**
* 
*/
class C_user extends CI_Controller
{
	function __construct(){
			parent::__construct();
			$this->load->model('M_user');
		}
	public function index()
	{
		
		$dataLevel		=$this->M_user->getLevel();
		$dataUser		=$this->M_user->getUser();
		$dataPegawai 	= $this->M_user->getPegawai();
		$data = array(
			'title'			=> 'Register',
			'content'		=> 'V_user',
			'menu'         	=> 'Input User',
			'dataLevel' 	=> $dataLevel,
			'dataUser' 		=> $dataUser,
			'dataPegawai'	=> $dataPegawai,
			'menu'      	=>'system'
		);

		$this->load->view('tampilan/v_combine', $data);

	
	}
	public function FormRegister()
	{
		$idpegawai=$_POST['cmbNamaPega'];
		$username = $_POST['txtusername'];
		$password = md5($_POST['txtpassword']);
		$level = $_POST['level'];

		$data = array(
			'USER_PEGA_ID'=>$idpegawai,
			'USER_NAME' =>$username ,
			'USER_PASSWORD' =>$password ,
			'USER_LEVE_ID' =>$level   
			);
		$dataLevel=$this->M_user->Insert($data);
		redirect('C_user','refresh');
		
	}
	public function FormUpdate($id){
		$dataLevel=$this->M_user->getLevel();
		$dataUser=$this->M_user->viewData($id);
		$dataPegawai 	= $this->M_user->getPegawai();
		$data = array(
			'title'			=>'Edit User',
			'content'		=>'V_editUser',
			'dataLevel' 	=>$dataLevel,
			'id'			=>$id,
			'dataUser'		=>$dataUser,
			'menu'         	=> 'Input User',
			'dataPegawai'	=> $dataPegawai,
			'menu'      	=>'system'
		);

		$this->load->view('tampilan/v_combine',$data);
	}
	public function UpdateData($id){
		
		$idpegawai=$_POST['cmbNamaPega'];
		$username = $_POST['txtusername'];
		$password = md5($_POST['txtpassword']);
		$level = $_POST['level'];

		$data = array(
			
			'USER_PEGA_ID' =>$idpegawai ,
			'USER_NAME' =>$username ,
			'USER_PASSWORD' =>$password ,
			'USER_LEVE_ID' =>$level   
			);
		$dataLevel=$this->M_user->UpdateData($data,$id);
		redirect('C_user','refresh');
	}
	public function Delete($id){
		$dataDelete=$this->M_user->Delete($id);
		redirect('C_user','refresh');
	}
	public function viewData()
	{
		$user=$this->M_user->viewData();
	}
}