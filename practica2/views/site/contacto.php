<?php $pageTitle = "Miembros"; ?>
<?php include('layout/header.php'); ?>
<h2 class="centrar">Contacto</h2>
<div class="form-wrapper">
	<form name="contacto" action="mailto:nalgora@ucm.es" method="post" enctype="multipart/form-data" autocomplete="on">
		<span class="negrita"> Nombre: </span>
		<input type="text" name="nombre" />
		<br>
		<br>
		<span class="negrita"> Dirección de email de contacto: </span>
		<input type="email" name="email" />
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
		<label><input class="negrita" type="checkbox" value="condiciones"/><span class="negrita">He leido y acepto los <a href="basesLegales.php"> terminos y condiciones del servicio </a></span></label>
		<br>
		<br>
		<span class="negrita"> Consulta: </span>
		<input type="text" name="consulta" value="" />
		<br>
		<br>
		<button type="submit" value="enviar">Enviar Form</button>
	</form>

<div class="AÑADIR CSS">
                                <h3> Contáctanos:</h3>

                                <table class="AÑADIR CSS">
                                    <tbody>
                                        <tr>
                                            <td>Teléfono:</td>
                                            <td class=" AÑADIR CSS " > 918 487 550</td>
                                        </tr>
                                        <tr>
                                            <td> Email:</td>
                                            <td class="AÑADIR CSS"> contacto@caralcarro.es</td>
                                        </tr>
                                        <tr>
                                            <td>Estamos en :</td>
                                            <td class="AÑADIR CSS"> Calle Sierra de Atapuerca 44</td>
                                        </tr>
                                        <tr>
                                            <td>Horario:</td>
                                            <td class="AÑADIR CSS"> Lunes a viernes, 9:00 a 17:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
	
</div>
<?php include('layout/footer.php'); ?>