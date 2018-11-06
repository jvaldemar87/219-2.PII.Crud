<?php 
	include 'Conectar.php';
	class Usuario{
		protected $Email;
		protected $Contra;
		protected $id;

		
			
			
	/*** for login process ***/
		public function check_login($emailuser, $password){
        
		$db = new Conexion();
		$query = "SELECT id from usuarios WHERE Email='$emailuser' and Contra='$password'";
		
		$result = $db->query($query) or die($db->error);

		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
	            return true;
	        }
			
		else{return false;}
	}
	public function get_fullname($uid){
		$query = "SELECT fullname FROM users WHERE uid = $uid";
		$db = new Conexion();
		$result = $db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		
	}
	
}