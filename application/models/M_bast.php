<?php
/**
 * 
 */
class M_bast extends CI_Model
{
	
	function __construct()
	{
		parent::__construct()
	}
	public function view()
	{
		$sql="SELECT * from bast inner join work_order on BAST_WODE_ID = WODE_ID inner join instalasi on BAST_INST_ID = INST_ID inner join sp_telkom on BAST_SPTL_ID = SPTL_ID";
		
	}
}

?>