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
  <?php require('views/layout/header.php'); ?>
  <?php include('views/layout/nav.php'); ?>
<<<<<<< HEAD
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
=======
  <div id="container">
    <div id="contenido">
			<h4>Vehiculos de alquiler</h4>
			<p>EXPLICACION LEASING = RETING </p>
			<p>Donec sollicitudin molestie malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
			<h4>Coches disponibles:</h4>
		<table>
		<?php foreach ($datos['result'] as $value): ?>
			<tr>
				<td><?= $helper->getAlquilerListImage($value['list_img']) ?></td>
				<td><?= $value['marca'] ?></td>
				<td><?= $value['modelo'] ?></td>
				<td><?= $value['motor'] ?></td>
				<td><?= $value['combustible'] ?></td>
				<td><a href="<?= $helper->url('alquiler','fichavehiculo', $value['id'])?>"> MAS INFORMACION</a></td>
			</tr>
		<?php endforeach; ?>
	 	</table>
    </div>
    <?php include('views/layout/sidebar-right.php'); ?>
>>>>>>> f1fe01f0bf740c0d31bdce63c139f7e4694e6df2
  </div>
  <?php require('views/layout/footer.php'); ?>
</body>
</html>
