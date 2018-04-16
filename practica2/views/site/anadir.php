<!DOCTYPE html>
<html lang="es">

<head>
  <?php $pageTitle = "Inicio"; ?>
  <title>
    <?php echo $pageTitle; ?>
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php require('views/layout/header.php'); ?>
  	<?php include('views/layout/nav.php'); ?>
	<div class="container">
		<div class="container_register">
	      <p class="font_log">AÑADIR UN COCHE</p>
	      <form id="añadir_coche" action="" method="post">
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="marca">Marca *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="marca" name="marca" placeholder="Marca del vehículo..." required>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="modelo">Modelo *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="modelo" name="modelo" placeholder="Modelo del vehículo..." required>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="matricula">Matrícula *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="matricula" name="matricula" placeholder="Matrícula del vehículo..." required>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="color">Color *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="color" name="color" placeholder="Color del vehículo..." required>
	          </div>
	        </div>
	         <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="motor">Motor *</label>
	          </div>
	          <div class="col-75">
	             <select id="combustible" name="combustible" required>
	            	<option value="v4">V4</option>
					<option value="v6">V6</option>
					<option value="v8">V8</option>
					<option value="v10">V10</option>
					<option value="v12">V12</option>
	            </select>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="cambio">Tipo de cambio *</label>
	          </div>
	          <div class="col-75">
	            <select id="cambio" name="cambio" required>
	            	<option value="manual">Manual</option>
					<option value="automatico">Automático</option>
	            </select>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="combustible">Combustible *</label>
	          </div>
	          <div class="col-75">
	            <select id="combustible" name="combustible" required>
	            	<option value="diesel">Diesel</option>
					<option value="gasolina">Gasolina</option>
					<option value="electrico">Eléctrico</option>
	            </select>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label  class="font_log" for="foto_coche">Imagen</label>
	          </div>
	          <div class="col-75">
	            <input id="foto_coche" type="file" name="foto_coche" placeholder="Foto" required capture>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label  class="font_log" for="descripcion_vehiculo">Descripción</label>
	          </div>
	          <div class="col-75">
	            <textarea  class="font_log" id="descripcion_vehiculo" name="descripcion_vehiculo" placeholder="Pequeña descripción del vehículo..."></textarea>
	          </div>
	        </div>
	        <div class="row">
	          <input type="submit" value="Añadir">
	        </div>
	      </form>
    	</div>	
	</div>
</body>
</html>