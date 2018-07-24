<?php 
/**
 * 
 */
class M_report extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getWitel()
	{
		$sql 	= "SELECT * FROM witel";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getSubWitel()
	{
		$sql 	= "SELECT * FROM sub_witel";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getProgram()
	{
		$sql 	= "SELECT * FROM program";
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

	public function getMitra()
	{
		$sql 	= "SELECT * FROM mitra";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getWorkOrder()
	{
		$sql 	= "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getSurvey()
	{
		$sql 	= "SELECT * FROM survey INNER JOIN witel ON SURV_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON SURV_SWIT_ID = SWIT_ID INNER JOIN program ON SURV_PROG_ID = PROG_ID INNER JOIN status ON SURV_STAT_ID = STAT_ID INNER JOIN pegawai ON SURV_PEGA_ID = PEGA_ID INNER JOIN work_order ON SURV_WODE_ID = WODE_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getInstalasi()
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON INST_STAT_ID = STAT_ID INNER JOIN pegawai ON INST_PEGA_ID = PEGA_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getBast()
	{
		$sql 	= "SELECT * FROM bast";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function getReport()
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN status ON INST_STAT_ID = STAT_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID";
		$query 	= $this->db->query($sql);
		$return = $query->result_array();
		return $return;;
	}

	/*public function insert($data)
	{
		$this->db->insert('instalasi',$data);
	}*/

	public function cekWtel($idWtel)
	{
		$sql = "SELECT * FROM witel WHERE WTEL_NAME ='".$idWtel."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertWtel($idWtel)
	{
		$this->db->insert('witel',$idWtel);
		
	}

	public function ambilIDWtel($idWtel)
	{
		$sql = "SELECT * FROM witel WHERE WTEL_NAME ='".$idWtel."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function cekSwit($idSwit)
	{
		$sql = "SELECT * FROM sub_witel WHERE SWIT_NAME ='".$idSwit."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}

	public function insertSwit($idSwit)
	{
		$this->db->insert('sub_witel',$idSwit);
	}

	public function cekProg($idProg)
	{
		$sql = "SELECT * FROM program WHERE PROG_NAME ='".$idProg."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertProg($idProg)
	{
		$this->db->insert('program',$idProg);
		
	}

	public function cekStat($idStat)
	{
		$sql = "SELECT * FROM status WHERE STAT_NAME ='".$idStat."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertStat($idStat)
	{
		$this->db->insert('status',$idStat);
		
	}

	public function ambilIDSwit($idSwit)
	{
		$sql = "SELECT * FROM sub_witel WHERE SWIT_NAME ='".$idSwit."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function ambilIDProg($idProg)
	{
		$sql = "SELECT * FROM program WHERE PROG_NAME ='".$idProg."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function ambilIDStat($idStat)
	{
		$sql = "SELECT * FROM status WHERE STAT_NAME ='".$idStat."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function cekWode($idWode)
	{
		$sql = "SELECT * FROM work_order WHERE WODE_ID_TA ='".$idWode."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertWode($idWode)
	{
		$this->db->insert('work_order',$idWode);
		
	}

	public function ambilIDWode($idWode)
	{
		$sql = "SELECT * FROM work_order WHERE WODE_ID_TA ='".$idWode."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function cekInst($idInst)
	{
		$sql = "SELECT * FROM instalasi WHERE INST_TOTAL ='".$idInst."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertInst($idInst)
	{
		$this->db->insert('instalasi',$idInst);
		
	}
}
?>