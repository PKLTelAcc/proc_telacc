<?php 

/**
 * 
 */
class M_pegawai extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from pegawai inner join witel on PEGA_WTEL_ID = WTEL_ID";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function getWitel()
	{
		$sql = "SELECT * FROM witel";
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function insert($data)
	{
		$this->db->insert('pegawai',$data);
	}

	public function update($data)
	{
		$sql="select * from pegawai where PEGA_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('PEGA_ID', $id);
		$this->db->update('pegawai', $data);
	}

	public function delete($id)
	{
		$this->db->where('PEGA_ID', $id);
		$this->db->delete('pegawai');
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
		$sql = "SELECT * FROM pegawai WHERE PEGA_NIK ='".$data."'";
		$query = $this->db->query($sql);
		$return = $query->row();
		return $return;
	}

	public function insertData($data)
	{
		$this->db->insert('pegawai',$data);
	}
}

 ?>