<?php 

include 'Conectar.php';

class Contacto{

	protected $nombre;
	protected $email;
	protected $comentarios;
	protected $id;

	public function __construct($nom, $ema, $com, $id = ''){
		$this->nombre= $nom;
		$this->email = $ema;
		$this->comentarios = $com;
		$this->id = $id;
	}
		static function vacio(){
		return new self('', '', '', '');
	} 

		public function insert(){

		$db = new Conexion();

		$sql = "INSERT INTO `contacto_cont` (`Nombre`, `email`, `Comentario`) VALUES ('$this->nombre', '$this->email', '$this->comentarios')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");

	}

		public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `contacto_cont`";

		$result = $db->query($sql);

		return $result;

	}
}
?>