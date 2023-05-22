


<?php
// include database configuration file
include '../dbConfig.php';
  $link=Conectarse();



  if(!isset($_SESSION))
  {
      session_start();
  }

$fo=$_FILES["foto"]["name"];

/*
if (empty($fo)) {
  echo "Variable 'a' is empty.<br>";
}

// True because $a is set
else {
  if (isset($fo)) {
    echo "Variable 'a' is set";
  }
}
*/


if (empty($fo)){
    $destino2='images/avatar.jpg';

}

else {
if (isset($fo)) {

    $foto=$_FILES['foto']['name'];
    $ruta=$_FILES['foto']['tmp_name'];
    /*$destino='../images/'.$foto;*/
    $destino1='../images/'.$foto;
    $destino2='images/'.$foto;
    copy($ruta,$destino1);
}

  }

/*
'$_SESSION[correg]'*/


$sql="INSERT INTO clientes (id_c, nombre, apellido,  cedula, telefono, id_dis, id_corre,  direccion, created, modified, sexo, status, password, imagen)
VALUES ( '$_POST[email]', '$_POST[nombre]','$_POST[apellido]','$_POST[cedula]','$_POST[tele]', '$_POST[listad]' , '$_POST[lista2]', '$_POST[dic]', now(), now(), '$_POST[sexo]', 1 , SHA1('$_POST[clave]'), '$destino2')";
//echo $sql;
                                                                                                                                     /* set password= (concat('helenm','12345'))*/

$query = mysqli_query($link, $sql) or die (mysqli_error($link));
echo "El registro se agrego con exito";

mysqli_close($link);

  echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=../inicio.php'>";
?>
