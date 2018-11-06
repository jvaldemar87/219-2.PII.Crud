<?php 
include 'clase_Contacto.php';

if (isset($_POST['submit'])) {
	
	if ($_POST['accion'] == 'insert') {
		
		$nom = $_POST['nombre'];
		$dom = $_POST['email'];
		$com = $_POST['comentarios'];


		$cont = new Contacto($nom, $dom, $com);

		$cont->insert();


	}
	
}

 ?>