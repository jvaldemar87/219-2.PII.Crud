
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
        $sql= ("select Imagen_dir, Text from inicio_cont");
if ($result = $db->query($sql)) {
    while ($row = $result->fetch_row()) {
    echo "<img src='".$row[0]."' />\n";
	?>
	<br clear="all">
	<?php
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