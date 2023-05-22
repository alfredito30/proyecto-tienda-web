<?php
// initializ shopping cart class
include 'Cart.php';
include 'dbConfig.php';
  $link=Conectarse();
$cart = new Cart;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito</title>
    <meta charset="utf-8">
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 40px; }
    input[type="number"]{width: 60px;   display: inline-block;  }
    </style>

    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){

                location.reload();

        });
    }
    </script>


    <link rel="stylesheet" href="styletablas2.css"/>
</head>
</head>
<body>

<div class="container">
    <div class="ver">

      <div class="header">
     <h1>Carrito</h1>

    </div>

  <center><table class="styled-table">
    <thead>
        <tr>
            <th>Productos</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Talla</th>
            <th>Subtotal Unitario</th>
            <th>Quitar</th>
        </tr>
    </thead>
    <tbody>


        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>

        <?php
        $idp=$item["id"];
        $result2=mysqli_query($link,"SELECT tp.id_tp, p.id, t.descripcion, t.id_talla FROM products p
          inner join talla_productos tp on (p.id=tp.id)
          inner join tallas t on (t.id_talla=tp.id_talla) where p.id=$idp order by t.descripcion desc");
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo 'B/.'.$item["price"]; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo $item["talla"]; ?></td>
            <td><?php echo 'B/.'.$item["subtotal"]; ?></td>
            <td>
            <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirmar')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>

        <?php } ?>


    </tbody>

  </table></center>

  <?php
  if($cart->total_items() == 0){?>

  <tr><p>Tu carrito está vacio...</p></td>

        <td><a href="inicio.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>

  <?php } ?>
  <tfoot>

      <tr>


          <td colspan="4"></td>
          <?php if($cart->total_items() > 0){ ?>
    <td> <td><td> <td class="text-center "><td><strong style="font-size:20px; ">SubTotal<?php echo 'B/.'.$cart->total(); ?></strong> </td></td>  </br> <br>

  <td><a href="inicio.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>
  <td><a href="checkout.php" class="btn btn-success">Verificar<i class="glyphicon glyphicon-menu-right"></i></a>
           <?php
           $_SESSION['itbm']=$cart->total()*0.07;
           $_SESSION['total']=$_SESSION['itbm']+$cart->total();


           ?>



          <?php } ?>
      </tr>

  </tfoot>

  </div>



</div>
</body>
</html>
