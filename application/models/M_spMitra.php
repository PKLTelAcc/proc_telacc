<?php
/**
 * 
 */
class M_spMitra extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function view()
	{
		$sql="SELECT * from sp_mitra inner join work_order on SPMT_WODE_ID = WODE_ID";
		$query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
	public function getWorkOrder()
	{
		$sql="SELECT * from work_order";
		$query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
	public function insert($data)
	{
		$this->db->insert('sp_mitra',$data);
	}
	public function update($data)
	{
		$sql="SELECT * from sp_mitra inner join work_order on SPMT_WODE_ID = WODE_ID AND SPMT_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('SPMT_ID', $id);
		$this->db->update('sp_mitra', $data);
	}

	public function delete($id)
	{
		$this->db->where('SPMT_ID', $id);
	}
}
?>