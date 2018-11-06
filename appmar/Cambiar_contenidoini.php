<?php
require_once 'conectar.php';
$db = new Conexion();
$texto=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="Recursos/Imagen/".$foto;
copy($ruta,$destino);
echo $texto."    ".$destino;
if ($texto=="" && $destino != "Recursos/Imagen/" ){
	$sql= ("UPDATE `inicio_cont` SET `Imagen_dir`='$destino' WHERE id =1;");
}else{
	if ($texto!="" && $destino != "Recursos/Imagen/" ){
		$sql= ($sql= ("UPDATE `inicio_cont` SET `Imagen_dir`='$destino',`Text`='$texto' WHERE id =1;"));
	}else{
		if ($texto!="" && $destino == "Recursos/Imagen/" ){
		$sql= ($sql= ("UPDATE `inicio_cont` SET `Text`='$texto' WHERE id =1;"));
	}else{
		echo "No cambios";
	}
	}
}
$db->query($sql);
header("Location: Admin_Inicio.php");
?>
