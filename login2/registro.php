<?php

include_once("../dbConfig.php");
$link=Conectarse();
  session_start();

   $result3=mysqli_query($link,"select id_dis, descripcion from distritos ");

?>
<title>Registro</title>
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

<div class="wrapper">
  <div class="title-text">

    <div class="title signup">
      Formulario de Registro
    </div>
  </div>


  <div class="form-container">



    <div class="form-inner">
      <form class="login" action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="field">
          <input type="email" required class="input-block-level" placeholder="Email"  required name="email" id="email">
        </div>

        <div class="field">
          <input type="text" class="input-block-level" placeholder="Nombre"  required name="nombre" id="nombre">
        </div>


        <div class="field">
          <input type="text" class="input-block-level" placeholder="Apellido"  required name="apellido" id="apellido">
        </div>

        <div class="field">
          <input type="text" class="input-block-level" placeholder="Cédula"  required name="cedula" id="cedula">
        </div>

        <div class="field">
            <select name="sexo" id="sexo" style='width:100%;  height:50px' >
              <option value="none" selected disabled hidden>Sexo</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>

            </select>
        </div>


        <div class="field">
          <input type="tel"  pattern="[0-9]{4}-[0-9]{4}" placeholder="Celular" required name="tele" id="tele">
          <small>Formato: 1234-5678</small>
        </div>




          <div class="field">
        <label>Distritos</label>
  			<select id="listad" name="listad" style='width:100%;  height:50px'>

  				<?php

              while($row = mysqli_fetch_row($result3)) {

               echo "  <option value=$row[0]>$row[1]</option>";
              }
                ?>
  			</select>
  </div>

<div class="field">

          <div id="select2lista"></div>
            </div>
          <?php

      /*    echo "el corregimiento es  ".$_SESSION['correg'];*/
    ?>

<br>
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#listad').val(1);
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
    			url:"eva_de_dis_correg.php",
    			data:"distrito=" + $('#listad').val(),
    			success:function(r){
    				$('#select2lista').html(r);
    			}
    		});
    	}
    </script>




<br>

<br>

        <div class="field">
          <input type="text" class="input-block-level" placeholder="Calle"  required name="dic" id="dic">
        </div>


        <div class="field">
          <input type="password" placeholder="Contraseña" required name="clave" id="clave">
        </div>


    <br>
    <label>Foto</label>

  <input type="file" placeholder="Foto" name="foto" id="foto" >


        <div class="pass-link">
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Registrarse">
        </div>

        <div class="signup-link">
          <a href="../login2/login.php">Regresar</a>
        </div>
      </form>





      <form class="form-signin" action="acceso.php" method="POST">

        <div class="field">



          <input type="text" placeholder="Email Address" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Password" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Confirm password" required>
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Signup">

        </div>
      </form>
    </div>
  </div>
</div>
