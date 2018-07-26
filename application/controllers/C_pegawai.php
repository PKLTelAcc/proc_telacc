<?php
/**
* 
*/
class C_pegawai extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));

	}

	public function index()
	{

		$pegawai=$this->M_pegawai->view();
		$witel=$this->M_pegawai->getWitel();
		$data = array(
			'title'		=>'Input Pegawai',
			'content' 	=> 'V_pegawai',
			'pegawai' 	=>$pegawai,
			'witel' 	=>$witel,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/V_combine',$data);

	}
	public function form()
	{
		$nama = $_POST['txtNama'];
		$nik  = $_POST['txtNik'];
		$psa  = $_POST['txtpsa'];
		$idObj = $_POST['txtIdObj'];
		$witel = $_POST['txtWtel'];


		$data = array(
			'PEGA_NAME' =>$nama,
			'PEGA_NIK'	=>$nik,
			'PEGA_PSA'	=>$psa,
			'PEGA_ID_OBJ' => $idObj,
			'PEGA_WTEL_ID' => $witel
			);
		$pegawai=$this->M_pegawai->insert($data);
		 redirect('C_pegawai');
	}
	public function formUpdate($id)
	{
		$pegawai=$this->M_pegawai->update($id);
		$witel=$this->M_pegawai->getWitel();
		$data = array(
			'content'	=>'V_editPegawai',
			'title'		=>'Edit Pegawai',
			'pegawai' 	=>$pegawai,
			'witel' 	=>$witel,
			'menu'      =>'system'
		);
		$this->load->view('tampilan/v_combine',$data);
	}
	public function updateData($id)
	{
		$nama = $_POST['txtNama'];
		$nik  = $_POST['txtNik'];
		$psa  = $_POST['txtpsa'];
		$idObj = $_POST['txtIdObj'];
		$witel = $_POST['txtWtel'];


		$data = array(
			'PEGA_NAME' =>$nama,
			'PEGA_NIK'	=>$nik,
			'PEGA_PSA'	=>$psa,
			'PEGA_ID_OBJ' => $idObj,
			'PEGA_WTEL_ID' => $witel
			);
		$pegawai=$this->M_pegawai->updateData($id, $data);
		 redirect('C_pegawai');
	}
	public function delete($id)
	{
		$this->db->delete('pegawai', array('PEGA_ID' => $id));
		redirect('C_pegawai');
	}

	public function upload()
	{
		$fileName = $this->input->post('file', TRUE);

  $config['upload_path'] = './upload/uploadPegawai/'; 
  $config['file_name'] = $fileName;
  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
  $config['max_size'] = 10000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) {
   $error = array('error' => $this->upload->display_errors());
   $this->session->set_flashdata('msg','Ada kesalahan dalam upload'); 
   redirect('C_pegawai'); 
  } else {
   $media = $this->upload->data();
   $inputFileName = 'upload/uploadPegawai/'.$media['file_name'];
   
   try {
    $inputFileType = IOFactory::identify($inputFileName);
    $objReader = IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
   } catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
   }

   $sheet = $objPHPExcel->getSheet(0);
   $highestRow = $sheet->getHighestRow();
   $highestColumn = $sheet->getHighestColumn();

   for ($row = 2; $row <= $highestRow; $row++){  
     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
       NULL,
       TRUE,
       FALSE);
     $data = array(
     "WTEL_NAME"=> $rowData[0][5]
    );
     

     $cekWtel=$this->M_pegawai->cekWtel($rowData[0][5]);

     //jika data duplicate ditemukan
     if ($cekWtel!=null) {
     	echo "gak masuk database";
     }else{
     	$this->M_pegawai->insertWtel($data);
     }

     

     $ambilID=$this->M_pegawai->ambilID($rowData[0][5]);

     $id = array(
     "PEGA_ID_OBJ"=> $rowData[0][0],
     "PEGA_NIK"=> $rowData[0][2],
     "PEGA_NAME"=> $rowData[0][3],
     "PEGA_PSA"=> $rowData[0][4],
     "PEGA_WTEL_ID"=> $ambilID[0]["WTEL_ID"]
    );

     $cekData=$this->M_pegawai->cekData($rowData[0][0]);

     //jika data duplicate ditemukan
     if ($cekData!=null) {
     	echo "gak masuk database";
     }else{
     	$this->M_pegawai->insertData($id);
     }
     

   } 
   $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
   redirect('C_pegawai');
  }  
 } 
}
?>
