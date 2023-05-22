

<?php
// include database configuration file
include 'dbConfig.php';
error_reporting(0);
  $link=Conectarse();
  if(!isset($_SESSION))
  {
      session_start();
  }
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index2.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID

$query = $link->query("SELECT * FROM clientes WHERE id_c= '$_SESSION[N_user]'");
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detalles de la orden</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
      <link rel="stylesheet" href="styletablas2.css"/>
</head>
<body>
<div class="container">
  <div class="ver">

    <div class="header">
   <h1>Detalles de la Orden</h1>

  </div>
<div style="overflow-x:auto;">

<center><table class="styled-table">

    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Talla</th>
            <th>Subtotal Unitario</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo 'B/.'.$item["price"]; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo $item["talla"]; ?></td>
            <td><?php echo 'B/.'.$item["subtotal"]; ?></td>
        </tr>

        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en el carrito...</p></td>
        <?php } ?>

    </tbody>



    </table>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
    <div class="totales">
            <td class="text-center"><strong style="font-size:20px;">Subtotal <?php echo 'B/.'.$cart->total(); ?><br>
            <tr>  <td class="text-center"><strong style="font-size:20px;">Itbm  <?php echo 'B/.'.number_format($_SESSION['itbm'], 2, '.', ' '); ?></td></td><br>
               <tr><td class="text-center"><strong style="font-size:20px; ">Total  <?php echo 'B/.'.number_format($_SESSION['total'], 2, '.', ' '); ?></strong></td> </td></tr><br>
            <?php } ?>
    </div>


        </tr>


        <div class="shipAddr">
            <h4><strong style="font-size: 20px;">Detalles<strong></h4>
            <p><?php echo $custRow['nombre']." ".$custRow['apellido']; ?></p>
            <p><?php echo $custRow['id_c']; ?></p>
            <p><?php echo $custRow['telefono']; ?></p>
            <p><?php echo $custRow['direccion']; ?></p>
        </div>
        <td><a href="inicio.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>
        <td>  <a href="cartAction.php?action=placeOrder" class="btn btn-success">Proceder con la Orden <i class="glyphicon glyphicon-menu-right"></i></a>



    </tfoot>








    <td colspan="2"></td>

</div>
</center>

</div>


</div>

</body>
</html>
