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
				</tbody>
			</table>
			<form method="POST" action="<?= $helper->url('alquiler','alquilar');?>">
				<div>
					<div>
						<label>Fecha de recogida:</label>
					</div>
					<div>
						<input required type="date" name="fecha_recogida" step="1" min="<?php echo date("Y-m-d");?>">
					</div>
				</div>
				<div >
					<div>
						<label>Fecha de devolución:</label>
					</div>
					<div>
						<input required type="date" name="fecha_devolucion" step="1" min="<?php echo date("Y-m-d");?>">
					</div>
				</div>
				<div >
					<input type="hidden" name="vehiculo_id" value="<?= $coche['id'] ?>">
					<button class="btn btn-success" type="submit">Alquilar</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
