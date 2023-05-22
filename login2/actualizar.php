
<?php

include_once("../dbConfig.php");
$link=Conectarse();
  session_start();

   $result3=mysqli_query($link,"select id_dis, descripcion from distritos ");
  $result2=mysqli_query($link,"select c.id_c, c.nombre, c.apellido, c.sexo, c.direccion, d.descripcion, co.descripcion, c.email, c.password from clientes c
inner join distritos d
on (c.id_dis=d.id_dis)
inner join corregimientos co
on (c.id_corre=co.id_corre) where c.id_c='$_SESSION[N_user]'");
?>
<title>Actualizar Datos de Usuario</title>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>

    <script type="text/javascript" src="ingresar.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

<div class="ver">
<Center><b>Formulario de Edición</b></Center>
<?php
 $link=Conectarse();

  ?>


<?php
    $idc = $_GET['id'];
    $sexo = $_GET['sex'];
    $distrito = $_GET['distr'];
    $correg = $_GET['corre'];



  $result1=mysqli_query($link,"select id_dis, descripcion from distritos ");
  $result2=mysqli_query($link,"select id_corre, descripcion from corregimientos");
  $link=Conectarse();
  $q = "select id_c, nombre, apellido, cedula, telefono, direccion, password from clientes where id_c='$idc'";
  $result=mysqli_query($link,$q);
  $row=mysqli_fetch_row($result);
  //aqui envia los valores a actualizar registro.
echo "<div class='contai'>";
echo "   <head><title>Actualizar Datos</title></head>";
echo "   <body> ";
echo "   <form  action='guardaredit.php?accion=guardar' method='POST' enctype='multipart/form-data'/>";
/*echo "   ID: '$row[0]' <br>";*/
echo "</br><label>Nombre</label><input type='text' value='$row[1]' name='nombre'/><br>";
echo "<br><label>Apellido</label><input type='text' value='$row[2]' name='ape'/><br>";
echo "</br><label>Cédula</label><input type='text' value='$row[3]' name='ced'/><br>";
echo "<br><label>Teléfono</label><input type='text' value='$row[4]' name='tel'/><br>";



echo "</br><label>Email</label><input type='text' disabled  value='$row[0]' /></br>";
/*echo "</br><label>Contraseña</label><input type='text'  value='$row[6]' name='contra'/></br>";*/

echo "</br><label>Calle</label><input type='text'  value='$row[5]' name='calle'/></br>";

echo "<br><label>Distritos</label>";
        echo "<select id='listad' name='listad'  style='width:100%;  height:50px'>"  ;
            while($row = mysqli_fetch_row($result1)) {
              if($distrito==$row[0])
              {
                 echo "  <option value=$row[0] selected>$row[1]</option>";
              }
              else
              {
                echo "  <option value=$row[0]>$row[1]</option>";
             }
            }

        echo "</select>";




        /**/

        ?>

        <div id="select2lista"></div>



    <br><label>Sexo</label>
        <select name="sexo" id="sexo"  style='width:100%;  height:50px' >
          <option value="none" selected disabled hidden>Sexo</option>
          <?php
            if($sexo=='Masculino')
          {
                      echo "  <option value='Masculino' selected >Masculino</option>";
                                      echo "<option value='Femenino' >Femenino</option>";
          }
       else{

                echo "  <option value='Masculino' >Masculino</option>";
                echo "<option value='Femenino' selected >Femenino</option>";
            }
      ?>

        </select>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#listad').val();
      recargarLista();

      $('#listad').change(function(){
        recargarLista();
      });
    })
  </script>
  <script type="text/javascript">
    function recargarLista(){
      $.ajax({
        type:"POST",
        url:"actualizar_correg.php",
        data:"distrito=" + $('#listad').val(),
        success:function(r){
          $('#select2lista').html(r);
        }
      });
    }
  </script>


  <br>  <br>  <br>
  <?php
  echo "<td><center><img src='../$_SESSION[foto]'  style=' vertical-align: middle; height:70px; width:70px;  '></center></td>";
?>
  <br>  <br>
  <label>Foto</label>

  <input type="file" placeholder="Foto" name="foto" id="foto" >




      <?php
      echo "<br>";
        echo "<div class='field btn'>";
  echo "<div class='btn-layer'></div>";
echo "<input type='submit' value='Guardar'>";
echo "</div>";

echo "<br> ";
        echo "<div class='field btn'>";
  echo "<div class='btn-layer'></div>";
echo "<input type='submit'  onclick='history.back()'  value='Volver'>";
echo "</div>";
echo "   </form>";

//echo " </body>";
//echo "  </html>";
echo "</div>";
?>

</div>
</form>
</body>
