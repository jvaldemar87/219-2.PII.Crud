<?php 
include 'clase_Contacto.php';
$datos = array('nombre'=>'', 'email'=>'', 'comentarios'=>'Comentarios', 'id'=>'');
$accion = 'insert';
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
	<?php 
		require_once('Layouts/header_ad.php');
	?>	
</header>
 <center><strong><h1>Comentarios Contacto</h1></strong></center>
    <p>
<?php include 'Tabla_contacto.php';?>


</body>
</html> 