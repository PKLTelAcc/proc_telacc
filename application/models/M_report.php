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
	public function getWeek()
	{
		$week = date('w');
		return $week;
	}
	public function getMonth()
	{
		$month = date('m');
		return $month;
	}
	public function getYear()
	{
		$year = date('y');
		return $year;
	}
	public function instalasiPerProgram()
	{
		$sql = "SELECT * from instalasi, program where YEARWEEK(INST_TIMESTAMP)= YEARWEEK(CURRENT_DATE()) order by INST_PROG_ID desc";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}
?>