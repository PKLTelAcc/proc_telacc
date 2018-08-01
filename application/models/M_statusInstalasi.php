<?php 

/**
 * 
 */
class M_statusInstalasi extends CI_Model
{
	
	function view()
	{
		$sql	= "select * from status_instalasi";
		$query 	= $this->db->query($sql);
		$return	= $query->result_array();
		return $return; 
	}

	public function insert($data)
	{
		$this->db->insert('status_instalasi',$data);
	}

	public function update($data)
	{
		$sql="select * from status_instalasi where STIN_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('STIN_ID', $id);
		$this->db->update('status_instalasi', $data);
	}

	public function delete($id)
	{
		$this->db->where('STIN_ID', $id);
		$this->db->delete('status_instalasi');
	}
}

 ?>