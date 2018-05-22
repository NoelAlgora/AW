<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		<?php echo $coche['marca'] . " " . $coche['modelo']; ?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ficha_vehiculo.css" />
	<link rel="stylesheet" type="text/css" href="css/slideCarPhotos.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="./js/alquilar.js"></script>
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	
	<div class="info_ficha_vehiculo">
			<table class="tabla_info_ficha_vehiculo">
				<tbody>
					<?php foreach($datos['ownedCarsToLeasing'] as $key => $car): ?>
					<tr>
						<td class="font_log">Marca: </td>
						<td>
							<?php echo $coche['marca']; ?>
						</td>
						<td class="font_log">Modelo:</td>
						<td>
							<?php echo $coche['modelo'];?>
						</td>
					</tr>
					<tr>
						<td class="font_log">Color: </td>
						<td>
							<?php echo $coche['color']; ?>
						</td>
						<td class="font_log">Cambio: </td>
						<td>
							<?php echo $coche['cambio'];?>
						</td>
					</tr>
					<tr>
						<td class="font_log">Motor: </td>
						<td>
							<?php echo $coche['motor']; ?>
						</td>
						<td class="font_log">Combustible: </td>
						<td>
							<?php echo $coche['combustible'];?>
						</td>
					</tr>
					<tr>
						<td class="font_log">Plazas: </td>
						<td>
							<?php echo $coche['plazas']; ?>
						</td>
						<td class="font_log">Precio base por dia: </td>
						<td>
							<?php echo $coche['base_price_day'];?>
						</td>
					</tr>
					<tr>

						<td class="font_log">Descripcion: </td>
						<td>
							<?php echo $coche['descripcion']; ?>
						</td>
						
						<td>
							<a href="<?= $helper->url('leasing', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a>
						</td>
				

					</tr>

					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?php require('views/layout/footer.php'); ?>
</body>
<script src="js/slideCarPhotos.js"></script>
</html>
