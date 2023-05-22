<?php
session_start();
$_SESSION['acceso']=0;
header("Location:../login2/login.php");
?>