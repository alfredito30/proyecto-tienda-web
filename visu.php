<?php
// include database configuration file
include 'dbConfig.php';
include 'navbar.php';
  $link=Conectarse();

  session_start();
$idbuscar=$_REQUEST['idb'];
$resultE=mysqli_query($link,"select id_cate, descripcion, name from categorias where id_cate='$_SESSION[p]'");

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>ModaShop - Ver Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
    .container{padding: 50px; height: 150px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 25px; }
    </style>
    <link rel="stylesheet" type="text/css" href="styletablas2.css" />
    <link rel="stylesheet" href="../styletablas2.css"/>
</head>

<body>


    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>

        <?php
        $query = $link->query("SELECT * FROM products where id=$idbuscar ");
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
        ?>

                              <?php $idp=$row["id"];
                              ?>

                            <center><section>

                              <div class="header">
                                <?php
                                if ( isset($_SESSION['p']) ) {
                                while($row2 = mysqli_fetch_row($resultE)) {
                                echo "<h1 style='color:white'>".$row2[2]."</h1>";
                                }
                                mysqli_free_result($resultE);
                                }
                                  /*  <h1  style="color:white">Productos</h1>*/
                                ?>
                           </div>


                                    <center><div class="user">
                            <img src=<?php echo $row["foto"];?>><td>
                              <div class="texto">
                               <br>   <br> <br><h4><?php echo $row["name"]; ?></h4>
                              <p><h5><?php echo $row["description"]; ?></p></h5>
                                      <p><b><?php echo 'B/.'.$row["price"]; ?></p></b>


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

                                          echo "   <center><br> <br><a class='btn btn-success'  disabled=»disabled»>Agregar al carrito</a>  </center> ";

                                  }
                                  else
                                  if ( isset($_SESSION['acceso']) )
                                  {?>

                                    <center>    <br><a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>&idm=lista">Agregar al carrito</a>  </center>

                                  </form>
                                    <?php
                                  }
                                    ?>



        <?php

      } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>


     </div>
</div>  </center>


    </section>
</center>

</body>
</html>
