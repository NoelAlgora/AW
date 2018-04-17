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
		<div id="container">
		<form method="post" action="enviar_datos_noticia.php">
			<label>Autor de la noticia<br/><input type="text" name="autor" maxlength="255" /></label><br/><br/>
			<label>Título de la noticia<br/><input type="text" name="titulo" maxlength="255" /></label><br/><br/>
			<label>Noticia<br/><textarea name="cuerpo_noticia"></textarea></label><br/><br/>
			<button type="submit">Publicar noticia</button>
		</form>
		</div>
	</body>
</html>