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
	<?php require('views/layout/header.php'); ?>
	<?php require('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">

	<h4>Informacion del usuario</h4>
	<table>
	<tr>
	<td><?= $datos['user']['username']?></td>
	<td><?= $datos['user']['apellido']?></td>
	<td><?= $datos['user']['email']?></td>
	<td><?= $datos['user']['telefono']?></td>
	<td><?= $datos['user']['descripcion']?></td>
	</tr>

	</table>

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
    	
    	<?php foreach ($datos['rentCars'] as $key => $car): ?>

        <tr class="<?= ($libro['status'] == 0) ? 'danger' : 'success'?>">
        	<th scope="row"><?= $key ?></th>
            <td><?= $car['marca'] ?></td>
            <td><?= $car['modelo'] ?></td>
            <td><?= $car['matricula'] ?></td>
            <td><?= $car['fecha_inicio'] ?></td>
            <td><?= $car['fecha_fin'] ?></td>
            <td><?= ($car['status'] == 0) ? "RESERVADO" : "DEVUELTO" ?></td>
            <td class="text-center">
            	<?php if($car['status'] == 0): ?>
            	<form method="POST" action="<?= $helper->url('alquiler','devolver');?>">
            		<input type="hidden" name="alquiler_id" value="<?= $car['alquiler_id'] ?>">
            		<button class="btn btn-success" type="submit">Devolver</button>
            	</form>
            	<?php endif; ?>
            	<td><a href="<?= $helper->url('alquiler', 'fichavehiculo', $car['id']) ?>"> Ver vehiculo</a></td>
            </td>
        </tr>

    	<?php endforeach; ?>
    </tbody>
    <!--Table body-->

	</table>

	<h4>Coches alquilados normal</h4>
	<table>

	<?php foreach($datos['rentCars'] as $value): ?>
		
		<tr>
		
		<td><?= $value['fecha_inicio']?></td>
		<td><?= $value['fecha_fin']?></td>
		</tr>
<?php endforeach; ?>

	</table>

	// Coches leasing

	<h4>Coches de leasing (renting)</h4>
	<table>

	<?php foreach($datos['leasingCars'] as $value): ?>
		<tr>
		<td><a href="<?= $helper->url('leasing', 'fichavehiculo', $value['id']) ?>"> Ver vehiculo</a></td>
		<td><?= $value['fecha_inicio'] ?></td>
		<td><?=$value['fecha_fin'] ?></td>
		</tr>
<?php endforeach; ?>

	</table>

	// coches en propiedad cedidos
	<h2>Coches en propiedad</h2>
	<h4>Coches en propiedad destinados a alquiler</h4>
	<table>

	<?php foreach($datos['ownedCarsToAlquiler'] as $value): ?>
		<tr>";
		<td>" . $value['marca'] . "</td>
		<td>" . $value['modelo'] . "</td>
		<td>" . $value['motor'] . "</td>
		<td>" . $value['combustible'] . "</td>
		<td><a href=" . $helper->url('alquiler', 'fichavehiculo', $value['id']) ?>"> Ver vehiculo</a></td>";
		</tr>
<?php endforeach; ?>

	</table>
	<h4>Coches en propiedad destinados a leasing</h4>
	<table>

	<?php foreach($datos['ownedCarsToLeasing'] as $value): ?>
		<tr>";
		<td>" . $value['marca'] . "</td>
		<td>" . $value['modelo'] . "</td>
		<td>" . $value['motor'] . "</td>
		<td>" . $value['combustible'] . "</td>
		<td><a href=" . $helper->url('leasing', 'fichavehiculo', $value['id']) ?>"> Ver vehiculo</a></td>
		</tr>
<?php endforeach; ?>

		</div>
	  <?php require('views/layout/footer.php'); ?>
</body>

</html>
