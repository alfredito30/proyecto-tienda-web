<?php
// include database configuration file
include 'dbConfig.php';
  $link=Conectarse();

  session_start();
$idbuscar=$_REQUEST['idb'];

?>



<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
<div class="container">
    <h1>Productos</h1>
    <link rel="stylesheet" type="text/css" href="styletablas2.css" />
    <link rel="stylesheet" href="../styletablas2.css"/>
        <link rel="stylesheet" href="../glowButton.css"/>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query


        $query = $link->query("SELECT * FROM products where id=$idbuscar ");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>
                        <div class='col-xs-20 col-sm-3 pr-1 col-md-3  product'>
                        <div class='center'>
                            <div class='card-deck'>
                            <div class='card width: 10px height:300px'>
                          <div class='card-body justify-content-center' >

                              <?php $idp=$row["id"];
                              ?>
                            <img src=<?php echo $row["foto"];?>><td>
                              <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                              <p class="list-group-item-text"><h5><?php echo $row["description"]; ?></p></h5>

                              <div class="row">
                                  <div class="col-md-6">
                                      <p class="lead"><b><h5><?php echo 'B/.'.$row["price"]; ?></p></h5></b>
                                  </div>



                                  <?php
                                  $result2=mysqli_query($link,"SELECT tp.id_tp, p.id, t.descripcion, t.id_talla FROM products p
                                  	inner join talla_productos tp on (p.id=tp.id)
                                  	inner join tallas t on (t.id_talla=tp.id_talla) where p.id=$idp order by t.descripcion desc");
                                  ?>

                                  <form method="get" action="cartAction.php" name="myform" id="myform">
                                  <h4>Tallas</h4>






                                  <td> <select id="lista" name="lista">
                                            <?php while($row2 = mysqli_fetch_row($result2)) {
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



                                         	<div id="select2lista"></div></td>








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


                                  <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>&idm=lista">Add to cart</a>







                                    </div>
    </form>
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
</body>
</html>
