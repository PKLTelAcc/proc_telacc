<?php
if (!empty($status)) header('location:acces_denied.php');
/**
* 
*/
class C_login extends CI_controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
		// $this->load->library("phpmailer_library");
	}
	public function index()
	{
		$this->load->view('V_login');
	}
	public function login()
	{


		$username 	= $_POST["username"];
		$password 	= md5($_POST ["password"]);

		$datalogin 	= $this->M_login->getlogin($username, $password);
		$dbLevel	= $datalogin[0]["LEVE_NAME"];
		$dbUsername = $datalogin[0]["USER_NAME"];
		$dbPassword = $datalogin[0]["USER_PASSWORD"];
		$since 		= $datalogin[0]['USER_TIMESTAMP'];
		$dbwitel	= $datalogin[0]['WTEL_NAME'];
		if ($username == $dbUsername && $password == $dbPassword) {
			$_SESSION['level'] 		= $dbLevel;
			$_SESSION['username'] 	= $dbUsername;
			$_SESSION['since'] 		= $since;
			$_SESSION['USER_ID']	= $datalogin[0]['USER_ID'];
			$_SESSION['WTEL_ID']	= $datalogin[0]['WTEL_ID'];
			header('location:'.base_url().'C_dashboard');
		}else{
			header('Location:' .base_url().'C_login');
		}
	}
	public function forgotPassword()
	{
		$subject = "Atur Ulang Kata Sandi";
		$message = "Anda baru saja mengatur ulang kata sandi anda <br> Kata sandi anda yang baru adalah : ".$this->random_password();
		$email 	 = $this->input->post('email');
        // $objMail = $this->phpmailer_library->load($subject, $message, $email);
	}
	function random_password() {
		$length = 8;
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $password = substr( str_shuffle( $chars ), 0, $length );
	    return $password;
	}
	public function logout()
	{
		session_destroy();
		header('Location:' .base_url().'C_login');
	}
}
	?>
