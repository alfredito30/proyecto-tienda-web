<?php

  include_once("../dbConfig.php");
  $link=Conectarse();
  session_start();
  $idf = $_GET['id'];

  $result=mysqli_query($link,"select o.id_o, o.total_price, p.name, od.cantidad, p.price, od.talla,format((p.price*od.cantidad) , 2), o.created from ordenes o
  inner join orden_detalles od
  on (o.id_o=od.id_o)
  inner join products p
  on (od.id_product=p.id)where o.id_o='$idf'");



  $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido,  c.cedula, c.sexo, c.telefono, c.direccion, d.id_dis, d.descripcion, co.id_corre, co.descripcion, c.password from clientes c
  inner join distritos d
  on (c.id_dis=d.id_dis)
  inner join corregimientos co
  on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");



  $result3=mysqli_query($link,"select o.id_o,  o.created from ordenes o
  inner join orden_detalles od
  on (o.id_o=od.id_o)
  inner join products p
  on (od.id_product=p.id)where o.id_o='$idf'");
?>


<title>Factura</title>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="pop.css"/>
</head>

  <div class="content">

    <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="5">
          <table>
            <tr>
              <td class="title">
                <img src="../images/logo.PNG  " style="width:100%; max-width:300px;">
              </td>


                        <?php

                        $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido,  c.cedula, c.sexo, c.telefono, c.direccion, d.id_dis, d.descripcion, co.id_corre, co.descripcion, c.password from clientes c
                        inner join distritos d
                        on (c.id_dis=d.id_dis)
                        inner join corregimientos co
                        on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");
                         while($row2 = mysqli_fetch_row($result2)) {
                           $correo=$row2[0];
                           $nombre=$row2[1];
                           $apellido=$row2[2];
                           $cedula=$row2[3];
                           $tele=$row2[5];



                      }
                         mysqli_free_result($result2);
                      ?>


                      <?php
                       while($row3 = mysqli_fetch_row($result3)) {

                         $ido=$row3[0];
                         $fecha=$row3[1];

                    }
                       mysqli_free_result($result3);


                    ?>



              <td>
                Factura #:<?php echo $ido;?><br> Fecha: <?php echo $fecha; ?><br>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="information">
        <td colspan="5">
          <table>
            <tr>
              <td>
              ModaShop, Inc.<br> Dávid, Chiriqui <br>  Correo:modashop@hotmail.com  <br>   Tel:778-9654 <br> Cel:6571-3254
              </td>

              <td>
              <?php echo $nombre." ".$apellido;?><br> <?php echo $correo;?><br> <?php echo $tele;?>
              </td>
            </tr>
          </table>
        </td>
      </tr>
<!--
      <tr class="heading">
        <td colspan="4">Metódo de Pago</td>
        <td>Check #</td>
      </tr>

      <tr class="details">
        <td colspan="4">Check</td>
        <td>1000</td>
      </tr> -->

      <tr class="heading">
        <td>Articulo</td>

        <td>Costo Unitario</td>
        <td>Cantidad</td>
        <td>Talla</td>
        <td>Precio</td>

      </tr>




      <?php
       while($row = mysqli_fetch_row($result)) {
         $total=$row[1];
         $ido=$row[0];
         $fecha=$row[6];
         $fila ="<td>$row[2]</td><td>$row[4]</td><td>$row[3]</td><td>$row[5]</td><td>$row[6]</td>" ;  //" <td>$row[4]"

          $fila = $fila."<tr>";
          echo $fila;
          $itb=$total*0.07;
          $tot=$itb+$total;

    }
       mysqli_free_result($result);
       mysqli_close($link);

    ?>






      <tr class="total">
        <td colspan="4"></td>

        <td>SubTotal: <?php echo $total;?>$</td>

      </tr>

      <tr class="total">
        <td colspan="4"></td>
        <td>ITBM: <?php echo number_format($itb, 2, '.', ' ');?>$</td>

      </tr>

      <tr class="total">
        <td colspan="4"></td>
        <td>Total: <?php echo number_format($tot, 2, '.', ' ');?>$</td>

      </tr>

    </table>
  </div>

  </div>
</div>

<div class="invoice-box">
  <td colspan="6"></td>
<a class="btn btn-danger" href=../login2/facturas.php>Volver</a>
</tr>
</div>




            <script type="text/javascript">
function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
            </script>
