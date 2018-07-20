<?php
/**
 * 
 */
class M_spTelkom extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function view()
	{
		$sql="SELECT * from sp_telkom inner join survey on SPTL_SURV_ID = SURV_ID inner join work_order on SPTL_WODE_ID = WODE_ID";
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
	public function getsurvey()
	{
		$sql="SELECT * from survey";
		$query=$this->db->query($sql);
       	 $return = $query->result_array();
     	 return $return;
	}
	public function insert($data)
	{
		$this->db->insert('sp_telkom','survey',$data);
	}
	public function update($data)
	{
		$sql="SELECT * from sp_telkom inner join survey on SPTL_SURV_ID = SURV_ID inner join work_order on SPTL_WODE_ID = WODE_ID AND SPTL_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data)
	{
		$this->db->where('SPTL_ID', $id);
		$this->db->update('sp_telkom', $data);
	}

	public function delete($id)
	{
		$this->db->where('SPTL_ID', $id);
	}
}
?>