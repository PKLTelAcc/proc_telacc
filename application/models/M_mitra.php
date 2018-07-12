<?php 

/**
 * 
 */
class M_mitra extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from mitra";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('mitra',$data);
	}

	public function update($data)
	{
		$sql="select * from mitra where MTRA_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('MTRA_ID', $id);
		$this->db->update('mitra', $data);
	}

	public function delete($id)
	{
		$this->db->where('MTRA_ID', $id);
		$this->db->delete('mitra');
	}
}

 ?>