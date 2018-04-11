<!DOCTYPE html>
<html lang="es">

<head>
  <title> <?php echo $pageTitle; ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php $pageTitle = "Alquila tu coche!"; ?>
    <?php require('views/layout/header.php'); ?>
    <?php require('views/layout/nav.php'); ?>
    <div id="container">
      <div id="contenido">
      </div>
      <?php require('views/layout/sidebar-right.php'); ?>
	</div>

    <?php require('views/layout/footer.php'); ?>
</body>
</html>