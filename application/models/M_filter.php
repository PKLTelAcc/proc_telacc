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
}
 ?>