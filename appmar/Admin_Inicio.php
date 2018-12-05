<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/myStyle.css" />
    
</head>
<header>
    <?php 
        require_once('Layouts/header_ad.php');
    ?>
</header>

<body>
    <script src="javascript/OnReset.js" type="text/javascript"></script>
    <script src="javascript/Agrandar.js" type="text/javascript"></script>
    <script src="javascript/Normal.js" type="text/javascript"></script>
    <center><strong>
            <h1>Administracion de contenido Pag Inicio</h1>
        </strong></center>
    <p>
       
        <form onreset="OnReset()" action="Cambiar_contenidoini.php" method="POST" enctype="multipart/form-data">
            <?php
        require_once 'Conectar.php';
        $db = new Conexion();
        $sql= ("select * from inicio_cont");
        $result = $db->query($sql);
        $row = $result->fetch_row();
        
        ?>
            <center>
                <table border="1">
                    <tr>
                        <td><strong>Texto:</strong></td>
                        <td>
                            <?php echo "Texto Actual : ".$row[1]."<br>"; ?>
                        </td>
                        <td>  <input type="text" name="txtnom" value="">  <input type="reset">
                        </td>

                    </tr>
                    <tr>
                        <td><strong>Imagen:</strong></td>
                        <td>
                            <?php echo "Imagen Actual".'<img  onmouseenter="Agrandar(this)" onmouseleave="Normal(this)" src="'.$row[0].'" width="100" heigth="100"><br>'; ?>
                        </td>
                        <td><input type="file" name="foto" id="foto"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="enviar" value="Cambiar"></td>
                    </tr>
            </center>
            </table>
        </form>
       
        <br><br>
</body>

</html>
