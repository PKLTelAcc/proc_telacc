<?php
/**
 * 
 */
class M_bast extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function view()
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID";
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
	public function getWorkOrder()
	{
		$sql="SELECT * from  work_order inner join instalasi on WODE_ID = INST_WODE_ID ";
		 $query=$this->db->query($sql);
      $return = $query->result_array();
      return $return;
	}
	public function getSpTelkom()
	{
		$sql="SELECT * from sp_telkom";
		 $query=$this->db->query($sql);
      $return = $query->result_array();
      return $return;
	}
	public function getInstalasi()
	{
		$sql="SELECT * from instalasi";
		 $query=$this->db->query($sql);
      $return = $query->result_array();
      return $return;
	}
		public function getStatus()
	{
		$sql = "SELECT * FROM status";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function insert($data)
	{
		$this->db->insert('bast',$data);
	}
	public function update($data)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND BAST_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('BAST_ID', $id);
		$this->db->update('bast', $data);
		
	}
	public function updateInst($id, $dataInst)
	{
		$this->db->where('INST_ID', $id);
		$this->db->update('instalasi', $dataInst);
	}
	public function delete($id)
	{
		$this->db->where('BAST_ID', $id);
	}
}

?>