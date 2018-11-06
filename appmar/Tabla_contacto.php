 <table>
 <th>Nombre</th>
 <th>Email</th>
 <th>Comentario</th>

<?php 

$conta = Contacto::vacio();

$datos = $conta->select();

while ($row = $datos->fetch_array()) {
	
	echo '<tr>';
	echo '<td>',$row['Nombre'] ,'</td>';
	echo '<td>',$row['email'] ,'</td>';
	echo '<td>',$row['Comentario'] ,'</td>';
	echo '</tr>';
}


 ?>

</table>