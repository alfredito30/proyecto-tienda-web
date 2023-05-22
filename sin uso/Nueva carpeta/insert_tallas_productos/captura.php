<html>
<?php
 include_once("../dbConfig.php");
 $link=Conectarse();
  $result1=mysqli_query($link,"select id, name from products");
  $result2=mysqli_query($link,"select id_talla, descripcion from tallas");
  ?>
<h1><center>Formulario de Tallas y productos </center> </h1>
<center>
<form action="insert.php" method="POST">
    <table >

                <td>productos</td>
                    <td>
            <select name="id1"style='width:175px; height:25px'>
            <?php
            while($row = mysqli_fetch_row($result1)) {
             echo "  <option value=$row[0]>$row[1]</option>";
            }
              ?>
        </select>
      </td>
      </tr>

                          <td>Tallas</td>
                            <td>
                              <select name="id2"style='width:175px; height:25px'>
                                <?php
                                  while($row = mysqli_fetch_row($result2)) {
                                    echo "  <option value=$row[0]>$row[1]</option>";
                                  }
                                  ?>
                                </select>



        <?php


echo"<center><tr><td><input type='submit'  value='Guardar' style='width:80px; height:25px'/></td></tr></center>";

?>

<center><tr><td><input type="button" style='width:80px; height:25px' onclick="history.back()" name="volver atr�s" value="volver atras" ></td></tr></center>
</table>
</form>
</center>
</body>
</html>
