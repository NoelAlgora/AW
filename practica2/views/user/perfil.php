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
	<?php

	// var_dump($datos['user']);
	// informacion del usuario

	echo "<h4>Informacion del usuario</h4>";
	echo "<table>";
	echo "<tr>";
	echo "<td>" . $datos['user']['username'] . "</td>";
	echo "<td>" . $datos['user']['apellido'] . "</td>";
	echo "<td>" . $datos['user']['email'] . "</td>";
	echo "<td>" . $datos['user']['telefono'] . "</td>";
	echo "<td>" . $datos['user']['descripcion'] . "</td>";
	echo "</tr>";
	echo "</table>";

	//
	// var_dump($datos['leasingCars']);
	// Coches alquilado

	echo "<h4>Coches alquilados normal</h4>";
	echo "<table>";

	foreach($datos['rentCars'] as $value)
		{
		echo "<tr>";
		echo "<td><a href=" . $helper->url('alquiler', 'fichavehiculo') . "&id=" . urlencode($value['id']) . "> Ver vehiculo</a></td>";
		echo "<td>" . $value['fecha_inicio'] . "</td>";
		echo "<td>" . $value['fecha_fin'] . "</td>";
		echo "</tr>";
		}

	echo "</table>";

	// Coches leasing

	echo "<h4>Coches de leasing (renting)</h4>";
	echo "<table>";

	foreach($datos['leasingCars'] as $value)
		{
		echo "<tr>";
		echo "<td><a href=" . $helper->url('leasing', 'fichavehiculo') . "&id=" . urlencode($value['id']) . "> Ver vehiculo</a></td>";
		echo "<td>" . $value['fecha_inicio'] . "</td>";
		echo "<td>" . $value['fecha_fin'] . "</td>";
		echo "</tr>";
		}

	echo "</table>";

	// coches en propiedad cedidos
	echo "<h2>Coches en propiedad</h2>";
	echo "<h4>Coches en propiedad destinados a alquiler</h4>";
	echo "<table>";

	foreach($datos['ownedCarsToAlquiler'] as $value)
		{
		echo "<tr>";
		echo "<td>" . $value['marca'] . "</td>";
		echo "<td>" . $value['modelo'] . "</td>";
		echo "<td>" . $value['motor'] . "</td>";
		echo "<td>" . $value['combustible'] . "</td>";
		echo "<td><a href=" . $helper->url('alquiler', 'fichavehiculo') . "&id=" . urlencode($value['id']) . "> Ver vehiculo</a></td>";
		echo "</tr>";
		}

	echo "</table>";
	echo "<h4>Coches en propiedad destinados a leasing</h4>";
	echo "<table>";

	foreach($datos['ownedCarsToLeasing'] as $value)
		{
		echo "<tr>";
		echo "<td>" . $value['marca'] . "</td>";
		echo "<td>" . $value['modelo'] . "</td>";
		echo "<td>" . $value['motor'] . "</td>";
		echo "<td>" . $value['combustible'] . "</td>";
		echo "<td><a href=" . $helper->url('leasing', 'fichavehiculo') . "&id=" . urlencode($value['id']) . "> Ver vehiculo</a></td>";
		echo "</tr>";
		}

	echo "</table>";
	?>
		</div>
	  <?php require('views/layout/footer.php'); ?>
</body>

</html>
