<?php $pageTitle = "Miembros"; ?>
<?php include('layout/header.php'); ?>
<h2 class="centrar">Contacto</h2>
<div class="form-wrapper">
	<form name="contacto" action="mailto:nalgora@ucm.es" method="post" enctype="multipart/form-data" autocomplete="on">
		<span class="negrita"> Nombre: </span>
		<input type="text" name="nombre"/ > 
		<br>
		<br>
		<span class="negrita"> Dirección de email de contacto: </span>
		<input type="email" name="email"/ >
		<br>
		<br>
		<span class="negrita"> Motivo de la consulta: </span>
		<br>
		<label><input type="radio" name="motivo" value="evaluacion"/> Evaluación</label>
		<br>
		<label><input type="radio" name="motivo" value="sugerencias"/> Sugerencias</label>
		<br>
		<label><input type="radio" name="motivo" value="criticas"/> Críticas</label>
		<br>
		<br>
		<label class="negrita"><input name="casilla" type="checkbox" value="condiciones"/>He leido y acepto los términos y condiciones del servicio</span>
		<br>
		<br>
		<span class="negrita"> Consulta: </span>
		<input type="text" name="consulta" value="" />
		<br>
		<br>
		<button type="submit" value"enviar">Enviar Form</button>
	</form>
</div>
<?php include('layout/footer.php'); ?>