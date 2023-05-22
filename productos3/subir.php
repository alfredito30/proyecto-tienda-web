<?php
   include_once("../dbConfig.php");
$link=Conectarse();
$nom=$_REQUEST["txtnom"];
$des=$_REQUEST["des"];
$precio=$_REQUEST["prec"];
$stock=$_REQUEST["stock"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="../proyectoF/productos3/fotos1/".$foto;
copy($ruta,$destino);





mysqli_query($link, "insert into products (name, description, price,foto, created, modified, stock) values('$nom','$des','$precio','$destino',now(),now(), '$stock')");
header("Location: captura.php");
mysqli_free_result($sql);
mysqli_close($link);
?>
