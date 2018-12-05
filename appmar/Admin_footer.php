<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/myStyle.css" />
     <script type="text/javascript">
        function FilterInput (event) {
            var chCode = ('charCode' in event) ? event.charCode : event.keyCode;

               
            return (chCode < 48 || chCode > 57 );
        }
    </script>

    </head>
    <header>
    <?php 
        require_once('Layouts/header_ad.php');
    ?>  
</header>
    <body >
    <script src="javascript/NoNumeros.js" type="text/javascript"></script>
    <center><strong><h1>Administracion del texto footer</h1></strong></center>
    <p>
        <form action="Cambiar_footer.php" method="POST" enctype="multipart/form-data">
          <?php
        require_once 'Conectar.php';
        $db = new Conexion();
        $sql= ("select * from footer_cont");
        $result = $db->query($sql);
        $row = $result->fetch_row();
        
        ?>
            <center><table border="1">
            <tr >        
                <td><strong>Texto:</strong></td> <td> <?php echo " ".$row[0]."<br>"; ?> </td>
                <td> <input type="text" name="txtnom" onkeypress="return FilterInput (event)" /></td>

            </tr>
            <tr>
            <td colspan="2" align="center" ><input type="submit" name="enviar" value="Cambiar"></td>
            </tr>
            </center></table>
        </form>    
        
        <br><br>
        
    </body>
</html>