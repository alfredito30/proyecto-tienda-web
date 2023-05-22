
<?php
// include database configuration file
error_reporting(0);
include 'dbConfig.php';
  $link=Conectarse();
  session_start();
       $buscar=$_GET['valor'];
          $color=$_GET['color'];
            $p1=$_GET['p1'];
              $p2=$_GET['p2'];
          $_SESSION['p']=$buscar;
   /* $buscar=$_GET['valor'];*/
       /*$buscar = $_GET['valor'];*/

$resultE=mysqli_query($link,"select id_cate, descripcion, name from categorias where id_cate='$buscar'");


?>


<!DOCTYPE html>


<html lang="en">


<?php

include 'navbar.php';

?>



<head>
    <title>ModaShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
    .container{padding: 50px; height: 150px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}

    </style>


</head>


<br>
  <br>
<br>
<body>

<li>
<div class="container " >
  <div class="cabecera " >
  <?php
  if ( isset($buscar) ) {
  while($row = mysqli_fetch_row($resultE)) {
  echo "<h1 style='color:white'>".$row[2]."</h1>";
  }
  mysqli_free_result($resultE);
  }
    /*  <h1  style="color:white">Productos</h1>*/
  ?>




    <link rel="stylesheet" type="text/css" href="styletablas2.css" />
    <link rel="stylesheet" href="../styletablas2.css"/>


    <div id="products" class="row">
      <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    </div>
        <?php


        if ( isset($color) ) {


          $query = $link->query("select p.id, p.foto, p.name, p.description, p.price, p.stock from categorias c
          inner join categoria_productos cp
          on (c.id_cate=cp.id_cate)
          inner join products p
          on (p.id=cp.id)
          where cp.id_cate='$buscar' and  p.description like '%$color%' and p.status='1'");
      }

      else{
      if (isset($p1) and isset($p2))
        {

  $query = $link->query("select p.id, p.foto, p.name, p.description, p.price, p.stock from categorias c
        inner join categoria_productos cp
        on (c.id_cate=cp.id_cate)
        inner join products p
        on (p.id=cp.id)
        where cp.id_cate='$buscar' and p.price >= '$p1' and  p.price <= '$p2' and p.status='1'");
      }

      else{
      if (empty($color) and empty($p1) and empty($p2))
      	{

  $query = $link->query("select p.id, p.foto, p.name, p.description, p.price, p.stock from categorias c
        inner join categoria_productos cp
        on (c.id_cate=cp.id_cate)
        inner join products p
        on (p.id=cp.id)
        where cp.id_cate='$buscar' and p.status='1'");
      }
    }
  }



        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>

                        <div class='col-xs-20 col-sm-3 pr-1 col-md-3  product'>
                        <div class='center'>
                        <div class='card-deck'>
                        <div class='card width: 10px height:300px'>
                        <div class='card-body justify-content-center' >
                            <img src=<?php echo $row["foto"];?>><td>
                              <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>

                              <p class="list-group-item-text"><h5><?php echo $row["description"]; ?></p></h5>
                              <div class="row">
                                  <div class="col-md-6">
                                      <p class="lead"><b><h5><?php echo 'B/.'.$row["price"]; ?></p></h5></b>
                                  </div>
                                  <?php
                                  if ($row["stock"]=="0")
                                  {
                                    echo "<div class='col-md-6'>";
                                          echo "<a class='btn btn-danger'  disabled=»disabled»>Agotado</a>";
                                                echo "</div>";
                                  }
                                  else
                                  if ($row["stock"]!="0")
                                  {?>
                                    <div class="col-md-6">
                                  <a class="btn btn-info" href="visu.php?idb=<?php echo $row["id"]; ?>">Ver</a>
                                    </div>
                                  <?php
                                  }
                                    ?>
                              </div>
                            </div>
                              </div>
                                </div>
                                  </div>
        </div>
        <?php

      } }else{ ?>
        <p>Producto(s) no encontrado.....</p>
        <?php } ?>
    </div>
</div>
<br>
  <br>
<br>
</li>


</body>

</html>
