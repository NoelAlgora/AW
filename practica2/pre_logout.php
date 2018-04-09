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
  <?php $pageTitle = "Log Out"; ?>
  <?php
    session_start();
    session_unset();
    session_destroy();
  ?>
    <?php require('layout/header.php'); ?>
    <?php require('layout/nav.php'); ?>
    <div id="container">
      <div id="contenido">
        <h4>Log out</h4>
        <p>Hasta pronto!</p>
      </div>

      <?php require('layout/sidebar-right.php'); ?>
    </div>
    <?php require('layout/footer.php'); ?>
</body>
</html>
