<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    <?php echo $coche['nombre']; ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php require('views/layout/header.php'); ?>
  <?php include('views/layout/nav.php'); ?>

  <div class="ficha_vehiculo">
  	<h2> FICHA TÉCNICA DEL VEHÍCULO </h2>
  	<div class="img_ficha_vehiculo">
  			<?php echo $helper->getCarListImage($coche['list_img']); ?>
  	</div>
  	<div class="info_ficha_vehiculo">
  		<table class="tabla_info_ficha_vehiculo">
        <tbody>
          <tr>
            <td class="font_log">Marca: </td>
            <td> <?php echo $coche['marca']; ?></td>
            <td class="font_log">Modelo: </td>
            <td> <?php echo $coche['modelo'];?></td>
          </tr>
          <tr>
            <td class="font_log">Color: </td>
            <td> <?php echo $coche['color']; ?></td>
            <td class="font_log">Cambio: </td>
            <td> <?php echo $coche['cambio'];?></td>
          </tr>
           <tr>
            <td class="font_log">Motor: </td>
            <td> <?php echo $coche['motor']; ?></td>
            <td class="font_log">Combustible: </td>
            <td> <?php echo $coche['combustible'];?></td>
          </tr>
          <tr>
            <?php if(!isset($coche['status']) || $coche['status'] == 1): ?>
            <form method="POST" action="<?= $helper->url('alquiler','alquilar');?>">
              <input type="hidden" name="vehiculo_id" value="<?= $coche['id'] ?>">
              <button class="btn btn-success" type="submit">Alquilar</button>
            </form>
            <?php endif; ?>
          </tr>
        </tbody>
      </table>
    <?php echo $coche['descripcion']; ?>
  	</div>
  </div>
</body>
</html>
