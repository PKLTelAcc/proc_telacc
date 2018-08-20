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

	public function getStatusInstalasi()
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

}

 ?>