<?php
require_once 'conectar.php';
$db = new Conexion();
$texto=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="Recursos/Imagen/".$foto;
copy($ruta,$destino);
$sql= ("UPDATE `nosotos_cont` SET `Imagen_dir`='$destino',`Texto`='$texto' WHERE id =1;");
$db->query($sql);
header("Location: Admin_Nosotros.php");
?>
