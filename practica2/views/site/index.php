<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Inicio
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" 
	
	/>
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



	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido_index">
			<h2>Bienvenido a Caralcarro</h2>
			<div class="text_index">
				
				<p align="center"> Somos una empresa dedicada al alquiler y renting de vehículos con más de 20 años de antigüedad, con sede en Madrid, C/Atapuerca. 

				Encuentra tu coche fácilmente entre todos nuestros anuncios de coches publicados por nuestros anunciantes profesionales y particulares. Estamos convencidos de que con nuestras herramientas de búsqueda encontrarás tu coche ideal de forma sencilla y rápida.</p>
¡Alquila rápido!
<p>Fecha de Alquiler: <input type="text" id="datepickerAlquiler"></p>
<p>Fecha de devolución: <input type="text" id="datepickerDevolucion"></p>
<button type="button" onclick="">Buscar</button>



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

				<!-- FORMULARIO NUEVO -->
	


          <!-- FIN del nuevo buscador-->
			</div>
			<br>

			<div style="text-align:center">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		<!-- </div> -->

		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) {
					slideIndex = 1
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				setTimeout(showSlides, 5000); // Change image every 2 seconds
			}
		</script>
		<div class="text_index">
			<p align="center"> La misión de Caralcarro es poner al alcance de todos un mecanismo de alquiler y renting de vehículos de y segunda mano de particulares y empresas en un par de clicks. Puedes consultar tu coche deseado en pocos segundos y desde cualquier lugar. Nuestro objetivo es ofrecer el buscador de coches de alquiler y renting más completo   </p>

		</div>

	</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>