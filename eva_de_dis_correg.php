
<?php
 include_once("dbConfig.php");
 $link=Conectarse();


   session_start();

?>
<?php

$_SESSION['correg']=0;

$continente=$_POST['distrito'];
   $result2=mysqli_query($link,"SELECT id_corre, descripcion	from corregimientos	where id_corre='$continente'");

$ca="0";


	$sql="SELECT id_corre, descripcion	from corregimientos	where id_corre='$continente'";
	$result=mysqli_query($link, $sql);
	$cadena="<label>SELECT 2 (paises)</label>
			<select id='lista2' name='lista2'>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}
	echo  $cadena."</select>";



  while($row = mysqli_fetch_row($result2)) {
$_SESSION['correg']=$row[1];
}
?>
