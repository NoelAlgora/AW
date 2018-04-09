<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    <?php echo $pageTitle; ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php $pageTitle = "Inicio"; ?>
  <?php require('layout/header.php'); ?>
  <?php include('layout/nav.php'); ?>
  <div id="container">
    <div id="contenido">
      <h4>Pagina principal despues de login</h4>
      <p>Aqui aparece todo lo que pongamos</p>
      <p> Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. </p>
    </div>
    <?php include('layout/sidebar-right.php'); ?>
  </div>
  <?php require('layout/footer.php'); ?>
</body>
</html>
