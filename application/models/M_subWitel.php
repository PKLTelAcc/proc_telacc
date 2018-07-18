<?php
/**
* 
*/
class M_subWitel extends CI_Model
{
	
	public function view()
	{
		$sql = "SELECT * from sub_witel inner join witel on SWIT_WTEL_ID = WTEL_ID ";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;

	}
	public function getWitel()
	{
		$sql = "select * from witel";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;

	}

	public function insert($data)
	{
		
		$this->db->insert('sub_witel',$data);
	}
	public function update($data)
	{
		$sql="select * from sub_witel where SWIT_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
	public function updateData($id, $data)
	{
		$this->db->where('SWIT_ID', $id);
		$this->db->update('sub_witel', $data);
	}
	public function delete($id)
	{
		$this->db->where('SWIT_ID', $id);
		$this->db->delete('sub_witel');
	}

	public function cekWtel($data)
	{
		$sql = "SELECT * FROM witel WHERE WTEL_NAME ='".$data."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}
	public function insertWtel($data)
	{
		$this->db->insert('witel',$data);
		
	}

	public function ambilID($data)
	{
		$sql = "SELECT * FROM witel WHERE WTEL_NAME ='".$data."'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function cekData($data)
	{
		$sql = "SELECT * FROM sub_witel WHERE SWIT_NAME ='".$data."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}

	public function insertData($data)
	{
		$this->db->insert('sub_witel',$data);
	}
}
?>
