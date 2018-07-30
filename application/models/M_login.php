<?php
/**
* 
*/
class M_login extends CI_Model
{
	
	public function getlogin($username, $password)
	{
		$sql = "SELECT * from user, level, pegawai where USER_LEVE_ID = LEVE_ID AND USER_PEGA_ID = PEGA_ID AND USER_NAME = '$username' and USER_PASSWORD = '$password'";
		$query = $this->db->query($sql);
		$return = $query->result_array();
		return $return;
	}
}
?>