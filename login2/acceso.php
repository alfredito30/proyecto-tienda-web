<?php
ob_start();
session_start();
include '../dbConfig.php';
  $link=Conectarse();

?>

<?php

if (!isset($_POST['correo']))
{
  header("Location:login.php");
  exit;
}
$_SESSION['usuario']=0;
$_SESSION['foto']=0;
$correo = $_POST['correo'];
$clave = $_POST['clave'];

/*echo $nombre." ".$clave;*/

;

   $q = "select id_c, nombre, imagen from clientes where password  = SHA1('$clave')";
      $q = $q."  and id_c='$correo'";
        $result=mysqli_query($link, $q);
          $numResults = mysqli_num_rows($result);

if ($numResults>0)
{
	$modulo="acceso";
	$row = mysqli_fetch_row($result);
	  $_SESSION['acceso']=1;
    $_SESSION['usuario']=$row[1];
    $_SESSION['N_user']=$row[0];
    $_SESSION['foto']=$row[2];
    /*
echo "<br> Variable Acceso=".$_SESSION['acceso'];
echo "<br>Usuario Actual:".$_SESSION['usuario'];
echo "<br>Número de usuario:".$_SESSION['N_user'];
echo "<div class='container' align='center'>";
echo "<a href=informe.php>Lista de Clientes</a><br>";
*/
echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=../inicio.php'>";

  //  echo "Login con Exito";
}
else
if ($numResults==0)
 {
     Echo "<br> Usuario o contraseña incorrectos<br>";

    echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=../login2/login.php'>";
}


//echo "<a href=privada.php>Salir</a><br>";

echo "</div>";
?>
<?php
ob_flush();
?>
</body>
