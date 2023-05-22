






        <head>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="ham.css" />
  </head>




  <div class="container" onclick="myFunction(this)">
   <div class="bar1"></div>
   <div class="bar2"></div>
   <div class="bar3"></div>
  </div>

    <div class="container" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
        <input type="checkbox" class="hidden-toggle">
              ¿

        <div class="container">
          <a href="#"><i class="fa"></i></a>
        </div>

        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Menu 2</a></li>
          <li><a href="#">Menu 3</a></li>
          <li><a href="#">Menu 4</a></li>
          <li><a href="#">Menu 5</a></li>
          <li><a href="#">Menu 6</a></li>
          <li><a href="#">Menu 7</a></li>
        </ul>
      </div>
  </div>




      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <div  class="container" style="display:none;right:0;background:black;color:white;" id="rightMenu" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
   </div>
  <button onclick="closeRightMenu()" class="container">Close &times;</button>

  <a href="#" class="w3-bar-item w3-button">Ingresar</a>
  <a href="#" class="w3-bar-item w3-button">Registrarse</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>



  <button class="container"  onclick="openRightMenu()">&#9776;</button>


  <div class="container" onclick="myFunction(this)">
   <div class="bar1"></div>
   <div class="bar2"></div>
   <div class="bar3"></div>
  </div>





  <script>


  function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
  }

  function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
  }
  </script>

        <div class="container" onclick="myFunction(this)">
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>

       <ul class="menu">
         <li><a href="#">Home</a></li>
         <li><a href="#">Menu 2</a></li>
         <li><a href="#">Menu 3</a></li>
         <li><a href="#">Menu 4</a></li>
         <li><a href="#">Menu 5</a></li>
         <li><a href="#">Menu 6</a></li>
         <li><a href="#">Menu 7</a></li>
       </ul>
     </div>


   <script>
       function myFunction(x) {
  x.classList.toggle("change");
}
   </script>
