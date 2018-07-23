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
		$sql 	= "SELECT * FROM work_order";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getSurvey()
	{
		$sql 	= "SELECT * FROM survey";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getInstalasi()
	{
		$sql 	= "SELECT * FROM instalasi";
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