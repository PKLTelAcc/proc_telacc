<?php 
/**
 * 
 */
class M_workOrder extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}
	
	function viewByWitel()
	{
		$sql = "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID where WODE_WTEL_ID =".$_SESSION['WTEL_ID'];
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	function view()
	{
		$sql = "SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID ";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

		public function getWitel()
	{
		$sql = "SELECT * FROM witel";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

		public function getSubWitel()
	{
		$sql = "SELECT * FROM sub_witel";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

		public function getProgram()
	{
		$sql = "SELECT * FROM program";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
		public function getSubProgram()
	{
		$sql = "SELECT * FROM sub_program";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
		public function getStatus()
	{
		$sql = "SELECT * FROM status";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function insert($data)
	{
		$this->db->insert('work_order',$data);
	}

	public function update($data)
	{
		$sql="SELECT * FROM work_order INNER JOIN witel ON WODE_WTEL_ID = WTEL_ID INNER JOIN sub_witel ON WODE_SWIT_ID = SWIT_ID INNER JOIN program ON WODE_PROG_ID = PROG_ID INNER JOIN sub_program ON WODE_SUPR_ID = SUPR_ID INNER JOIN status ON WODE_STAT_ID = STAT_ID AND WODE_ID=".$data; 
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('WODE_ID', $id);
		$this->db->update('work_order', $data);
	}

	public function delete($id)
	{
		$this->db->where('WODE_ID', $id);
	}
	
	public function getSwitName($str)
    {
      $sql="select * from sub_witel where SWIT_WTEL_ID =".$str;
      $query=$this->db->query($sql);
      $return = $query->result_array();
      return $return;
    }

    public function getSwitByWtelId($id)
    {
      $sql    = "SELECT * FROM sub_witel INNER JOIN witel ON SWIT_WTEL_ID = WTEL_ID WHERE SWIT_WTEL_ID =".$id;
      $query  = $this->db->query($sql);
      $return = $query->result_array();
      return $return; 
    }
    public function getView()
    {
      $sql    = "SELECT * FROM work_order inner join witel on WODE_WTEL_ID = WTEL_ID inner join pegawai on WTEL_ID = PEGA_WTEL_ID INNER JOIN user on PEGA_ID = USER_PEGA_ID where PEGA_WTEL_ID";
      $query  = $this->db->query($sql);
      $return = $query->result_array();
      return $return; 
    }

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

	public function cekSupr($idSupr)
	{
		$sql = "SELECT * FROM sub_program WHERE SUPR_NAME ='".$idSupr."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertSupr($idSupr)
	{
		$this->db->insert('sub_program',$idSupr);
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

	public function ambilIDSupr($idSupr)
	{
		$sql = "SELECT * FROM sub_program WHERE SUPR_NAME ='".$idSupr."'";
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
}
 ?>