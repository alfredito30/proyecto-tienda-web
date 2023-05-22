




<head>
    <title>ModaShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styletablas2.css" />
    <link rel="stylesheet" href="inicio.css"/>
    <?php

    include 'navbar.php';

    ?>

</head>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="inicio.css">
  </head>
  <body>

    <div class="img-slider">


      <div class="slide active">
        <a href="../proyectoF/index2.php?valor=8">
                 <img src="slide/male.jpg" alt="">
                  </a>
        <div class="info">
          <h2>Caballeros</h2>

        </div>
      </div>







      <div class="slide">
            <a href="../proyectoF/index2.php?valor=21">
        <img src="slide/boy.jpg" alt="">
          </a>
        <div class="info">
          <h2>Niños</h2>

        </div>
      </div>

      <div class="slide">
            <a href="../proyectoF/index2.php?valor=17">
        <img src="slide/girl.jpg" alt="">
          </a>
        <div class="info">
          <h2>Niñas</h2>

        </div>
      </div>



            <div class="slide">
                  <a href="../proyectoF/index2.php?valor=8">
              <img src="slide/male.jpg" alt="">
                </a>
              <div class="info">
                <h2>Caballeros</h2>

              </div>
            </div>


        <div class="slide">
          <a href="../proyectoF/index2.php?valor=2">
          <img src="slide/female.jpg" alt="">
            </a>
          <div class="info">
            <h2>Damas</h2>

          </div>
        </div>


        <div class="slide">
          <a href="../proyectoF/index2.php?valor=8">
                   <img src="slide/male.jpg" alt="">
                    </a>
          <div class="info">
            <h2>Caballeros</h2>

          </div>
        </div>



      <div class="navigation">
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>

      </div>
    </div>



    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>




  </body>


  <div class="ver">

    <!-- Footer -->
  <footer class="bg-white">
<center><img src='images/logo.PNG' style='width:100%; max-width:300px; border-radius:10px;'></center>
    <div class="container py-5">
      <div class="row py-4">

        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Contactenos</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"> modashop@hotmail.com</li>
            <li class="mb-2">Tel:778-9654</li>
            <li class="mb-2">Cel:6571-3254</li>

          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Quienes somos</h6>
            <p><strong>MISIÓN:</strong> Lograr que nuestra plataforma brinde a nuestros clientes y usuarios un ambiente confiable, con facilidad y rapidez en el momento de efectuar compras.  <p>
            <p><strong>VISIÓN:</strong> Ofrecer a todo el país nuestros servicios de venta de ropa, con la mayor calidad posible y con precios accesibles con la mayor variedad de ropa, de esa manera lograr que nuestros servicios lleguen a todo tipo de público.</p>

        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2021 ModaShop Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>
  <!-- End -->
</div>

</html>
