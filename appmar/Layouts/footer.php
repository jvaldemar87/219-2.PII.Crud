<div id="footer">
      <div class="container">
      	<?php
        $cb = new Conexion();
			$sq= ("select * from footer_cont");
        	$resuu = $cb->query($sq);
        	$ro = $resuu->fetch_row();
			?>
        <a">  <?php echo $ro[0]; ?> </a>
     </div>
 </div>