<?php

function Conectarse()
{
$host = "localhost";
/*192.168.1.121*/
$user = "root";
$password = "emery";
$database = "tienda";
$link=mysqli_connect($host,$user,$password,$database);
if (!($link=mysqli_connect($host,$user,$password,$database)))
{
echo "error conectando al servidor de base de datos.";
exit();
}

return $link;
}
?>
