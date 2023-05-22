<?php

  include_once("../dbConfig.php");
  $link=Conectarse();
  session_start();
  $idf = $_GET['id'];

  $result=mysqli_query($link,"select o.id_o, o.total_price, p.name, od.cantidad, od.talla created from ordenes o
  inner join orden_detalles od
  on (o.id_o=od.id_o)
  inner join products p
  on (od.id_product=p.id)
  where id_o='$idf' and o.id_c='$_SESSION[N_user]'");
?>
<title>Factura</title>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>

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
        <center><b>Facturas</b></center><br>
  <div id="contenedor">

    <center> <table  class="blueTable" >
    <thead>  <center><TR><td><b>Número de Factura</b></td><td><b>Fecha</b></td><td><b>Acción</b></td></TR></center></thead>
    <?php
     while($row = mysqli_fetch_row($result3)) {

        $fila =   "<td>$row[0]</td><td>$row[1]</td>" ;  //" <td>$row[4]"
         $fila = $fila."<td> <a href='verfactura.php?id=$row[0]&'> Ver </a>  </td>";
        $fila = $fila."</tr>";
        echo $fila;



  }
     mysqli_free_result($result3);
     mysqli_close($link);

  ?>
</table>
    <br>

<div class='volver   width: 90%;' >
  <a href=../index2.php>Volver</a>
  </div>

  </center>
  </div>
