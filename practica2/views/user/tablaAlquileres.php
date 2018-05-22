<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		<?php echo $coche['marca'] . " " . $coche['modelo']; ?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<h2> FICHA TÉCNICA DEL VEHÍCULO </h2>
	<div class="ficha_vehiculo">
		<div class="img_ficha_vehiculo">
			<?php echo $helper->getAlquilerListImage($coche['list_img']); ?>
		</div>
		<div class="info_ficha_vehiculo">
			<table class="tabla_info_ficha_vehiculo">
				<tbody>
					<?php
					// var_dump($datos['rentCars']);
					foreach ($datos['rentCars'] as $key => $car): ?>
					<tr>
						<td class="font_log">Marca: </td>
						<td>
							<?php echo $coche['marca']; ?>
						</td>
						<td class="font_log">Modelo: </td>
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
						<td>
							<?php echo $coche['descripcion']; ?>
						</td>
					</tr>
					<tr>
						<td class="text-center">
								<form method="POST" action="<?= $helper->url('alquiler','devolver');?>">
									<input type="hidden" name="alquiler_id" value="<?= $car['alquilerid'] ?>">
									<button class="btn btn-success" type="submit">Devolver</button>
								</form>
								<td><a href="<?= $helper->url('alquiler', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a></td>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			
		</div>
	</div>
</body>

</html>
