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
        $sql= ("select Imagen1_dir, Imagen1_text, Imagen1_link, Imagen2_dir, Imagen2_text, Imagen2_link, Imagen3_dir, Imagen3_text, Imagen3_link, Imagen4_dir, Imagen4_text, Imagen4_link from servicios_cont");
if ($result = $db->query($sql)) {
    while ($row = $result->fetch_row()) {
	?>
<div class="box ">
    <?php echo "<img src='".$row[0]."' / width=300 height=300>";?>
	<br clear="all">
    <a href="<?php echo $row[2] ; ?>">
      <?php echo $row[1];?>
    </a>
</div>
<div class="box" >
    <?php echo "<img src='".$row[3]."' / width=300 height=300>";?>
	<br clear="all">
    <a href="<?php echo $row[5] ; ?>">
      <?php echo $row[4];?>
    </a> 
</div>
<div class="box" >
    <?php echo "<img src='".$row[6]."' / width=300 height=300>";?>
	<br clear="all">
    <a href="<?php echo $row[8] ; ?>">
      <?php echo $row[7];?>
    </a> 
</div>
<div class="box" >
    <?php echo "<img src='".$row[9]."' / width=300 height=300>";?>
	<br clear="all">
    <a href="<?php echo $row[11] ; ?>">
      <?php echo $row[10];?>
    </a> 
</div>
		<?php
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