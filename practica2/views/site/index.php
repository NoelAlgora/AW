<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Inicio
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/slideshowIndex.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido_index">
			<h4>Pagina principal blbalbalablb</h4>
			<div class="text_index">
				<p> Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in
					ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum
					ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. </p>

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
			<p> Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in
				ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum
				ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. </p>

		</div>

	</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
