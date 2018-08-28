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
	public function viewData($id, $id2){

		$sql="SELECT * from user Inner JOIN witel on USER_WTEL_ID = WTEL_ID INNER JOIN level on USER_LEVE_ID = LEVE_ID where USER_WTEL_ID =".$id2."  AND USER_ID =".$id;
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

	public function getGolive($id)
	{
		$sql = "SELECT COUNT(WODE_STAT_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID RIGHT JOIN status ON WODE_STAT_ID = STAT_ID WHERE (STAT_NAME = 'INSTALASI' AND WTEL_ID = $id) OR (STAT_NAME = 'BAST' AND WTEL_ID = $id) GROUP BY STAT_ID";
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

	public function getSubProgram()
	{
		$sql 	= "SELECT * FROM program,sub_program INNER JOIN work_order ON WODE_SUPR_ID = SUPR_ID GROUP BY PROG_ID, SUPR_ID ASC";
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

	public function getReportByWitelWodeId($id)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelSurvId($id)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelInstId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelBastId($id)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_WTEL_ID =".$id;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}

	public function getReportByStatusWodeId($id)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusSurvId($id)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusInstId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusBastId($id)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_STAT_ID =".$id;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}

	public function getReportByWitelStatusWode($wtelid,$statid)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusSurv($wtelid,$statid)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusInst($wtelid,$statid)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusBast($wtelid,$statid)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_WTEL_ID =".$wtelid." AND STAT_ID=".$statid;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
}

 ?>