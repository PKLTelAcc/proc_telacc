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

	public function getReport()
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID";
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

	public function cekMtra($idMtra)
	{
		$sql = "SELECT * FROM mitra WHERE MTRA_NAME ='".$idMtra."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertMtra($idMtra)
	{
		$this->db->insert('mitra',$idMtra);
		
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

	public function ambilIDMtra($idMtra)
	{
		$sql = "SELECT * FROM mitra WHERE MTRA_NAME ='".$idMtra."'";
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

	public function cekSurv($idSurv)
	{
		$sql = "SELECT * FROM survey WHERE SURV_TOTAL ='".$idSurv."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertSurv($idSurv)
	{
		$this->db->insert('survey',$idSurv);
		
	}
	public function getMonth()
	{
		$month = date('m');
		return $month;
	}
	public function getYear()
	{
		$year = date('Y');
		return $year;
	}
	public function getReportByWitelId($id)
	{
		$sql 	= "SELECT * FROM instalasi INNER JOIN witel ON INST_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON INST_SWIT_ID = SWIT_ID INNER JOIN program ON INST_PROG_ID = PROG_ID INNER JOIN mitra ON INST_MTRA_ID = MTRA_ID INNER JOIN work_order ON INST_WODE_ID = WODE_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WTEL_ID =".$id;
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	
}
?>