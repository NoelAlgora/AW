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

</head>

<body>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div class="filtros"> 
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
						<a href="     " title="azul">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="rojo">
						<a href="     " title="rojo">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="verde">
						<a href="     " title="verde">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="marron">
						<a href="     " title="marron">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="rosa">
						<a href="     " title="rosa">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="negro">
						<a href="     " title="negro">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="gris">
						<a href="     " title="gris">
							<i class="icon-check checked"></i>
							<em></em>
						</a>
					</li>
					<li class="blanco">
						<a href="     " title="blanco">
							<input type="checkbox" name="color[]" value="Blanco" class="blanco">
							<em></em>
						</a>
					</li>
					<li class="amarillo">
						<label class="container_filtros">
							<input type="checkbox" name="color[]" value="Amarillo" class="amarillo">
							<em class="checked_color"></em>
						</label>
					</li>
				</ul>
			</div>

			<div class="filtro_marca_contendor">
				<!-- <div class="filtro_marca_buscador">
					<input type="text" id="FilterSearchBrand"/>
					<i class="icon-search"></i>
					<i class="icon-remove-sign"></i>
					<i class="icon-spinner"></i>
				</div> -->
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
				<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">

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
