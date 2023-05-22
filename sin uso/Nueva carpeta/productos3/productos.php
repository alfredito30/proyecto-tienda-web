<?php

 include_once("../prueba.php");

 ?>


<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body background="proyectoW/fondo/tur.PNG">
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--
<header class="text-center">
  <div class= "row main container middle-xs center-xs">
    -->
  <meta charset="utf-8"/>
  <div class="box">
  <link rel="stylesheet" type="text/css" href="styletablas.css" />
  <link rel="stylesheet" href="../styletablas.css"/>
<div class="product ">
  <div class="row center-xs">
    <?php
   include_once("../conexion/conexion.php");
    $link=Conectarse();
      $result=  mysqli_query($link, "select descripcion, foto, precio from productos");
    ?>

    <?php
  while($row = mysqli_fetch_row($result)) {

  echo "<div class='col-xs-10 col-sm-6 col-md-4 product'>";
        echo "<div class='center'>";
      echo "<div class='card'>";
       $fila = "<h4>$row[0]</h4>" ;
        echo '<img src="'.$row[1].'" width="40%" heigth="20vw" object-fit="cover" class="center" ><td>';
        $fila =$fila."<h4>$row[2]</h4>" ;

        echo $fila;
            echo "</div>";
              echo "</div>";
              echo "</div>";
    }
              mysqli_free_result($result);
                mysqli_close($link);
    ?>


  </div>
  </div>
</div>



    </header>

</body>
</html>
