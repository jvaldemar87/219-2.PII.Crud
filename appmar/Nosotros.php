<!DOCTYPE html>
<html lang="es">
<head>

	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
	<?php 
		require_once('Layouts/header.php');
	?>	
</header>

<section>	
	<div align="center" class="container">
	<?php
		
        $db = new Conexion();
        $sql= ("select Imagen_dir, Texto from nosotros_cont");
if ($result = $db->query($sql)) {
    while ($row = $result->fetch_row()) {
    echo "<img src='".$row[0]."' / width=300 height=300>";
	echo $row[1];
    }

    $result->close();
}
        ?>   
	</div>
</section>
<footer>
	<div align="center">
	<?php 
		include_once('Layouts/footer.php');
	?>
	</div>
</footer>
</body>
</html>