<?php
require_once 'conectar.php';
$db = new Conexion();
$texto=$_REQUEST["txtnom"];
	$sql= ("UPDATE `footer_cont` SET `Texto`='$texto' WHERE id =1;");


$db->query($sql);
header("Location: Admin_footer.php");
?>