<?php 

/**
 * 
 */
class M_dashboard extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function viewData($id){
		
		$sql="SELECT * from user INNER JOIN level on USER_LEVE_ID = LEVE_ID where USER_ID =".$id;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getCount($id)
	{
		// $sql 	= "SELECT  count(work_order.WODE_STAT_ID) as 'jumlah' from witel,work_order,status where work_order.WODE_STAT_ID = status.STAT_ID and work_order.WODE_WTEL_ID = witel.WTEL_ID and witel.WTEL_ID =$id GROUP by work_order.WODE_STAT_ID";
		$sql = "SELECT *, COUNT(WODE_STAT_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID RIGHT JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID = $id GROUP BY STAT_ID";

		// $sql = "SELECT COUNT(*) AS jumlah FROM work_order WHERE WODE_WTEL_ID = $id GROUP BY WODE_STAT_ID";
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
	public function getWitel()
	{
		$sql 	= "SELECT * FROM witel INNER JOIN work_order ON WTEL_ID = WODE_WTEL_ID INNER JOIN status ON wODE_STAT_ID = STAT_ID GROUP by WTEL_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;	
	}

	public function getReportByWitelId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatus($wtelid,$statid)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}

 ?>