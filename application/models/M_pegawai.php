<?php 

/**
 * 
 */
class M_pegawai extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from pegawai";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
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
}

 ?>