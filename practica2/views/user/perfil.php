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
	 <?php include('views/layout/nav.php'); ?>
	<div id="container" >
		<img src="img/perfil.jpg" class="fondo_perfil">
		<div id="contenido">
			    <div class="col-xs-12">
			    	 <div class="table-responsive">

			    	<h4 class="ctaflat" style="cursor:auto">Información del usuario</h4>
			        <table class="table table-bordered table-hover">
			          <thead>
			            	<tr>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Descripcion</th>
							<th>Acciones</th>
						</tr>
			          </thead>
			         <tbody>
						<tr>
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
							<td>
								<a class="email_btn" href="<?= $helper->url('user', 'cambiarDatos') ?>"> Modificar Datos</a>
							</td>
						</tr>
					</tbody>
			        </table>

			      </div><!--end of .table-responsive-->
			       <div class="table-responsive">
			       <h4 class="ctaflat" style="cursor:auto">Vehiculos de alquiler</h4>
			        <table class="table table-bordered table-hover">
			          <thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Matricula</th>
							<th>Fecha Inicio</th>
							<th>Fecha Fin</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
			         <tbody>
					<?php
					// var_dump($datos['rentCars']);
					foreach ($datos['rentCars'] as $key => $car): ?>
						<tr>
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
									<button class="email_btn" class="btn btn-success" type="submit">Devolver</button>
								</form>
								<td><a  class="email_btn" href="<?= $helper->url('user', 'fichaVehiculoAlquiler', $car['id']) ?>"> Ver vehiculo</a></td>
							</td>
						</tr>

						<?php endforeach; ?>
				</tbody>
			        </table>
			      </div><!--end of .table-responsive-->
			       <div class="table-responsive">
			       	<h4 class="ctaflat" style="cursor:auto">Vehiculos de leasing</h4>
			        <table class="table table-bordered table-hover">
			          <thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Matricula</th>
							<th>Fecha Inicio</th>
							<th>Fecha Fin</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
			         <tbody>
					<?php
					// var_dump($datos['rentCars']);
					foreach ($datos['leasingCars'] as $key => $car): ?>
						<tr>
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
									<button class="email_btn" class="btn btn-success" type="submit">Devolver</button>
								</form>
								<td><a class="email_btn" href="<?= $helper->url('user', 'fichaVehiculoLeasing', $car['id']) ?>"> Ver vehiculo</a></td>
							</td>
						</tr>

						<?php endforeach; ?>
					</tbody>
			        </table>
			      </div><!--end of .table-responsive-->
			      
			      <div class="table-responsive">
			      	<h4 class="ctaflat" style="cursor:auto">Vehiculos en propiedad cedidos para alquiler</h4>
			        <table class="table table-bordered table-hover">
			          <thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Matricula</th>
							<th>Motor</th>
							<th>Combustible</th>
							<th>Color</th>
							<th>Acciones</th>
						</tr>
					</thead>
			        <tbody>
					<?php foreach($datos['ownedCarsToAlquiler'] as $key => $car): ?>
					<tr>
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
							<td><a class="email_btn" href="<?= $helper->url('user', 'fichaVehiculoAlquiler', $car['id']) ?>"> Ver vehiculo</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			        </table>

			      </div><!--end of .table-responsive-->

			      <div class="table-responsive">
			      	<h4 class="ctaflat" style="cursor:auto">Vehiculos en propiedad cedidos para leasing</h4>
			        <table class="table table-bordered table-hover">
			          <thead>
						<tr>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Matricula</th>
							<th>Motor</th>
							<th>Combustible</th>
							<th>Color</th>
							<th>Acciones</th>
						</tr>
					</thead>
			        <tbody>
					<?php foreach($datos['ownedCarsToLeasing'] as $key => $car): ?>
						<tr>
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
							<td><a class="email_btn" href="<?= $helper->url('user', 'fichaVehiculoLeasing', $car['id']) ?>"> Ver vehiculo</a></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
			        </table>

			      </div><!--end of .table-responsive-->

			    </div>

		  </div>
		</div>
	<?php require('views/layout/footer.php'); ?>
   </body>
</body>
</html>
			
