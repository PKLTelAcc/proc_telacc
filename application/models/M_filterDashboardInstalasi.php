<?php 
/**
 * 
 */
class M_filterDashboardInstalasi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getStatusInstalasiDasboard()
	{
		$sql 	= "SELECT * FROM status_instalasi";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getStatusInstalasi($id, $awal,$akhir,$bulan,$tahun)
	{
		$sql 	= "SELECT * FROM status_instalasi INNER JOIN instalasi ON STIN_ID = INST_STIN_ID WHERE STIN_ID = $id AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun." GROUP BY STIN_ID ASC";
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

	public function getWitelStatusInstalasi($wtelid,$stinid, $awal,$akhir,$bulan,$tahun)
	{
		$sql 	= "SELECT * FROM status_instalasi INNER JOIN instalasi ON STIN_ID = INST_STIN_ID INNER JOIN witel ON INST_WTEL_ID = WTEL_ID AND WTEL_ID = $wtelid AND STIN_ID = $stinid AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun." GROUP BY STIN_ID ASC";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWitelField($wtelid, $awal, $akhir, $bulan, $tahun )
	{
		$sql 	= "SELECT * FROM witel INNER JOIN instalasi ON WTEL_ID = INST_WTEL_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID WHERE WTEL_ID = $wtelid AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun." GROUP BY WTEL_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getCount($id,$awal,$akhir,$bulan,$tahun)
	{
		$sql = "SELECT *, COUNT(INST_STIN_ID) AS jumlah FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID RIGHT JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID = $id AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun." GROUP BY STIN_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getCountField($wtelid,$awal,$akhir,$bulan,$tahun)
	{
		$sql = "SELECT *, COUNT(INST_STIN_ID) AS jumlah FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID RIGHT JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID = $wtelid AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun." GROUP BY STIN_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusInst($wtelid,$stinid,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID =".$wtelid." AND STIN_ID=".$stinid." AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusInstId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND STIN_ID =".$id." AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}
 ?>