<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <header>
    <?php 
        require_once('Layouts/header_ad.php');
    ?>  
</header>
    <body >
     
    <center><strong><h1>Administracion del Icono y texto header</h1></strong></center>
    <p>
        <form action="Cambiar_Header.php" method="POST" enctype="multipart/form-data">
          <?php
        require_once 'Conectar.php';
        $db = new Conexion();
        $sql= ("select * from header_cont");
        $result = $db->query($sql);
        $row = $result->fetch_row();
        
        ?>
            <center><table border="1">
            <tr >        
                <td><strong>Texto:</strong></td> <td> <?php echo "Texto Actual : ".$row[1]."<br>"; ?> </td>
                <td> <input type="text" name="txtnom" value=""></td>

            </tr>
            <tr >
            <td ><strong>Imagen:</strong></td> <td> <?php echo "Imagen Actual".'<img src="'.$row[0].'" width="100" heigth="100"><br>'; ?> </td>
            <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" ><input type="submit" name="enviar" value="Cambiar"></td>
            </tr>
            </center></table>
        </form>    
        
        <br><br>
        
    </body>
</html>