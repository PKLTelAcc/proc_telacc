<?php
/**
 * 
 */
class M_instalasi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function view()
	{
		$sql = "SELECT * from instalasi inner join work_order on INST_WODE_ID = WODE_ID inner join mitra on INST_MTRA_ID = MTRA_ID inner join pegawai on INST_PEGA_ID = PEGA_ID inner join witel on INST_WTEL_ID = WTEL_ID inner join sub_witel on INST_SWIT_ID = SWIT_ID inner join program on INST_PROG_ID = PROG_ID inner join status on INST_STAT_ID = STAT_ID";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getWorkOrder()
	{
		$sql = "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getPegawai()
	{
		$sql = "SELECT * FROM pegawai";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getWitel()
	{
		$sql = "SELECT * FROM witel";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getSubWitel()
	{
		$sql = "SELECT * FROM sub_witel";
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
	public function getMitra()
	{
		$sql = "SELECT * FROM mitra";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function insert($data)
	{
		$this->db->insert('instalasi',$data);
	}
	public function update($data)
	{
		$sql="SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN pegawai ON INST_PEGA_ID = PEGA_ID INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON INST_STAT_ID = STAT_ID AND INST_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function updateData($id, $data)
	{
		$this->db->where('INST_ID', $id);
		$this->db->update('instalasi', $data);
	}

	public function delete($id)
	{
		$this->db->where('INST_ID', $id);
	}
	public function getProgram()
	{
		$sql = "SELECT * FROM program";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}
?>