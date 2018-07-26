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

	public function getStat($id)
	{
		// $sql 	= "SELECT  count(work_order.WODE_STAT_ID) as 'jumlah' from witel,work_order,status where work_order.WODE_STAT_ID = status.STAT_ID and work_order.WODE_WTEL_ID = witel.WTEL_ID and witel.WTEL_ID =$id GROUP by work_order.WODE_STAT_ID";
		$sql = "SELECT COUNT(WODE_STAT_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID = $id GROUP BY WODE_STAT_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function status()
	{
		$sql 	= "SELECT * FROM status";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getWitel()
	{
		$sql 	= "SELECT * FROM witel, work_order where WTEL_ID = WODE_WTEL_ID GROUP by WTEL_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;	
	}
		
}
?>