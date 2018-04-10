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

  ?>
    <?php require('views/layout/header.php'); ?>
    <?php require('views/layout/nav.php'); ?>
    <div id="container">
      <div id="contenido">
        <h4>Log out</h4>
        <p>Hasta pronto!</p>
      </div>

      <?php require('views/layout/sidebar-right.php'); ?>
    </div>
    <?php require('views/layout/footer.php'); ?>
</body>
</html>
