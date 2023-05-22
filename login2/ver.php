<?php

include_once("../dbConfig.php");
$link=Conectarse();
  session_start();

   $result3=mysqli_query($link,"select id_dis, descripcion from distritos ");
  $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido,  c.cedula, c.sexo, c.telefono, c.direccion, d.id_dis, d.descripcion, co.id_corre, co.descripcion, c.password, c.imagen from clientes c
inner join distritos d
on (c.id_dis=d.id_dis)
inner join corregimientos co
on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");
?>
<title>Mi Perfil</title>
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
  <div class="header">
 <h1>Perfil de Usuario</h1>

</div>

  <div id="contenedor">
  <br><a href=../login2/facturas.php>Ver Facturas...</a>
    <center> <table  class="styled-table" id="fac">
      <thead>
          <tr>
              <th>Correo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cédula</th>
              <th>Sexo</th>
              <th>Celular</th>
              <th>Calle</th>
              <th>Distrito</th>
              <th>Corregimiento</th>
              <th>Contraseña</th>
              <th>Imagen</th>

          </tr>
      </thead>
    <?php
     while($row = mysqli_fetch_row($result2)) {

        $fila = "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[8]</td><td>$row[10]</td><td>*****</td>";
              $fila =   $fila."<td><center><img src='../$_SESSION[foto]'  style=' vertical-align: middle; height:80px; max-width: 100%; width: 80px; '></center></td>";

        $fila = $fila."</tr>";
        echo $fila;
        echo "<tbody>";
        echo "</table><br>";

        echo "<a class='btn btn-info' href='actualizar.php?id=$row[0]&distr=$row[7]&corre=$row[9]&sex=$row[4]'>Editar </a>";

  }
     mysqli_free_result($result2);

     mysqli_close($link);

  ?>


<a class="btn btn-danger" href=../inicio.php>Volver</a>





  </center>
  </div>
