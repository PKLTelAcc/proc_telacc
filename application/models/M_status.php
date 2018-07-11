<?php 

/**
 * 
 */
class M_status extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from status";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('status',$data);
	}

	public function update($data)
	{
		$sql="select * from status where STAT_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('STAT_ID', $id);
		$this->db->update('status', $data);
	}

	public function delete($id)
	{
		$this->db->where('STAT_ID', $id);
		$this->db->delete('status');
	}
}

 ?>