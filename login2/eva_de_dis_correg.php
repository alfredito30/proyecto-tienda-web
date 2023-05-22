
<?php
 include_once("../dbConfig.php");
 $link=Conectarse();


   session_start();

?>
<?php



$continente=$_POST['distrito'];



$ca="0";


	$sql="SELECT id_corre, descripcion	from corregimientos	where id_dis='$continente'";
	$result=mysqli_query($link, $sql);
  echo "<br>";
	$cadena="<label>corregimientos</label>

    <div class='field'>
			<select id='lista2' name='lista2' style='width:100%;  height:50px'>";
	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
	}
	echo  $cadena."</select>";




?>
