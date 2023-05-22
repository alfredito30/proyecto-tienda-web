<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>

    <center><strong><h1>INSERTAR RUTA DE FOTOS A LA BD</h1></strong></center>
    <p>
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <center><table border="1">
            <tr bgcolor="skyblue">
                <td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
            </tr>
            <td><strong>Descripción:</strong></td><td> <input type="text" name="des" value=""></td>
        </tr>

            <tr bgcolor="skyblue">
                <td><strong>Precio:</strong></td><td> <input type="number" step="0.01" name="prec" value=""></td>
            </tr>


            <tr bgcolor="skyblue">
                <td><strong>Stock:</strong></td><td> <input type="number" name="stock" value=""></td>
            </tr>


            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
            </center></table>
        </form>

        <br><br>

    </body>
</html>
