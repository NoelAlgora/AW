<!DOCTYPE html>
<html lang="es">
	<head>
		<?php $pageTitle = "publicar_noticia"; ?>
		 <title><?php echo $pageTitle; ?></title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
  		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>

	<body>
		<?php include('views/layout/nav.php'); ?>
		<div id="container">
			<div id="contenido">
			<form method="post" action="<?= $helper->url('noticia','CrearNoticia');?>">
				<!-- Aqui tendria qe sustiuir el action por algo -->
				<label>Autor de la noticia<br/><input type="text" name="autor" maxlength="255" /></label><br/><br/>
				<label>Título de la noticia<br/><input type="text" name="titulo" maxlength="255" /></label><br/><br/>
				<label>Noticia<br/><textarea name="cuerpo_noticia"></textarea></label><br/><br/>
				<!-- <label>Fecha<br/><input type="text" name="fecha" maxlength="255" /></label><br/><br/> -->
				<button type="submit">Publicar noticia</button>
			</form>
		</div>
		<?php include('views/layout/sidebar-right.php'); ?>
	</div>
	<?php require('views/layout/footer.php'); ?>
	</body>
</html>
