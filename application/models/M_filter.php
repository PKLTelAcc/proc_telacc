<?php 
/**
 * 
 */
class M_filter extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	

	public function getWorkOrderFilter($awal, $akhir, $bulan, $tahun)
	{
		$sql = "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID WHERE (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getInstalasiFilter($awal, $akhir, $bulan, $tahun)
	{
		$sql = "SELECT * from instalasi inner join work_order on INST_WODE_ID = WODE_ID inner join mitra on INST_MTRA_ID = MTRA_ID /*inner join pegawai on INST_PEGA_ID = PEGA_ID*/ inner join witel on INST_WTEL_ID = WTEL_ID inner join sub_witel on INST_SWIT_ID = SWIT_ID inner join program on INST_PROG_ID = PROG_ID inner join status on WODE_STAT_ID = STAT_ID inner join status_instalasi on INST_STIN_ID = STIN_ID WHERE (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getSurveyFilter($awal, $akhir, $bulan, $tahun)
	{
		$sql = "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID WHERE (DAY(SURV_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(SURV_TANGGAL) = ".$bulan." AND YEAR(SURV_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function getBastFilter($awal, $akhir, $bulan, $tahun)
	{
		$sql = "SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID WHERE (DAY(BAST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(BAST_TANGGAL) = ".$bulan." AND YEAR(BAST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	// Dashboard
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

	public function getCount($id,$awal, $akhir, $bulan, $tahun)
	{
		// $sql 	= "SELECT  count(work_order.WODE_STAT_ID) as 'jumlah' from witel,work_order,status where work_order.WODE_STAT_ID = status.STAT_ID and work_order.WODE_WTEL_ID = witel.WTEL_ID and witel.WTEL_ID =$id GROUP by work_order.WODE_STAT_ID";
		$sql = "SELECT *, COUNT(WODE_STAT_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID RIGHT JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID = $id AND (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun." GROUP BY STAT_ID";

		// $sql = "SELECT COUNT(*) AS jumlah FROM work_order WHERE WODE_WTEL_ID = $id GROUP BY WODE_STAT_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getGolive($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql = "SELECT COUNT(WODE_STAT_ID) AS jumlah FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID RIGHT JOIN status ON WODE_STAT_ID = STAT_ID WHERE (STAT_NAME = 'INSTALASI' AND WTEL_ID = $id) OR (STAT_NAME = 'BAST' AND WTEL_ID = $id) AND (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun." GROUP BY STAT_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelWodeId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id." AND (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelSurvId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id." AND (DAY(SURV_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(SURV_TANGGAL) = ".$bulan." AND YEAR(SURV_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelInstId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID =".$id." AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelBastId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_WTEL_ID =".$id." AND (DAY(BAST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(BAST_TANGGAL) = ".$bulan." AND YEAR(BAST_TANGGAL) = ".$tahun;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}

	public function getReportByStatusWodeId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id." AND (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusSurvId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND STAT_ID =".$id." AND (DAY(SURV_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(SURV_TANGGAL) = ".$bulan." AND YEAR(SURV_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusInstId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND STAT_ID =".$id." AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByStatusBastId($id,$awal, $akhir, $bulan, $tahun)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_STAT_ID =".$id." AND (DAY(BAST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(BAST_TANGGAL) = ".$bulan." AND YEAR(BAST_TANGGAL) = ".$tahun;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}

	public function getReportByWitelStatusWode($wtelid,$statid,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid." AND (DAY(WODE_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(WODE_TANGGAL) = ".$bulan." AND YEAR(WODE_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusSurv($wtelid,$statid,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM survey INNER JOIN work_order ON SURV_WODE_ID = WODE_ID /*INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid." AND (DAY(SURV_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(SURV_TANGGAL) = ".$bulan." AND YEAR(SURV_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusInst($wtelid,$statid,$awal, $akhir, $bulan, $tahun)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID /*INNER JOIN pegawai on INST_PEGA_ID = PEGA_ID*/ INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID INNER JOIN status_instalasi ON INST_STIN_ID = STIN_ID AND WTEL_ID =".$wtelid." AND STAT_ID=".$statid." AND (DAY(INST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(INST_TANGGAL) = ".$bulan." AND YEAR(INST_TANGGAL) = ".$tahun;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReportByWitelStatusBast($wtelid,$statid ,$awal, $akhir, $bulan, $tahun)
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID AND WODE_WTEL_ID =".$wtelid." AND STAT_ID=".$statid." AND (DAY(BAST_TANGGAL) BETWEEN ".$awal." AND ".$akhir.") AND  MONTH(BAST_TANGGAL) = ".$bulan." AND YEAR(BAST_TANGGAL) = ".$tahun;
		 $query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
}
 ?>