<?php

  include_once("dbConfig.php");
  $link=Conectarse();
  session_start();/*
  $idf = $_GET['id'];*/

  $result=mysqli_query($link,"select o.id_o, o.total_price, p.name, od.cantidad, p.price, od.talla created from ordenes o
  inner join orden_detalles od
  on (o.id_o=od.id_o)
  inner join products p
  on (od.id_product=p.id)");
?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="pop.css"/>
</head>






<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">×</div>
    <h1>Title</h1>



    <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="4">
          <table>
            <tr>
              <td class="title">
                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
              </td>

              <td>
                Invoice #: 123<br> Created: January 1, 2015<br> Due: February 1, 2015
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="information">
        <td colspan="4">
          <table>
            <tr>
              <td>
                Sparksuite, Inc.<br> 12345 Sunny Road<br> Sunnyville, CA 12345
              </td>

              <td>
                Acme Corp.<br> John Doe<br> john@example.com
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="heading">
        <td colspan="3">Payment Method</td>
        <td>Check #</td>
      </tr>

      <tr class="details">
        <td colspan="3">Check</td>
        <td>1000</td>
      </tr>

      <tr class="heading">
        <td>Item</td>

        <td>Unit Cost</td>
        <td>Quantity</td>
        <td>Price</td>

      </tr>




          <?php
           while($row = mysqli_fetch_row($result)) {

              $fila ="<td>$row[0]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>" ;  //" <td>$row[4]"

              $fila = $fila."<tr>";
              echo $fila;



        }
           mysqli_free_result($result);
           mysqli_close($link);

        ?>






      <tr class="total">
        <td colspan="3"></td>
        No se
        <td>Total: $</td>
      </tr>
    </table>
  </div>

  </div>
</div>

<button onclick="togglePopup()">Show Popup</button>



            <script type="text/javascript">
function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}
            </script>
