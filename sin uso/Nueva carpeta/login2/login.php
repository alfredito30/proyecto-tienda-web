<?php
session_start();

?>
  <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="loginstyle.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript" src="ingresar.js"></script>


  <script type="text/javascript" >

    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
    });
    </script>

  </head>

<div class="wrapper">
  <div class="title-text">
    <div class="title login">
    Inicio de Sesión
    </div>
    <div class="title signup">
      Signup Form
    </div>
  </div>


  <div class="form-container">


    <div class="form-inner">
      <form class="login" action="acceso.php" method="POST">
        <div class="field">

          <input type="text" class="input-block-level" placeholder="Nombre de usuario"  required name="nombre" id="nombre">
        </div>
        <div class="field">

          <input type="password" placeholder="Contraseña" required name="clave" id="clave">
        </div>



        <div class="pass-link">
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Ingresar">
        </div>






        <div class="signup-link">
          ¿No posees un cuenta? <a href="../login2/registro.php">Registrate Ahora</a>
        </div>
      </form>











    </div>
  </div>
</div>
