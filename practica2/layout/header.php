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
  <header>
    <h4>Registro & Login</h4>
    <div class="saludo">
      <?php
      if (isset($_SESSION["login"])){
        echo "<p>Usuario: " . $_SESSION["nombre"] ."</p>";
        echo "<p><a href='pre_logout.php'>Log out</a></p>";
      }
      else {
        echo "<p>Usuario desconocido</p>";
        echo "<p><a href='pre_login.php'>Login</a></p>";
      }
    ?>
  </div>
  </header>
  <?php require('nav.php'); ?>
  <div id="container">
    <div id="contenido">
