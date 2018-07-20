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
		$sql="SELECT * from work_order inner join survey on WODE_ID = SURV_WODE_ID";
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
	public function insert($data, $id)
	{
		$this->db->insert('sp_telkom',$data);
		$this->db->update('survey' ,$id);
	}
	public function update($data)
	{
		$sql="SELECT * from sp_telkom inner join survey on SPTL_SURV_ID = SURV_ID inner join work_order on SPTL_WODE_ID = WODE_ID AND SPTL_ID =".$data;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}

	public function updateData($id, $data, $data2)
	{
		$this->db->where('SPTL_ID', $id);
		$this->db->update('sp_telkom', $data);
		$this->db->update('survey', $data2);
	}

	public function delete($id)
	{
		$this->db->where('SPTL_ID', $id);
	}
}
?>