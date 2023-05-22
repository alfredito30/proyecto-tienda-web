<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

?>


<html>
<head>
<link rel="stylesheet" href="colornav.css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet"  href="sidebar2.css" />

</head>

<body>
  <div class="nav">
        <span style="font-size:30px;color:white;cursor:pointer" onclick="openNav()">&#9776;Abrir</span>


      <div class="link">
        <li class="nav-item active">
        <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
      </li></div>

    

  <div class="link">
          <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Damas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../proyectoF/index2.php?valor=2"><h6>Tops</h6></a>
          <a class="dropdown-item" href="../proyectoF/index2.php?valor=3"><h6>Pantalones</h6></a>
          <a class="dropdown-item" href="../proyectoF/index2.php?valor=4"><h6>Vestidos</h6></a>

        </div>
        </li>
          </div>

  <div class="link">
    <li class="nav-item active dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Caballeros
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="../proyectoF/index2.php?valor=8"><h6>Camisas</h6></a>
        <a class="dropdown-item" href="../proyectoF/index2.php?valor=9"><h6>Sueteres</h6></a>
        <a class="dropdown-item" href="../proyectoF/index2.php?valor=10"><h6>Chaquetas</h6></a>
        <a class="dropdown-item" href="../proyectoF/index2.php?valor=11"><h6>Pantalones</h6></a>


      </div>
        </div>
          </li>


        <div class="link">
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Niñas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../proyectoF/index2.php?valor=15"><h6>Bebes</h6></a>
              <a class="dropdown-item" href="../proyectoF/index2.php?valor=16"><h6>5-10 años</h6></a>
              <a class="dropdown-item" href="../proyectoF/index2.php?valor=17"><h6>11-14 años</h6></a>

            </div>
              </div>

              <div class="link">
                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Niños
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../proyectoF/index2.php?valor=19"><h6>Bebes</h6></a>
                    <a class="dropdown-item" href="../proyectoF/index2.php?valor=20"><h6>5-10 años</h6></a>
                    <a class="dropdown-item" href="../proyectoF/index2.php?valor=21"><h6>11-14 años</h6></a>

                  </div>
                    </div>



    </li>
    <form action="buscador.php" method="POST" enctype="multipart/form-data" class="form-inline my-2 my-lg-0">
      <input class="active tform-control mr-sm-2" style="border-radius:20px; " type="search" placeholder="Buscar" aria-label="Buscar" name="buscar" value="">
      <button class="button4" class="active btn btn-outline-success my-2 my-sm-0"  type="submit" >Buscar</button>
    </form>
        </ul>












</div>
</nav>




</body>

<div id="mySidenav" class="sidenav" class="toggled">
<img src='images/logo.PNG' style='width:100%; max-width:300px; '>


  <a href="javascript:void(0)" class="btn btn-danger" style="text-align: left;" onclick="closeNav()">Cerrar</a>

  <?php



  if ( isset($_SESSION['acceso']) ) {
  echo "<br><br><center><img src='$_SESSION[foto]'  style=' vertical-align: middle; height:60px;width:60px;  border-radius:10%;  max-width:100%;
    height:auto;'></center>";
  echo "<h3>Bienvenido/a ".$_SESSION['usuario']."</h3>";
  echo "<a href='../proyectoF/login2/ver.php'>Ver Perfil</a>";
  echo "<a href='../proyectoF/login2/cerrar.php'>Salir</a>";
}


else
if (empty($_SESSION['acceso']))
	{
  echo "<a href='../proyectoF/login2/login.php'>Ingresar</a>";
  echo "<a href='../proyectoF/login2/registro.php'>Registarse</a>";
}



        ?>



        <div class="2link">
          <li class="nav-item active dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Colores
            </a>

            <div class="dropdown-menu "  id="color"  aria-labelledby="navbarDropdown">


              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=rojo&valor=<?php echo $_SESSION['p'];?>"><h6>Rojo</h6>
                <img src="colors/rojo.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=azul&valor=<?php echo $_SESSION['p'];?>"><h6>Azul</h6>
                <img src="colors/azul.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=verde&valor=<?php echo $_SESSION['p'];?>"><h6>Verde</h6>
                <img src="colors/verde.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=amarillo&valor=<?php echo $_SESSION['p'];?>"><h6>Amarillo</h6>
                <img src="colors/ama.png" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=naranja&valor=<?php echo $_SESSION['p'];?>"><h6>Naranja</h6>
                <img src="colors/naranja.png" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=rosa&valor=<?php echo $_SESSION['p'];?>"><h6>Rosa</h6>
                <img src="colors/rosa.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px; border-radius:20%;' href="../proyectoF/index2.php?color=Morado&valor=<?php echo $_SESSION['p'];?>"><h6>Morado</h6>
                <img src="colors/morado.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=crema&valor=<?php echo $_SESSION['p'];?>"><h6>Crema</h6>
                <img src="colors/crema.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=marron&valor=<?php echo $_SESSION['p'];?>"><h6>Chocolate</h6>
                <img src="colors/cafe.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%; border-style: solid 2px; border-color:white; ' href="../proyectoF/index2.php?color=negro&valor=<?php echo $_SESSION['p'];?>"><h6>Negro</h6>
                <img src="colors/negro.jpg" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>

              <a class="dropdown-item"  style= 'width:90px;  border-radius:20%;' href="../proyectoF/index2.php?color=blanco&valor=<?php echo $_SESSION['p'];?>"><h6>Blanco</h6>
                <img src="colors/blanco.png" style=' vertical-align:middle; text-align:center; height:20px; width:20px;  border-radius:50%;' alt="">
              </a>
            </div>
              </div>




              <div class="link">
                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rangos de Precio
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../proyectoF/index2.php?p1=5&p2=10.99&valor=<?php echo $_SESSION['p'];?>"><h6>5.00-10.00</h6></a>
                    <a class="dropdown-item" href="../proyectoF/index2.php?p1=11&p2=20.99&valor=<?php echo $_SESSION['p'];?>"><h6>11.00-20.00</h6></a>
                    <a class="dropdown-item" href="../proyectoF/index2.php?p1=21&p2=30.99&valor=<?php echo $_SESSION['p'];?>"><h6>21.00-30.00</h6></a>
                    <a class="dropdown-item" href="../proyectoF/index2.php?p1=31&p2=40.99&valor=<?php echo $_SESSION['p'];?>"><h6>31.00-40.00</h6></a>
                  <a class="dropdown-item" href="../proyectoF/index2.php?p1=41&p2=50.99&valor=<?php echo $_SESSION['p'];?>"><h6>41.00-50.00</h6></a>

                  </div>
                    </div>




</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</html>
