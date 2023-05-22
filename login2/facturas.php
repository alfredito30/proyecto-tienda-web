<?php

include_once("../dbConfig.php");
$link=Conectarse();
  session_start();

   $result3=mysqli_query($link,"select id_o,  created from ordenes where id_c='$_SESSION[N_user]'");
  $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido,  c.cedula, c.sexo, c.telefono, c.direccion, d.id_dis, d.descripcion, co.id_corre, co.descripcion, c.password from clientes c
inner join distritos d
on (c.id_dis=d.id_dis)
inner join corregimientos co
on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");


$q = "select id_o,  created from ordenes where id_c='$_SESSION[N_user]'";
$resultp=mysqli_query($link, $q);
$numResults = mysqli_num_rows($resultp);

?>
<title>Lista de Facturas</title>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>
<link rel="stylesheet" href="pop.css"/>
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
  <div class="header">
 <h1>Facturas</h1>

</div>

  <div id="contenedor">
    <?php
    if ($numResults>0)
  {
    ?>
    <center> <table  class="styled-table"  >
    <thead>  <center><TR><td><b>Número de Factura</b></td><td><b>Fecha</b></td><td><b>Acción</b></td></TR></center></thead>
  <tbody>
    <?php
     while($row = mysqli_fetch_row($result3)) {

        $fila =   "<td>$row[0]</td><td>$row[1]</td>" ;  //" <td>$row[4]"
         $fila = $fila."<td> <a class='btn btn-success' href='verfactura.php?id=$row[0]&'> Ver </a>  </td>";
        $fila = $fila."</tr>";
        echo $fila;



  }
     mysqli_free_result($result3);
     mysqli_close($link);

}

else {

  if ($numResults==0)
   {
Echo "Usted no ha realizado ninguna compra todavia<br>";
   }

}

  ?>
    <tbody>
</table>
    <br>

<a class="btn btn-danger" href=../login2/ver.php>Volver</a>

  </center>
  </div>





      </table>
    </div>

    </div>
  </div>
