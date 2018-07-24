<?php 
/**
 * 
 */
class M_survey extends CI_Model
{
	
	function view()
	{
		$sql = "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON SURV_STAT_ID = STAT_ID";
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

		public function getProgram()
	{
		$sql = "SELECT * FROM program";
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
		$this->db->insert('survey',$data);
	}

	public function update($data)
	{
		$sql="SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON SURV_STAT_ID = STAT_ID AND SURV_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('SURV_ID', $id);
		$this->db->update('survey', $data);
	}

	public function delete($id)
	{
		$this->db->where('SURV_ID', $id);
	}
}
 ?>