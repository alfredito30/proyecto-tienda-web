<?php
  session_start();

  $cadena="0";
$talla=$_POST['talla'];
if($talla=='1'){
 $cadena="S";
}
else
 if($talla=='2'){
$cadena="M";
}


 if($talla=='3'){
  $cadena="L";
}

 if($talla=='0'){
  $cadena="MS";
}

$_SESSION['datos']=$cadena;

	echo  $cadena."</select>";
?>
