<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Coches de alquiler
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
			<p class="noticias"> Ultimas noticias </p>
			<p> ESTA VISTA SUPONGO PODRIA IR EN UN SIDEBAR O ALGO A PARTE </P>
			 <?php
			echo "<table>";

			foreach($datos['noticia'] as $value)
				{
				echo "<tr>";
				echo "<td>" . $value['titulo'] . "</td>";
				echo "<a href='../noticia/ficha_noticia.php?id_noticia=$value[noticia_id]'> $value[titulo] </a>";
				echo "<td>" . $value['autor'] . "</td>";
				echo "</tr>";
				}

			echo "</table>";
			
			 ?>
    </div>
    <?php include('views/layout/sidebar-right.php'); ?>
  </div>
  <?php require('views/layout/footer.php'); ?>
</body>
</html>
