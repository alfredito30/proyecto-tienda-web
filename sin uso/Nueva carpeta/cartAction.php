<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;
session_start();



// include database configuration file
include 'dbConfig.php'; //si la variable recibida [action] esta declarada y a su vez es diferente de vacio procede a guardar en un array los datos del producto seleccionado
  $link=Conectarse();
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ //action es el id del item que agregamos al carrito en cart.php almacenado en esta variable ademas de "id"
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        $tall = $_POST['lista'];
         $talla2=$_SESSION['atallas'] ;


         $ta=$_REQUEST['idm'];

       if($tall=='1'){
        $tall="S";
       }
       else
        if($tall=='2'){
       $tall="M";
       }


        if($tall=='3'){
         $tall="L";
       }

        if($talla=='0'){
         $tall="0";
       }

        // get product details

            $query2 = $link->query("SELECT p.id, t.descripcion FROM products p
            inner join talla_productos tp on (p.id=tp.id)
            inner join tallas t on (t.id_talla=tp.id_talla) where p.id=".$productID);
            $row2 = $query2->fetch_assoc();


        $query = $link->query("SELECT * FROM products WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array( //declara que $itemdata contendra un array con los siguientes datos
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'talla' => $_SESSION['datos'],
            'image' => $row['fotos'],
            'qty' => 1 //el valor original es 1 pero se puede modificar
        );

        $insertItem = $cart->insert($itemData);//insert  alamacena en insertitem los valores que acabamos de seleccionar en variable de sesion
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);



//ACTUALiZAR
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;


//BORRAR
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");



//COMPRAR
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){


        // insert order details into database
        $insertOrder = $link->query("INSERT INTO ordenes (id_c, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

        if($insertOrder){
            $orderID = $link->insert_id;
            $sql = '';


            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orden_detalles (id_o, id_product, cantidad, talla) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."', '".$item['talla']."');";
            }






            // insert order items into database
            $insertOrderItems = $link->multi_query($sql);

            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
