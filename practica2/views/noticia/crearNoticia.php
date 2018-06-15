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
			<div class ="container_register">
				<p class="font_log"> Publicar noticia </p>
				<form class = "crear_noticia_box" method="post" action="<?= $helper->url('noticia','crearNoticia');?>">
					<div class = "col-50">
						<div class = "row">
							<div>
								<label>Autor de la noticia<label/>
							</div>
							<div>
								<input type="text" name="autor" maxlength="255" required/>
							</div>
						</div>
						<div class = "row">
							<div>
								<label>Título de la noticia<label/>
							</div>
							<div>
								<input type="text" name="titulo" maxlength="255" required/>
							</div>
						</div>
						<div class = "row">
							<div>
								<label>Noticia<label/>
							</div>
							<div>
								<textarea name="cuerpo_noticia" rows="10" cols="40" required></textarea>
							</div>
						</div>
						<div class = "row">
							<button class="boton crear_noticiaB" type="submit">Publicar noticia</button>
						</div>
					</div>
					<div class = "col-40">
						<div class = "row">
							<label>Imagen<label/>
						</div>
						<div class = "row">
							<input type="file" name="list_img" id="list_img" accept=".jpg,.jpeg,.png," required>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php require('views/layout/footer.php'); ?>
	</body>
</html>
