<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Perfil </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="css/alquiler.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php require('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">

			<h1>Informacion del usuario</h1>


		<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				
				
				<div class="card">
					<a href="" >
					<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">

				<span class="card-title">
					<h3><?php echo "Mis alquileres"; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">

					

					<?php

					$cont=count($datos['rentCars'] );

					if($cont==0){
						echo"No tienes ningún  en alquiler";
					}else{
						

						if($cont==1){
							echo "Tienes " .$cont." coche en alquiler";

						}else{
							echo "Tienes " .$cont." coches en alquiler";

						}
						echo '<br><a href="" ><input class="ctaFlat" type="button" value="Consultar"></a>';
					}
					?>
				
				
				
					
				</div>
				
			</div>
		</div>

		<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				
				
				<div class="card">
					<a href="" >
					<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">

				<span class="card-title">
					<h3><?php echo "Mis leasing"; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">

					<?php

					$cont=count($datos['leasingCars'] );

					if($cont==0){
						echo"No tienes ningún  con leasing";
					}else{
						
						if($cont==1){
							echo "Tienes " .$cont." coche  en leasing";

						}else{
							echo "Tienes " .$cont." coches en leasing";

						}
						echo '<br><a href="" ><input class="ctaFlat" type="button" value="Consultar"></a>';
					}
					?>

					
				
				
				
					
				</div>
				
			</div>
		</div>

		<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				
				
				<div class="card">
					<a href="" >
					<span class="card-header" style="<?php echo " background-image: url( " . $helper->getCarListImageCSS($value['list_img']) ."); "?>">

				<span class="card-title">
					<h3><?php echo "Coches propios en leasing"; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">

					<?php

					$cont=count($datos['ownedCarsToLeasing']);

					if($cont==0){
						echo"No tienes ningún coche propio en leasing";
					}else{
						

						if($cont==1){
							echo "Tienes " .$cont." coche propio  en leasing";

						}else{
							echo "Tienes " .$cont." coches propios  en leasing";

						}
						echo '<br><a href="" ><input class="ctaFlat" type="button" value="Consultar"></a>';
					}
					?>

					
				
				
				
					
				</div>
				
			</div>
		</div>
		<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				
				
				<div class="card">
					<a href="<?php echo $helper->url('user','fichaMisAlquileresPropios', $value['id'])?>" >
					<span class="card-header" style="">

				<span class="card-title">
					<h3><?php echo "Coches propios en alquiler"; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">
					<div class="info_list_car">

					<?php

					$cont=count($datos['ownedCarsToAlquiler']);

					if($cont==0){
						echo"No tienes ningún coche propio en alquiler";

						


					}else{
						if($cont==1){
							echo "Tienes " .$cont." coche propio  en alquiler";

						}else{
							echo "Tienes " .$cont." coches propios en alquiler";

						}
						

						echo '<br><a href="" ><input class="ctaFlat" type="button" value="Consultar"></a>';
					}
					?>
					
				</div>
				
				
					
			</span>
				</div>
				
				
				
					
				</div>
				
			</div>
		</div>
		<div id="container">
		<!-- <div id="contenido"> -->
		<div class="container_cards">
			<div class="cards">
				<!-- <?php  var_dump($datos['result']); ?>	 -->
				
				<div class="card">
					<a href="<?= $helper->url('user','fichaNoticia', $noticia['id']) ?>" >
					<span class="card-header" style="">

				<span class="card-title">
					<h3><?php echo "Mis datos personales"; ?></h3>
				</span>
					</a>
					</span>
				<span class="card-summary">
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/engine.png" alt="engine">
					<p><?= $datos['user']['username']?></p>
					<img class="symbol_list_car" src="img/fuel.png" alt="fuel">
					<p><?= $datos['user']['apellido']?></p>
				</div>
				
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/gear.png" alt="cambio">
					<p><?= $datos['user']['email']?></p>
					<img class="symbol_list_car" src="img/passenger.png" alt="cambio">
					<p></p>
				</div>
				<div class="info_list_car">
					<img class="symbol_list_car" src="img/price.png" alt="price">
					<p><?= $datos['user']['telefono']?> </p>
				</div>
					<a href="" ><input class="ctaFlat" type="button" value="Modificar"></a>
			</span>
				</div>
				
			</div>
		</div>
		
	</div>


		
	</div>
			
		</div>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>
</html>
