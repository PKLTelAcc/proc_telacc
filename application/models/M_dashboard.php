<?php 

/**
 * 
 */
class M_dashboard extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function viewData($id){
		
		$sql="SELECT * from user INNER JOIN level on USER_LEVE_ID = LEVE_ID where USER_ID =".$id;
		$query=$this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}

 ?>