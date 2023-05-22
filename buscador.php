<?php

include 'dbConfig.php';
  $link=Conectarse();
  session_start();

      $palabra = $_POST['buscar'];
      $result=  mysqli_query($link, "select distinct p.descripcion, p.foto, p.precio from categorias c inner join categoria_productos cp on (c.id_cate=cp.id_cate) inner join productos p on (p.id_product=cp.id_product) where p.descripcion like '%$palabra%'");
    ?>

    <?php
    // include database configuration file



           $result3=  mysqli_query($link, "select p.foto, p.name, p.description, p.price from categorias c
           inner join categoria_productos cp
           on (c.id_cate=cp.id_cate)
           inner join products p
           on (p.id=cp.id)
           where p.name like '%$palabra%'");
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <?php

    include 'navbar.php';

    ?>



    <head>
        <title>PHP Shopping Cart Tutorial</title>
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


        <h1>Productos</h1>
        <link rel="stylesheet" type="text/css" href="styletablas2.css" />
        <link rel="stylesheet" href="../styletablas2.css"/>

        <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
        <div id="products" class="row">
            <?php
            //get rows query


            $query = $link->query("select distinct p.id, p.foto, p.name, p.description, p.price, p.stock from categorias c
            inner join categoria_productos cp
            on (c.id_cate=cp.id_cate)
            inner join products p
            on (p.id=cp.id)
            where p.name like '%$palabra%'");
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
                                              echo "<a class='btn btn-success'  disabled=»disabled»>Add to cart</a>";
                                                    echo "</div>";
                                      }
                                      else
                                      if ($row["stock"]!="0")
                                      {?>
                                        <div class="col-md-6">


                                      <a class="btn btn-info" href="index.php?idb=<?php echo $row["id"]; ?>">Show item</a>





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
            <p>Product(s) not found.....</p>
            <?php } ?>
        </div>
    </div>
    <br>
      <br>
    <br>
    </li>


    </body>
    </html>
