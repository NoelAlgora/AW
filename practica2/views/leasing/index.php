<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Coches de renting
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/filter.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script src="./js/calendarFilter.js"></script>
  		<script>
		$( function() {
			$( "#datepickerAlquiler" ).datepicker();
			$( "#datepickerDevolucion" ).datepicker();
		} );
	</script>
</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		
		<div class="filtros"> 
			<form class="form_date_filtro" method="POST" action="<?= $helper->url('leasing','dateCarFilter');?>">
				
				<h4 style="padding-left: 5%;"> Fecha de recogida</h4>
				<input class="input_fechas_index" type="text" id="datepickerAlquiler" placeholder="Fecha de recogida" name="inicio">
				<h4 style="padding-left: 5%;"> Fecha de devolucion</h4>
				<input class="input_fechas_index" type="text" id="datepickerDevolucion" placeholder="Fecha de devolución" name="fin">
				
			
			<input class="button-filter" type="submit" name="aplicar" value="Buscar Vehiculos">
			</form>

			<form class="form_filtro" method="POST" action="<?= $helper->url('leasing','filter');?>">
			<div class="filtro_combustible">
				<h4 style="padding-left: 5%;"> Combustible</h4>
				<label class="container_filtros">Diesel
					<input type="checkbox" name="combustible[]" value="Diesel">
					<span class="checkmark"></span>
				</label>
				<label class="container_filtros">Gasolina
				  <input type="checkbox" name="combustible[]" value="Gasolina">
				  <span class="checkmark"></span>
				</label>
				<label class="container_filtros">Eléctrico
				  <input type="checkbox" name="combustible[]" value="Electrico">
				  <span class="checkmark"></span>
				</label>
			</div>

			<div class="filtro_color">
				<h4 style="padding-left: 5%;">Color</h4>
				<ul>
					<li class="azul">
						<em class="checked_color">
						<label class="container_filtros">
							<input type="checkbox" name="color[]" value="Azul">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="rojo">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Rojo">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="verde">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Verde">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="marron">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Marron">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="rosa">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Rosa">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="negro">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Negro">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="gris">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Gris">
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="blanco">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Blanco" >
							<span class="checkmark_color"></span>
							</label>
						</em>
					</li>
					<li class="amarillo">
						<em class="checked_color">
						<label class="container_filtros">

							<input type="checkbox" name="color[]" value="Amarillo">
							<span class="checkmark_color"></span>
						</label>
						</em>
					</li>
				</ul>
			</div>

			<div class="filtro_marca_contendor">
				<div class="filtro_marca">
					<h4 style="padding-left: 5%;">Marca</h4>
					<label class="container_filtros">Audi
						<input type="checkbox" name="marca[]" value="Audi" >
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">BMW
						<input type="checkbox" name="marca[]" value="Bmw">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Citroen
						<input type="checkbox" name="marca[]" value="Citroen">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Ferrari
						<input type="checkbox" name="marca[]" value="Ferrari" >
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Fiat
						<input type="checkbox" name="marca[]" value="Fiat">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Ford
						<input type="checkbox" name="marca[]" value="Ford">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Seat
						<input type="checkbox" name="marca[]" value="Seat">
						<span class="checkmark"></span>
					</label>	
					<label class="container_filtros">Suzuki
						<input type="checkbox" name="marca[]" value="Suzuki">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Toyota
						<input type="checkbox" name="marca[]" value="Toyota">
						<span class="checkmark"></span>
					</label>
					<label class="container_filtros">Volkswagen
						<input type="checkbox" name="marca[]" value="Volkswagen">
						<span class="checkmark"></span>
					</label>
				</div>
			</div>

			<div class="filtro_cambio">
				<h4 style="padding-left: 5%;"> Cambio</h4>
				<label class="container_filtros">Manual
					<input type="checkbox" name="cambio[]" value="Manual">
					<span class="checkmark"></span>
				</label>
				<label class="container_filtros">Automático
					<input type="checkbox" name="cambio[]" value="Automatico">
					<span class="checkmark"></span>
				</label>
			</div>
			<div>
			      <input class="button-filter" type="submit" name="aplicar" value="Aplicar">
			</div>
		</form>
	</div>

	<div class="container_cards">
		<div class="cards">
			<?php foreach ($datos['result'] as $value): ?>
			<div class="card">
				<a href=<?php echo $helper->url('leasing','fichavehiculo', $value['id'])?> >
				<span class="card-header" style="<?php echo " background-image: url( " . $helper->getLeasingImageUrl($value['id'], $value['list_img']) ."); "?>">

			<span class="card-title">
				<h3><?php echo $value['marca'] ." ". $value['modelo']; ?></h3>
			</span>
				</a>
				</span>
			<span class="card-summary">
			<div class="info_list_car">
				<img class="symbol_list_car" src="img/engine.png" alt="engine">
				<p><?php echo $value['motor']; ?></p>
				<img class="symbol_list_car" src="img/fuel.png" alt="fuel">
				<p><?php echo $value['combustible']; ?></p>
			</div>
			<div class="info_list_car">
				<img class="symbol_list_car" src="img/gear.png" alt="cambio">
				<p><?php echo $value['cambio']; ?></p>
				<img class="symbol_list_car" src="img/passenger.png" alt="cambio">
				<p><?php echo $value['plazas']; ?></p>
			</div>
			<div class="info_list_car">
				<img class="symbol_list_car" src="img/price.png" alt="price">
				<p><?php echo $value['base_price_day']; ?> €/día </p>
			</div>
				<a href=<?php echo $helper->url('leasing','fichavehiculo', $value['id'])?> ><input class="ctaflat" type="button" value="Reservar"></a>
		</span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
		
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
