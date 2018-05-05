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
					$db = mysqli_connect('localhost','root','','caralcarro');
					$listaNoticias = mysqli_query($db, "SELECT id_noticia, titulo, cuerpo_noticia FROM noticia");



					echo "<table>";
					while ($noticia = mysqli_fetch_assoc($listaNoticias)){
						$id_n = $noticia['id_noticia'];  // guardamos el id de la noticia
						echo "<tr>";
						echo "<td class = 'listado_noticias'>";
						echo "<br><b>";
						echo "<a href='../noticia/ficha_noticia.php?id_noticia=$id_n'> $noticia[titulo] </a>";
						echo "</b></br>";
						echo $noticia['cuerpo_noticia'];
						echo "</td>";
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
