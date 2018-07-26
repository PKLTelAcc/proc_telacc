<?php 
/**
 * 
 */
class M_cobaDulu extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getStat()
	{
		$sql 	= "SELECT WTEL_NAME, COUNT(*) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID WHERE WODE_STAT_ID=1 GROUP BY WTEL_NAME";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStat2()
	{
		$sql 	= "SELECT WTEL_NAME, COUNT(*) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID WHERE WODE_STAT_ID=2 GROUP BY WTEL_NAME";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStat3()
	{
		$sql 	= "SELECT WTEL_NAME, COUNT(*) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID WHERE WODE_STAT_ID=3 GROUP BY WTEL_NAME";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
		
}
?>