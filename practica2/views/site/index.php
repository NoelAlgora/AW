<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Inicio
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/slideshowIndex.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
		<div id="contenido_index">
			<h2>Bienvenido a Caralcarro</h2>
			<div class="text_index">
				
				<p> Somos una empresa dedicada al alquiler y renting de vehículos con más de 20 años de antigüedad, con sede en Madrid, C/Atapuerca. 

				Encuentra tu coche fácilmente entre todos nuestros anuncios de coches publicados por nuestros anunciantes profesionales y particulares. Estamos convencidos de que con nuestras herramientas de búsqueda encontrarás tu coche ideal de forma sencilla y rápida.</p>
			</div>
			<div class="buscador_fechas_index">
				<h3>¡ALQUILER RÁPIDO!</h3>
				<p> Fecha de Inicio:<input class="input_fechas_index" type="text" id="datepickerAlquiler" placeholder="Fecha de recogida">
				</p>
				<p>Fecha de Devolución:<input class="input_fechas_index" type="text" id="datepickerDevolucion" placeholder="Fecha de devolución"></p>
				<button class="boton_inicio_buscador"  type="button">Buscar</button>
			</div>				
			
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
			<br>

			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
			
			<div class="text_index">

				<p> La misión de Caralcarro es poner al alcance de todos un mecanismo de alquiler y renting de vehículos de y segunda mano de particulares y empresas en un par de clicks. Puedes consultar tu coche deseado en pocos segundos y desde cualquier lugar. Nuestro objetivo es ofrecer el buscador de coches de alquiler y renting más completo   </p>

			</div>
		</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
	<script src="js/slideCarIndex.js"></script>
</body>

</html>