<?php 

/**
 * 
 */
class M_dashboardInstalasi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getCount($id)
	{
		$sql = "SELECT *, COUNT(INST_STIN_ID) AS jumlah FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID RIGHT JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID = $id GROUP BY STIN_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStatusInstalasiDasboard()
	{
		$sql 	= "SELECT * FROM status_instalasi";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWitel()
	{
		$sql 	= "SELECT * FROM witel INNER JOIN instalasi ON WTEL_ID = INST_WTEL_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID GROUP BY WTEL_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getCountField($wtelid)
	{
		$sql = "SELECT *, COUNT(INST_STIN_ID) AS jumlah FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID RIGHT JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID = $wtelid GROUP BY STIN_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWitelField($wtelid)
	{
		$sql 	= "SELECT * FROM witel WHERE WTEL_ID = $wtelid";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStatusInstalasi($id)
	{
		$sql 	= "SELECT * FROM status_instalasi INNER JOIN instalasi ON STIN_ID = INST_STIN_ID WHERE STIN_ID = $id GROUP BY STIN_ID ASC";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWitelStatusInstalasi($wtelid,$stinid)
	{
		$sql 	= "SELECT * FROM status_instalasi INNER JOIN instalasi ON STIN_ID = INST_STIN_ID INNER JOIN witel ON INST_WTEL_ID = WTEL_ID AND WTEL_ID = $wtelid AND STIN_ID = $stinid GROUP BY STIN_ID ASC";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusInst($wtelid,$stinid)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID =".$wtelid." AND STIN_ID=".$stinid;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusInstId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND STIN_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

}

 ?>