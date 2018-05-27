<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Inicio
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/slideshowIndex.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="./js/calendar.js"></script>

	<script>
		$( function() {
			$( "#datepickerAlquiler" ).datepicker();
			$( "#datepickerDevolucion" ).datepicker();
		} );
	</script>

</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div class="container-main">
			<div class="index_header">
				<div class="container">
					<h1>BIENVENIDO A <span class="span-caralcarro">CARALCARRO</span></h1>
					<div class="buscador_fechas_index">
						<h2>¡ALQUILER RÁPIDO!</h2>
						<div class="alquilar-wrapper row">
		               		<div class="fecha_recogida col-50">
			                  	<label>Fecha de recogida:</label>
			                  	<div class="datepicker_fecha_recogida"></div>
			                  	
			               	</div>
			               	<div class="fecha_devolucion col-50">
			                  	<label>Fecha de devolución:</label>
			                  	<div class="datepicker_fecha_devolucion"></div>
			               	</div>
			               	<div class="buscador_botones">
			               		<div class="buscador-form-wrapper">
				                  	<form method="POST" action="<?= $helper->url('leasing','filtrar');?>">
				                     	<input class="input-datepicker" type="hidden" id="fecha_recogida" name="fecha_recogida">
				                     	<input class="input-datepicker" type="hidden" id="fecha_devolucion" name="fecha_devolucion">
				                     	<button id="submit-buscar-fecha" class="boton-verde buscar-fecha boton-gigante" type="submit">ALQUILAR</button>
				                  	</form>
				               	</div>
			               	</div>
		               	</div>
					</div>			
				</div>
			</div>
			<div class="container section-padding">
				<div class="button-wrapper col-50">
					<div class="button-item">
						<a href="<?= $helper->url('alquiler','index');?>" class="boton-verde boton-gigante">ALQUILER</a>
					</div>
					<div class="button-item">
						<a href="<?= $helper->url('leasing','index');?>" class="boton-verde boton-gigante">RENTING</a>
					</div>
				</div>
				<div class="text_index col-50">			
					<p> Somos una empresa dedicada al alquiler y renting de vehículos con más de 20 años de antigüedad, con sede en Madrid, c/Atapuerca. 

					Encuentra tu coche fácilmente entre todos nuestros anuncios de coches publicados por nuestros anunciantes profesionales y particulares. Estamos convencidos de que con nuestras herramientas de búsqueda encontrarás tu coche ideal de forma sencilla y rápida.</p>
					<br>
					<br>
					<br>
					<br>
					<br>
				</div>

			</div>
			<div class="container section-padding">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<img class="img-main" src="img/cibeles.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<img class="img-main" src="img/varios.jpg" style="width:100%">
					</div>
					<div class="mySlides fade">
						<img class="img-main" src="img/varios2.jpg" style="width:100%">
					</div>
				</div>

				<div style="display: none;">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>
			

			<div class="container section-padding">
				<div class="text_index">
					<p> La misión de Caralcarro es poner al alcance de todos un mecanismo de alquiler y renting de vehículos de y segunda mano de particulares y empresas en un par de clicks. Puedes consultar tu coche deseado en pocos segundos y desde cualquier lugar. Nuestro objetivo es ofrecer el buscador de coches de alquiler y renting más completo   </p>
				</div>
			</div>
		</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
	<script src="js/slideCarIndex.js"></script>
</body>

</html> 