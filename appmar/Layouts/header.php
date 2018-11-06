<header>
			
			<?php
        	require_once 'conectar.php';
			$hb = new Conexion();
			$sqq= ("select * from header_cont");
        	$resul = $hb->query($sqq);
        	$roww = $resul->fetch_row();
			?>
        <a href="index.php">  <?php echo '<img src="'.$roww[0].'" width="50" heigth="50">'.$roww[1]; ?> </a>
	
</header>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
			<ul  align="center"  class="nav navbar-nav">
				<li >
					<a href="Nosotros.php">Nosotros</a>
				</li>
				<li>
					<a href="Servicios.php">Servicios</a>
				</li>
				<li>
					<a href="Contacto.php">Contacto</a>
				</li>
			</ul>
	</div>
</nav>