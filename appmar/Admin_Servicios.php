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
    <!--
            <tr>
            <td></td>>
            <td colspan="2" align="center" ><input type="submit" name="enviar" value="Cambiar"></td>
            </tr>
//-->
    <script src="javascript/OnWheel.js" type="text/javascript"></script>
    <center><strong>
            <h1>Administracion de contenido Pag ServiciosI</h1>
        </strong></center>
    <p>
        <?php
        require_once 'Conectar.php';
        $db = new Conexion();
        $sql= ("select * from servicios_cont");
        $result = $db->query($sql);
        $row = $result->fetch_row();
        
        ?>
        <form action="Cambiar_contenidoini.php" method="POST" enctype="multipart/form-data">

            <center>
                <table border="1" id="zoom" >
                    <tr>
                        <td class="c1"><strong>Servicio 1 </strong>

                    </tr>
                    <tr>
                        <td class="c1"><strong>Texto:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[1]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom1" value=""></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Imagen:</strong></td>
                        <td>
                            <?php echo "Imagen Actual".'<img src="'.$row[0].'" width="100" heigth="100"><br>'; ?>
                        </td>
                        <td><input type="file" name="foto1" id="foto1"></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Link:</strong></td>
                        <td onwheel="OnWheel()">
                            <?php echo "Texto: ".$row[2]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom1" value=""></td>

                    </tr>

            </center>
            </table>
            <center>
                <table border="1">
                    <tr>
                        <td class="c1"><strong>Servicio 2 </strong>

                    </tr>
                    <tr>
                        <td class="c1"><strong>Texto:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[4]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom2" value=""></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Imagen:</strong></td>
                        <td>
                            <?php echo "Imagen Actual".'<img src="'.$row[3].'" width="100" heigth="100"><br>'; ?>
                        </td>
                        <td><input type="file" name="foto2" id="foto2"></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Link:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[5]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom2" value=""></td>

                    </tr>

            </center>
            </table>

            <center>
                <table border="1">
                    <tr>
                        <td class="c1"><strong>Servicio 3 </strong>

                    </tr>
                    <tr>
                        <td class="c1"><strong>Texto:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[7]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom3" value=""></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Imagen:</strong></td>
                        <td>
                            <?php echo "Imagen Actual".'<img src="'.$row[6].'" width="100" heigth="100"><br>'; ?>
                        </td>
                        <td><input type="file" name="foto3" id="foto3"></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Link:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[9]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom3" value=""></td>

                    </tr>

            </center>
            </table>
            <center>
                <table border="1">
                    <tr>
                        <td class="c1"><strong>Servicio 4 </strong>

                    </tr>
                    <tr>
                        <td class="c1"><strong>Texto:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[10]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom" value=""></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Imagen:</strong></td>
                        <td>
                            <?php echo "Imagen Actual".'<img src="'.$row[9].'" width="100" heigth="100"><br>'; ?>
                        </td>
                        <td><input type="file" name="foto" id="foto"></td>
                    </tr>
                    <tr>
                        <td class="c1"><strong>Link:</strong></td>
                        <td>
                            <?php echo "Texto: ".$row[11]."<br>"; ?>
                        </td>
                        <td> <input type="text" name="txtnom" value=""></td>

                    </tr>

            </center>
            </table>

        </form>

        <br><br>


</body>

</html>
