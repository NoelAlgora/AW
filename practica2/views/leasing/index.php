<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Coches de renting
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="css/alquiler.css" />
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="css/filter.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script>
	  $( function() {
	    $( "#datepickerAlquiler" ).datepicker();
	     $( "#datepickerDevolucion" ).datepicker();
	  } );
  	</script>

</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div>
		¡Alquila rápido!
		<p>Fecha de Alquiler: <input type="text" id="datepickerAlquiler"></p>
		<p>Fecha de devolución: <input type="text" id="datepickerDevolucion"></p>
		<button type="button" onclick="">Buscar</button>
	</div>
	<div id="container">
		<!-- <div id="contenido"> -->
		<?php require('views/layout/sidebar-filter.php'); ?>
		<div class="container_cards">
			<div class="cards">
				<?php foreach ($datos['result'] as $value): ?>
				<div class="card">
					<a href=<?php echo $helper->url('leasing','fichavehiculo', $value['id'])?> >
					<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">

				<span class="card-title">
					<h3><?php echo $value['marca'] ." ". $value['modelo']; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/engine.png" alt="engine">
					<p><?php echo $value['motor']; ?></p>
					<img class="symbol_list_car" src="img/fuel.png" alt="fuel">
					<p><?php echo $value['combustible']; ?></p>
				</div>
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/gear.png" alt="cambio">
					<p><?php echo $value['cambio']; ?></p>
					<img class="symbol_list_car" src="img/passenger.png" alt="cambio">
					<p><?php echo $value['plazas']; ?></p>
				</div>
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/price.png" alt="price">
					<p><?php echo $value['base_price_day']; ?> €/día </p>
				</div>
					<a href=<?php echo $helper->url('leasing','fichavehiculo', $value['id'])?> ><input class="ctaFlat" type="button" value="Reservar"></a>
			</span>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- </div> -->
		
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
