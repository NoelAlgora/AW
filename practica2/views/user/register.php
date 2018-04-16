<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Registro
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script language="JavaScript" type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="js/Register.js"></script>
</head>

<body>
	<?php require('views/layout/header.php'); ?>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">
			<form action="<?= $helper->url('user','register');?>" method="post">
				<input type="text" name="username" placeholder="Username" required="required" /><br>
				<input type="password" name="password" placeholder="Password" required="required" /><br>
				<input type="text" name="email" placeholder="Email" required="required" /><br>
				<button id="register_button" type="submit">Registrar</button>
				<div id="check_user"></div>
				<p>Ya tienes cuenta? <a href="<?= $helper->url('user','login');?>"> Login!</a></p>
		</div>
		<?php include('views/layout/sidebar-right.php'); ?>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
