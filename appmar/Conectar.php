<?php 

class Conexion extends mysqli{

	private $DB_HOST = 'localhost';
	private $DB_USER = 'root';
	private $DB_PASS = '';
	private $DB_NAME = 'proyecto_appmar';

	public function __construct(){
		parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

		$this->set_charset('utf-8');
	
	}
	function __destruct() {
    
    }
}


?>