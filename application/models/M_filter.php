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
}
 ?>