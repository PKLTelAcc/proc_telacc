<?php 

/**
 * 
 */
class M_program extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from program";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('program',$data);
	}

	public function update($data)
	{
		$sql="select * from program where PROG_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('PROG_ID', $id);
		$this->db->update('program', $data);
	}

	public function delete($id)
	{
		$this->db->where('PROG_ID', $id);
		$this->db->delete('program');
	}
}

 ?>