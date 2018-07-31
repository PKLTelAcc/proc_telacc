<?php 
/**
 * 
 */
class C_instalasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_instalasi');
	}

	public function index()
	{
		$instalasi=$this->M_instalasi->view();
		$witel=$this->M_instalasi->getWitel();
		$subWitel=$this->M_instalasi->getSubWitel();
		$program=$this->M_instalasi->getProgram();
		$status=$this->M_instalasi->getStatus();
		$workOrder=$this->M_instalasi->getWorkOrder();
		$pegawai=$this->M_instalasi->getPegawai();
		$mitra=$this->M_instalasi->getMitra();
		$data = array(
			'title' 	=> 'Input Instalasi',
			'content'	=> 'V_instalasi',
			'instalasi'	=> $instalasi,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'workOrder'	=> $workOrder,
			'pegawai'	=> $pegawai,
			'mitra'		=> $mitra,
			'menu'      =>'Input Instalasi'
		);
		$this->load->view('tampilan/V_combine',$data);
	}


	public function form()
	{			
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		// $lokasi 	= $_POST['txtLokasi'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];
		$odp 		= $_POST['txtODP'];
		$surveyer 	= $_POST['txtSurveyer'];
		$mitra 		= $_POST['txtMitra'];
		// $nik 		= $_POST['txtNIK'];
		$date 		= $_POST['dateInstalasi'];
		$target		= $_POST['dateTarget'];
		$status 	= $_POST['txtStat'];
		$program 	= $_POST['txtProg'];
		$progres	= $_POST['txtprogres'];
		$kendala	= $_POST['txtkendala'];
		
		$data = array(
			'INST_WODE_ID'		=> $idta,
			'INST_WTEL_ID' 		=> $witel,
			'INST_SWIT_ID' 		=> $subWitel,
			// 'INST_WODE_ID' 		=> $lokasi,
			'INST_MATERIAL' 	=> $material,
			'INST_JASA' 		=> $jasa,
			'INST_TOTAL' 		=> $total,
			'INST_ODP' 			=> $odp,
			'INST_PEGA_ID' 		=> $surveyer,
			'INST_MTRA_ID'		=> $mitra,
			// 'INST_PEGA_ID' 		=> $nik,
			'INST_TANGGAL' 		=> $date,
			'INST_TARGET'		=> $target,
			'INST_PROG_ID' 		=> $program,
			'INST_PROGRES'		=> $progres,
			'INST_KENDALA'		=> $kendala
		);
		$dataStat = array(
			'WODE_STAT_ID' 		=> $status
		);
		$instalasi=$this->M_instalasi->insert($data);
		$status=$this->M_instalasi->updateStat($idta,$dataStat);
		redirect('C_instalasi');
	}

	public function formUpdate($id)
	{
		$instalasi=$this->M_instalasi->update($id);
		$witel=$this->M_instalasi->getWitel();
		$subWitel=$this->M_instalasi->getSubWitel();
		$program=$this->M_instalasi->getProgram();
		$status=$this->M_instalasi->getStatus();
		$workOrder=$this->M_instalasi->getWorkOrder();
		$pegawai=$this->M_instalasi->getPegawai();
		$mitra=$this->M_instalasi->getMitra();
		$data = array(
			'title' 	=> 'Edit Instalasi',
			'content'	=> 'V_editInstalasi',
			'instalasi'	=> $instalasi,
			'witel'		=> $witel,
			'subWitel'	=> $subWitel,
			'program'	=> $program,
			'status'	=> $status,
			'workOrder'	=> $workOrder,
			'pegawai'	=> $pegawai,
			'mitra'		=> $mitra,
			'menu'      =>'Input Instalasi'
		);
		$this->load->view('tampilan/V_combine',$data);
	}

	public function updateData($id)
	{	
		$idta 		= $_POST['txtIDTA'];
		$witel 		= $_POST['txtWtel'];
		$subWitel 	= $_POST['txtSwit'];
		// $lokasi 	= $_POST['txtLokasi'];
		$material 	= $_POST['txtMaterial'];
		$jasa 		= $_POST['txtJasa'];
		$total 		= $_POST['txtTotal'];
		$odp 		= $_POST['txtODP'];
		$surveyer 	= $_POST['txtSurveyer'];
		$mitra 		= $_POST['txtMitra'];
		// $nik 		= $_POST['txtNIK'];
		$date 		= $_POST['dateInstalasi'];
		$target		= $_POST['dateTarget'];
		$status 	= $_POST['txtStat'];
		$program 	= $_POST['txtProg'];
		$progres	= $_POST['txtprogres'];
		$kendala	= $_POST['txtkendala'];
		
		$data = array(
			'INST_WODE_ID'		=> $idta,
			'INST_WTEL_ID' 		=> $witel,
			'INST_SWIT_ID' 		=> $subWitel,
			// 'INST_WODE_ID' 		=> $lokasi,
			'INST_MATERIAL' 	=> $material,
			'INST_JASA' 		=> $jasa,
			'INST_TOTAL' 		=> $total,
			'INST_ODP' 			=> $odp,
			'INST_PEGA_ID' 		=> $surveyer,
			'INST_MTRA_ID'		=> $mitra,
			// 'INST_PEGA_ID' 		=> $nik,
			'INST_TANGGAL' 		=> $date,
			'INST_TARGET'		=> $target,
			'INST_PROG_ID' 		=> $program,
			'INST_PROGRES'		=> $progres,
			'INST_KENDALA'		=> $kendala
		);
		$dataStat = array(
			'WODE_STAT_ID' 		=> $status
		);
		$instalasi=$this->M_instalasi->updateData($id,$data);
		$status=$this->M_instalasi->updateStat($id,$dataStat);
		redirect('C_instalasi');
	}

	public function delete($id)
	{
		$this->db->delete('instalasi', array('INST_ID' => $id));
		redirect('C_instalasi');
	}
}
 ?>