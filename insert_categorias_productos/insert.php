<?php
include '../dbConfig.php';
  $link=Conectarse();
  ?>

<?php







$sql="INSERT INTO categoria_productos (id, id_cate)
VALUES ('$_POST[id1]','$_POST[id2]')";
//echo $sql;
$query = mysqli_query($link, $sql) or die (mysqli_error($link));
echo "El registro se agrego con exito";

mysqli_close($link);
echo "   <a href=captura.php>Regresar ... </a> ";
?>
