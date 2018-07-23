<?php 
/**
 * 
 */
class M_report extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getWitel()
	{
		$sql 	= "SELECT * FROM witel";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getSubWitel()
	{
		$sql 	= "SELECT * FROM sub_witel";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getProgram()
	{
		$sql 	= "SELECT * FROM program";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStatus()
	{
		$sql 	= "SELECT * FROM status";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getMitra()
	{
		$sql 	= "SELECT * FROM mitra";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWorkOrder()
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getSurvey()
	{
		$sql 	= "SELECT * FROM survey INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON SURV_STAT_ID = STAT_ID INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID INNER JOIN work_order ON SURV_WODE_ID = WODE_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getInstalasi()
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON INST_STAT_ID = STAT_ID INNER JOIN pegawai ON INST_PEGA_ID = PEGA_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getBast()
	{
		$sql 	= "SELECT * FROM bast";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

}
?>