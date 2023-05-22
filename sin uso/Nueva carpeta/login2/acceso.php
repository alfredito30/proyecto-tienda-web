<?php
ob_start();
session_start();
include '../dbConfig.php';
  $link=Conectarse();
?>

<?php

if (!isset($_POST['nombre']))
{
  header("Location:login.php");
  exit;
}

$nombre = $_POST['nombre'];
 $clave = $_POST['clave'];

/*echo $nombre." ".$clave;*/

;

   $q = "select id_c ,username from clientes where password = concat('$nombre','$clave')";
      $q = $q."  and 	username='$nombre'";
        $result=mysqli_query($link, $q);
          $numResults = mysqli_num_rows($result);
                      echo "<br>valor:".$numResults;
if ($numResults>0)
{
	$modulo="acceso";
	$row = mysqli_fetch_row($result);
	$_SESSION['acceso']=1;
    $_SESSION['usuario']=$row[1];
    $_SESSION['N_user']=$row[0];
echo "<br> Variable Acceso=".$_SESSION['acceso'];
echo "<br>Usuario Actual:".$_SESSION['usuario'];
echo "<br>Número de usuario:".$_SESSION['N_user'];
echo "<div class='container' align='center'>";
echo "<a href=informe.php>Lista de Clientes</a><br>";
echo "<META HTTP-EQUIV='refresh' CONTENT='3; URL=../index2.php'>";

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
