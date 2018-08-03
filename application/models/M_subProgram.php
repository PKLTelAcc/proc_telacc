<?php 

/**
 * 
 */
class M_subProgram extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from sub_program";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('sub_program',$data);
	}

	public function update($data)
	{
		$sql="select * from sub_program where SUPR_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('SUPR_ID', $id);
		$this->db->update('sub_program', $data);
	}

	public function delete($id)
	{
		$this->db->where('SUPR_ID', $id);
		$this->db->delete('sub_program');
	}
}

 ?>