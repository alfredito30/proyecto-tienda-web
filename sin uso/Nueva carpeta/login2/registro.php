<?php


?>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript" src="ingresar.js"></script>
  </head>

<div class="wrapper">
  <div class="title-text">

    <div class="title signup">
      Formulario de Registro
    </div>
  </div>


  <div class="form-container">



    <div class="form-inner">
      <form class="login" action="acceso.php" method="POST">
        <div class="field">

          <input type="text" class="input-block-level" placeholder="Email"  required name="email" id="email">
        </div>
        <div class="field">

          <input type="text" class="input-block-level" placeholder="Nombre Completo"  required name="nombre" id="nombre">
        </div>
        <div class="field">

          <input type="text" class="input-block-level" placeholder="Télefono"  required name="tele" id="tele">
        </div>
        <div class="field">

          <input type="text" class="input-block-level" placeholder="Dirección"  required name="dic" id="dic">
        </div>

        <div class="field">

          <input type="text" class="input-block-level" placeholder="Nombre de usuario"  required name="usern" id="usern">
        </div>



        <div class="field">

          <input type="password" placeholder="Contraseña" required name="clave" id="clave">
        </div>



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
