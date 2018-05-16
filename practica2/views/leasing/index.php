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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php require('views/layout/header.php'); ?>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				<!-- <?php  var_dump($datos['result']); ?>	 -->
				<?php foreach ($datos['result'] as $value): ?>
				<div class="card">
					<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">
				<span class="card-title">
					<h3><?php echo $value['marca'] ." ". $value['modelo']; ?></h3>
				</span>
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
					<img class="symbol_list_car" src="img/price.png" alt="price">
					<p>100€/dia</p>
				</div>
					<a href=<?php echo $helper->url('leasing','fichavehiculo', $value['id'])?> ><input class="ctaFlat" type="button" value="Reservar"></a>
			</span>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- </div> -->
		<!-- <?php require('views/layout/sidebar-right.php'); ?> -->
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
