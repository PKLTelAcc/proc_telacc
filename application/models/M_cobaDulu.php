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

	public function getIDTA()
	{
		$sql 	= "SELECT WTEL_NAME, WODE_WTEL_ID, COUNT(WODE_WTEL_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID GROUP BY WODE_WTEL_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}
?>