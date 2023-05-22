<?php
 include_once("../dbConfig.php");
 $link=Conectarse();
  ?>

<?php




   $link=Conectarse();


$sql="INSERT INTO talla_productos (id, id_talla)
VALUES ('$_POST[id1]','$_POST[id2]')";
//echo $sql;
$query = mysqli_query($link, $sql) or die (mysqli_error($link));
echo "El registro se agrego con exito";

mysqli_close($link);
echo "   <a href=captura.php>Regresar ... </a> ";
?>
