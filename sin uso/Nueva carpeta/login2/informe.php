<?php
session_start();
if ($_SESSION['acceso']!="1")
{
header("Location:login.php");
exit;
}
echo " Bienvenido a la Sesion ".$_SESSION['username']." ";
echo "<a href=salir.php>Salir del sistema</a>";
$modulo="inf";


include '../dbConfig.php';
  $link=Conectarse();



?>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo de PHP</title>
  <link href="style.css" rel="stylesheet">
 <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script src="/bootstrap/jquery-1.7.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>


<?php
echo "su usuario es   ".$_SESSION['usuario'];
echo "su numero de usuario es   ".$_SESSION['N_user'];
?>
</body>

</html>
