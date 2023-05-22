

<?php
?>



<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>


<script src="js/bootstrap.min.js"></script>
</head>



<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="styletablas2.css" />
<body class="orange">



<nav class="navbar navbar-expand-lg navbar-dark " role="navigation" style="background-color: #EC407A;" >
  <a class="navbar-brand" href="#">

    ModaShop
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mujer
        </a>


        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../catalogo/ses.php?valor=1"><h6>Tops</h6></a>

          <a class="dropdown-item" href="#"><h6>Pantalones</h6></a>
          <a class="dropdown-item" href="#"><h6>Vestidos</h6></a>
          <a class="dropdown-item" href="#"><h6>Zapatos</h6></a>
   		    <a class="dropdown-item" href="#"><h6>Accerosios</h6></a>
           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><h6>Deportivo</h6></a>
              <a class="dropdown-item" href="#"><h6>Casual</h6></a>
              <a class="dropdown-item" href="#"><h6>Formal</h6></a>
        </div>
        </li>


      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hombre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><h6>Camisas</h6></a>
          <a class="dropdown-item" href="#"><h6>Sueteres</h6></a>
          <a class="dropdown-item" href="#"><h6>Chaquetas</h6></a>
          <a class="dropdown-item" href="../catalogo/ses.php?valor=11"><h6>Pantalones</h6></a>
          <a class="dropdown-item" href="#"><h6>Zapatos</h6></a>
   		  <a class="dropdown-item" href="#"><h6>Accerosios</h6></a>
           <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><h6>Deportivo</h6></a>
              <a class="dropdown-item" href="#"><h6>Casual</h6></a>
              <a class="dropdown-item" href="#"><h6>Formal</h6></a>
        </div>
	<!--</div>-->
      </li>


       <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Niñas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><h6>Bebes</h6></a>
          <a class="dropdown-item" href="#"><h6>5-10 años</h6></a>
          <a class="dropdown-item" href="#"><h6>11-15 años</h6></a>
        </div>
      </li>

      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Niños
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><h6>Bebes</h6></a>
          <a class="dropdown-item" href="#"><h6>5-10 años</h6></a>
          <a class="dropdown-item" href="#"><h6>11-15 años</h6></a>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#"><h6>Ofertas</h6><span class="sr-only">(current)</span></a>
      </li>


    </ul>
    <form action="buscador.php" method="POST" enctype="multipart/form-data" class="form-inline my-2 my-lg-0">
      <input class="active tform-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="buscar" value="">
      <button class="btn btn-info" class="active btn btn-outline-success my-2 my-sm-0"  type="submit" >Buscar</button>
    </form>
  </div>
</nav>
</body>
</html>
