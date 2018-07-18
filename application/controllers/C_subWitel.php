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
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
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

	public function upload()
	{
		$fileName = $this->input->post('file', TRUE);

  $config['upload_path'] = './upload/uploadSTO/'; 
  $config['file_name'] = $fileName;
  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
  $config['max_size'] = 10000;

  $this->load->library('upload', $config);
  $this->upload->initialize($config); 
  
  if (!$this->upload->do_upload('file')) {
   $error = array('error' => $this->upload->display_errors());
   $this->session->set_flashdata('msg','Ada kesalahan dalam upload'); 
   redirect('C_subWitel'); 
  } else {
   $media = $this->upload->data();
   $inputFileName = 'upload/uploadSTO/'.$media['file_name'];
   
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
     "WTEL_NAME"=> $rowData[0][7]
    );
     

     $cekWtel=$this->M_subWitel->cekWtel($rowData[0][7]);

     //jika data duplicate ditemukan
     if ($cekWtel!=null) {
     	echo "gak masuk database";
     }else{
     	$this->M_subWitel->insertWtel($data);
     }

     

     $ambilID=$this->M_subWitel->ambilID($rowData[0][7]);

     $id = array(
     "SWIT_NAME"=> $rowData[0][4],
     "SWIT_WTEL_ID"=> $ambilID[0]["WTEL_ID"]
    );

     $cekData=$this->M_subWitel->cekData($rowData[0][4]);

     //jika data duplicate ditemukan
     if ($cekData!=null) {
     	echo "gak masuk database";
     }else{
     	$this->M_subWitel->insertData($id);
     }
     

   } 
   $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
   redirect('C_subWitel');
  }  
 } 
}
?>
