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
    <body >
    <script src="javascript/OnInput.js" type="text/javascript"></script>
    <center><strong><h1>Administracion de contenido Pag Nosotos</h1></strong></center>
  
        <form action="Cambiar_Nosotos.php" method="POST" enctype="multipart/form-data">
            <center><table border="1">
            <tr >        
                <td><strong>Nuevo Texto:</strong></td><td> <input type="text" name="txtnom" value=""required
                    id="Escrito" oninput="OnInput()"></td>
            </tr>
            <tr >
            <td ><strong>Nueva Imagen:</strong></td>  <td><input type="file" name="foto" id="foto"required></td>
            </tr>
            <tr>
            <td colspan="2" align="center" ><input type="submit" name="enviar" value="Cambiar"></td>
            </tr>
            </center></table>
        </form>    
        <p id="Posible"></p>
        <br><br>
    </body>
</html>