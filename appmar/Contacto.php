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
</head>

<body>
    <header>
        <?php 
		require_once('Layouts/header.php');
	?>
    </header>
    <form action="post.php" method="post">

        <div class="icon-user-plus"></div>

        <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" placeholder="Nombre" required="requiered">

        <input type="text" name="email" value="<?php echo $datos['email']; ?>" placeholder="Em@il" required="requiered">


        <textarea name="comentarios" required="requiered"> <?php echo $datos['comentarios']; ?></textarea>

        <input type="hidden" name="id" value="<?php  echo $datos['id']?>">
        <input type="hidden" name="accion" value="<?php  echo $accion?>">
        <input type="submit" name="submit" value="Enviar">
    </form>


</body>

</html>
