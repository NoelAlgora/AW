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

<?php $pageTitle = "Contactanos!";?>
<div id="container">
	<div class="contacto_frase">
      	<h2> Sobre Nostros</h2>
      	<p> Estamos aquí para contestar cualquier pregunta sobre tu experiencia en CaralCarro. Contactanos y responderemos lo antes posible.</p>
      	<p>Si hay algo que siempre quisiste experimentar y no la puedes encontrar en nuestra web, no dudes en contarnosla y prometemos hacer todo lo que esté en nuestras manos para hacertelo llegar!</p><br><br>
    </div>
	<div class ="content-bottom">
	    <div class="container_contacto">
	      <p class="font_log"> Contactanos</p>
	      <form class="login_box" method="post" action="mailto:nalgora@ucm.es" method="post" enctype="multipart/form-data" autocomplete="on">
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="nombre">Nombre *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="nombre" name="username" placeholder="Tu nombre..." required>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label class="font_log" for="nombre">Email *</label>
	          </div>
	          <div class="col-75">
	            <input type="text" id="nombre" name="password" placeholder="Tu email..." required>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-25">
	            <label  class="font_log" for="descripción">Consulta *</label>
	          </div>
	          <div class="col-75">
	            <textarea  class="font_log" id="descripcion" name="descripción" placeholder="Escribemos tu consulta..."></textarea>
	          </div>
	        </div>
	        <div class="row">
	          <input type="checkbox" value="condiciones"/>He leido y acepto los <a href="basesLegales.php"> Terminos y condiciones</a>
	        </div>   
	        <div class="row">
	          <input type="submit" value="Enviar">
	        </div>
	       </form>
	    </div>
    
    	<div class="right_sidebar_contacto">
			<p><span class="font_contacto"> Teléfono: </span><span class="contacto_letra">918 487 550</span></p>
			<p><span class="font_contacto"> Fax: </span><span class="contacto_letra">918 501 988</span></p>
			<p><span class="font_contacto"> Email: </span><span class="contacto_letra">contacto@caralcarro.es</span></p>
			<p><span class="font_contacto"> Dirección: </span><span class="contacto_letra">C/ Sierra de atapuerca 59, Portal B 4ºC. Madrid</span></p>
			<p><span class="font_contacto"> Código Postal: </span><span class="contacto_letra">28050</span></p>
			<p><a href="http://www.twitter.com"><img class ="img_redes" src="img/twitter.jpg" /></a><a href="http://www.facebook.com"><img class ="img_redes" src="img/facebook.jpg" /></a></p>
		</div>
	</div>
</div>
</body>
</html>


