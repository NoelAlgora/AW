<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Coches del alquiler
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require('views/layout/header.php'); ?>
  <?php include('views/layout/nav.php'); ?>
  <div id="container">
    <div id="contenido">
		<table>
		<?php
			foreach ($result as $value) {
				echo "<tr>";
				echo "<td>".$value['marca']."</td>";
				echo "<td>".$value['modelo']."</td>";
				echo "<td>".$value['motor']."</td>";
				echo "<td>".$value['combustible']."</td>";
				echo "</tr>";
			}
		 ?>
	 	</table>
    </div>
    <?php include('views/layout/sidebar-right.php'); ?>
  </div>
  <?php require('views/layout/footer.php'); ?>
</body>
</html>
