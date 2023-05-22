<?php
session_start();
$_SESSION['acceso']=0;
 session_destroy();
unset($_SESSION['acceso']);
header("Location:../login2/login.php");
?>
