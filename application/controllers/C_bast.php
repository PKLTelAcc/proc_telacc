<?php
/**
 * 
 */
class C_bast extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_bast');	
	}
	public function index()
	{
		$bast=$this->M_bast->view();
		$workOrder=$this->M_bast->getWorkOrder();
		$sp_telkom=$this->M_bast->getSpTelkom();
		$instalasi=$this->M_bast->getInstalasi();
		$status=$this->M_bast->getStatus();
		$data = array(
			'title' 	=> 'Input BAST',
			'content'	=> 'V_bast',
			'bast'		=> $bast,
			'workOrder'	=> $workOrder,
			'sp_telkom'	=> $sp_telkom,
			'instalasi'	=> $instalasi,
			'status'	=> $status
		);
		$this->load->view('tampilan/V_combine',$data);
	}
	public function form()        
	{
		$IdTa 		= $_POST['txtIDTA'];
		$noBast		= $_POST['txtnoBast'];
		$noPo 		= $_POST['txtnoPo'];
		$tanggal 	= $_POST['txtBast'];
		$instalasi 	= $_POST['txtInstalasi'];
		$odp 		= $_POST['txtOdp'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];

	
	$data = array(
		'BAST_WODE_ID'	=> $IdTa,
		'BAST_NO'		=> $noBast,
		'BAST_SPTL_ID'	=> $noPo,
		'BAST_TANGGAL'	=> $tanggal,
		'BAST_INST_ID'	=> $instalasi
		);
	$id = array(
		'INST_ODP' 		=> $odp,
		'INST_MATERIAL'	=> $material,
		'INST_JASA'		=> $jasa,
		'INST_TOTAL'	=> $total
	);
	$bast=$this->M_bast->insert($data);
	redirect('C_bast');
	}
	public function formUpdate($id)
	{
		$bast=$this->M_bast->view($id);
		$workOrder=$this->M_bast->getWorkOrder();
		$sp_telkom=$this->M_bast->getSpTelkom();
		$instalasi=$this->M_bast->getInstalasi();
		$status=$this->M_bast->getStatus();
		$data = array(
			'title' 	=> 'Edit BAST',
			'content'	=> 'V_editBast',
			'bast'		=> $bast,
			'workOrder'	=> $workOrder,
			'sp_telkom'	=> $sp_telkom,
			'instalasi'	=> $instalasi,
			'status'	=> $status
			);
	$this->load->view('tampilan/V_combine',$data);
	}
	public function updateData($id)
	{
		$IdTa 		= $_POST['txtIDTA'];
		$noBast		= $_POST['txtnoBast'];
		$noPo 		= $_POST['txtnoPo'];
		$tanggal 	= $_POST['txtBast'];
		$instalasi 	= $_POST['txtInstalasi'];
		$odp 		= $_POST['txtOdp'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];

	
	$data = array(
		'BAST_WODE_ID'	=> $IdTa,
		'BAST_NO'		=> $noBast,
		'BAST_SPTL_ID'	=> $noPo,
		'BAST_TANGGAL'	=> $tanggal,
		'BAST_INST_ID'	=> $instalasi
		);
	$data2 = array(
		'INST_ODP' 		=> $odp,
		'INST_MATERIAL'	=> $material,
		'INST_JASA'		=> $jasa,
		'INST_TOTAL'	=> $total
	);
	$bast=$this->M_bast->updateDatat($id, $data, $data2);
	redirect('C_bast');
	}
	public function delete($id)
	{
		$this->db->delete('bast', array('BAST_ID' => $id));
		redirect('C_bast');
	}
}
?>