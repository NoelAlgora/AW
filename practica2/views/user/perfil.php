<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Perfil </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<?php require('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">

			<h4>Informacion del usuario</h4>
			<table class="table table-bordered">
				<!--Table head-->
				<thead>
					<tr>
						<th>nombre</th>
						<th>apellidos</th>
						<th>email</th>
						<th>telefono</th>
						<th>descripcion</th>
					</tr>
				</thead>
				<!--Table head-->

				<!--Table body-->
				<tbody>
					<tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
						<td>
							<?= $datos['user']['username']?>
						</td>
						<td>
							<?= $datos['user']['apellido']?>
						</td>
						<td>
							<?= $datos['user']['email']?>
						</td>
						<td>
							<?= $datos['user']['telefono']?>
						</td>
						<td>
							<?= $datos['user']['descripcion']?>
						</td>
					</tr>
				</tbody>
			</table>

			<h4>Coches Alquiler</h4>
			<table class="table table-bordered">
				<!--Table head-->
				<thead>
					<tr>
						<th>#</th>
						<th>marca</th>
						<th>modelo</th>
						<th>matricula</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<!--Table head-->

				<!--Table body-->
				<tbody>
					<?php
					// var_dump($datos['rentCars']);
					foreach ($datos['rentCars'] as $key => $car): ?>
						<tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
							<th scope="row">
								<?= $key ?>
							</th>
							<td>
								<?= $car['marca'] ?>
							</td>
							<td>
								<?= $car['modelo'] ?>
							</td>
							<td>
								<?= $car['matricula'] ?>
							</td>
							<td>
								<?= $car['fecha_inicio'] ?>
							</td>
							<td>
								<?= $car['fecha_fin'] ?>
							</td>
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
				<!--Table body-->


			</table>

			<h4>Coches Leasing</h4>
			<table class="table table-bordered">
				<!--Table head-->
				<thead>
					<tr>
						<th>#</th>
						<th>marca</th>
						<th>modelo</th>
						<th>matricula</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<!--Table head-->

				<!--Table body-->
				<tbody>
					<?php	foreach ($datos['leasingCars'] as $key => $car): ?>
						<tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
							<th scope="row">
								<?= $key ?>
							</th>
							<td>
								<?= $car['marca'] ?>
							</td>
							<td>
								<?= $car['modelo'] ?>
							</td>
							<td>
								<?= $car['matricula'] ?>
							</td>
							<td>
								<?= $car['fecha_inicio'] ?>
							</td>
							<td>
								<?= $car['fecha_fin'] ?>
							</td>
							<td class="text-center">
								<form method="POST" action="<?= $helper->url('leasing','devolver');?>">
									<input type="hidden" name="leasing_id" value="<?= $car['leasingid'] ?>">
									<button class="btn btn-success" type="submit">Devolver</button>
								</form>
								<td><a href="<?= $helper->url('leasing', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a></td>
							</td>
						</tr>
						<?php endforeach; ?>
				</tbody>
				<!--Table body-->
			</table>

			<h4>Coches en propiedad destinados a alquiler</h4>
			<table class="table table-bordered">
				<!--Table head-->
				<thead>
					<tr>
						<th>#</th>
						<th>marca</th>
						<th>modelo</th>
						<th>matricula</th>
						<th>motor</th>
						<th>combustible</th>
						<th>color</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<!--Table head-->
				<tbody>
					<?php foreach($datos['ownedCarsToAlquiler'] as $key => $car): ?>
					<tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
						<th scope="row">
							<?= $key ?>
						</th>
						<td>
							<?= $car['marca'] ?>
						</td>
						<td>
							<?= $car['modelo'] ?>
						</td>
						<td>
							<?= $car['matricula'] ?>
						</td>
						<td>
							<?= $car['motor'] ?>
						</td>
						<td>
							<?= $car['combustible'] ?>
						</td>
						<td>
							<?= $car['color'] ?>
						</td>
						<td><a href="<?= $helper->url('alquiler', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<h4>Coches en propiedad destinados a leasing</h4>
			<table class="table table-bordered">
				<!--Table head-->
				<thead>
					<tr>
						<th>#</th>
						<th>marca</th>
						<th>modelo</th>
						<th>matricula</th>
						<th>motor</th>
						<th>combustible</th>
						<th>color</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<!--Table head-->
				<tbody>
					<?php foreach($datos['ownedCarsToLeasing'] as $key => $car): ?>
					<tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
						<th scope="row">
							<?= $key ?>
						</th>
						<td>
							<?= $car['marca'] ?>
						</td>
						<td>
							<?= $car['modelo'] ?>
						</td>
						<td>
							<?= $car['matricula'] ?>
						</td>
						<td>
							<?= $car['motor'] ?>
						</td>
						<td>
							<?= $car['combustible'] ?>
						</td>
						<td>
							<?= $car['color'] ?>
						</td>
						<td><a href="<?= $helper->url('leasing', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>
</html>
