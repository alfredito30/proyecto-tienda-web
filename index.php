<?php
// include database configuration file
include 'dbConfig.php';
include 'navbar.php';
  $link=Conectarse();

  session_start();
$idbuscar=$_REQUEST['idb'];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>ModaShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
    .container{padding: 50px; height: 150px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 30px;}
    </style>
</head>
</head>
<body>
<div class="container">
  <div class="item">
    <h1>Productos</h1>
    <link rel="stylesheet" type="text/css" href="styletablas2.css" />
    <link rel="stylesheet" href="../styletablas2.css"/>

    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>

        <?php
        //get rows query


        $query = $link->query("SELECT * FROM products where id=$idbuscar ");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
                        <div class='col-xs-20 col-sm-3 pr-1 col-md-3 '>
                              <?php $idp=$row["id"];
                              ?>

                            <img src=<?php /*echo $row["foto"];*/?>><td>




                                <div class="item2" style:" font-size: 80px;">

                              <h4><?php echo $row["name"]; ?></h4>
                              <p><h5><?php echo $row["description"]; ?></p></h5>

                                  <div class="col-md-6">
                                      <p class="lead" style:" font-size: 80px;"><b><?php echo 'B/.'.$row["price"]; ?></p></b>
                                  </div>



                                  <?php
                                  $result2=mysqli_query($link,"SELECT tp.id_tp, p.id, t.descripcion, t.id_talla FROM products p
                                  	inner join talla_productos tp on (p.id=tp.id)
                                  	inner join tallas t on (t.id_talla=tp.id_talla) where p.id=$idp order by t.descripcion desc");
                                  ?>

                                  <form method="get" action="cartAction.php" name="myform" id="myform">
                                  <h5>Tallas</h5>

                                  <td> <select id="lista" name="lista">
                                            <?php
                                            while($row2 = mysqli_fetch_row($result2)) {
                                            echo "<option value=$row2[3]>$row2[2]</option>";



                                            echo   "<div id='select2lista'></div></td>";
                                               ?>

                                              <script type="text/javascript">
                                               $(document).ready(function(){
                                                 $('#lista').val(1);
                                                 recargarLista();

                                                 $('#lista').change(function(){
                                                   recargarLista();
                                                 });
                                               })
                                               </script>
                                               <script type="text/javascript">
                                               function recargarLista(){
                                                 $.ajax({
                                                   type:"POST",
                                                   url:"datos.php",
                                                   data:"talla=" + $('#lista').val(),
                                                   success:function(r){
                                                     $('#select2lista').html(r);
                                                   }
                                                 });
                                               }
                                               </script>




  <?php
                                         }
                                             mysqli_free_result($result2);

                                       ?>
                                         </select>



                                  <?php
                              if (empty($_SESSION['acceso']))
                                  {
                                    echo "<div class='col-md-6'>";
                                          echo "<a class='btn btn-success'  disabled=»disabled»>Add to cart</a>";
                                                echo "</div>";
                                  }
                                  else
                                  if ( isset($_SESSION['acceso']) )
                                  {?>
                                    <div class="col-md-6">
                                  <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>&idm=lista">Add to cart</a>
                                    </div>






    </form>
                                    <?php
                                  }
                                    ?>

                              </div>


                            </div>

        <?php

      } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>

    </div>

</div>

</div>

  </div>




  <section>
    <button>toggle image size</button>
    <div class="user">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/652/ada-small.jpeg">
      <h3>Ada Lovelace</h3>
      <a href="#">Account</a>
      <a href="#">Change Password</a>
      <a href="#">Log Out</a>
    </div>
  </section>



</body>
</html>
