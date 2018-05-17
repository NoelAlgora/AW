<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Coches de alquiler
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="css/alquiler.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div class="container_cards">
		<div class="cards">
			<?php foreach ($datos['result'] as $value): ?>
			<a class="card" href=<?php echo $helper->url('alquiler','fichavehiculo', $value['id'])?> >
			<span class="card-header" style="<?php echo "background-image: url(" . $helper->getCarListImageCSS($value['list_img']) .");"?>">
				<span class="card-title">
					<h3><?php echo $value['marca'] ." ". $value['modelo']; ?></h3>
				</span>
			</span>
			<span class="card-summary card-meta">
				Motor: <?php echo $value['motor']; ?>
				<br>
				Combustible: <?php echo $value['combustible']; ?>
				<br>
				Precio: <?php echo $value['combustible']; ?>
			</span>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
