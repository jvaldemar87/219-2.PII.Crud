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
    <link rel="stylesheet" href="css/myStyle.css" />
    <script src="javascript/myScript.js"></script>
</head>

<body class="class_body" id="body">
    <header>
        <?php 
		require_once('Layouts/header.php');
	?>
    </header>
    <form action="post.php" method="post" onsubmit="envio()">

        <div class="icon-user-plus"></div>
        <p>
        <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="requiered" onfocus="campoSelect(x)">
        <p>
        <p>
        <input type="text" name="email" value="<?php echo $datos['email']; ?>" placeholder="Em@il" required="requiered" onfocus="campoSelect(x)">
        <p>
        <textarea name="comentarios" required="requiered" onkeypress="pulsar(event)" onfocus="campoSelect(x)"> <?php echo $datos['comentarios']; ?></textarea>
        <p>
        <input type="hidden" name="id" value="<?php  echo $datos['id']?>">
        <input type="hidden" name="accion" value="<?php  echo $accion?>">
        <input type="submit" name="submit" value="Enviar" id="boton">
    </form>

</body>

</html>
