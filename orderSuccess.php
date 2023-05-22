<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Estado de la Orden</title>
    <meta charset="utf-8">
    <style>
    .container{width: 50%;padding-top: 210px;}
    p{color: #34a853;font-size: 18px;}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <link rel="stylesheet" href="styletablas2.css"/>
</head>
</head>


<body>

<center>
<div class="container">
    <div class="ver">
    <h1>Estado de la Orden</h1>
    <p>Su orden se ha completado exitosamente. Número de Orden #<?php echo $_GET['id']; ?></p>
<a class="btn btn-danger" href=inicio.php>Volver</a>
</div>

</div>
</center>

</body>
</html>
