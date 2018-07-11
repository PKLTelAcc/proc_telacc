<?php 

/**
 * 
 */
class M_witel extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from witel";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('witel',$data);
	}

	public function update($data)
	{
		$sql="select * from witel where WTEL_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('WTEL_ID', $id);
		$this->db->update('witel', $data);
	}

	public function delete($id)
	{
		$this->db->where('WTEL_ID', $id);
		$this->db->delete('witel');
	}
}

 ?>