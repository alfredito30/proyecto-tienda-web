




<?php

include_once("../dbConfig.php");
$link=Conectarse();
  session_start();

   $result3=mysqli_query($link,"select id_dis, descripcion from distritos ");
  $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido, c.sexo, c.direccion, d.descripcion, co.descripcion, c.email, c.password from clientes c
inner join distritos d
on (c.id_dis=d.id_dis)
inner join corregimientos co
on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");
?>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>

    <script type="text/javascript" src="ingresar.js"></script>
  </head>

<div class="ver">



<?php

$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$calle = $_POST['calle'];

$d = $_POST['listad'];
$c = $_POST['lista2'];
$s = $_POST['sexo'];
$ce = $_POST['ced'];
$te = $_POST['tel'];
$fo=$_FILES["foto"]["name"];

if (empty($fo)){
    $destino2=$_SESSION['foto'];

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


$q = "update clientes set nombre='$nombre',apellido='$ape', cedula='$ce' ,telefono='$te' ,direccion='$calle', sexo ='$s', id_dis = '$d', id_corre='$c', imagen='$destino2' ";
$q = $q." where  id_c='$_SESSION[N_user]'";
$_SESSION['foto']=$destino2;
 $link=Conectarse();
$result=mysqli_query($link,$q);
 echo "Se cambió el registro";
echo "<META HTTP-EQUIV='refresh' CONTENT='1; URL=ver.php'>";


?>
</body>
