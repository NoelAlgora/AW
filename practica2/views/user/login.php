<!DOCTYPE html>
<html lang="es">

<head>
	<title>
		Login
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php require('views/layout/header.php'); ?>
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">
			<form method="post" action="<?= $helper->url('user','login');?>" method="post">
				<input type="text" name="username" placeholder="Username" required="required" /><br>
				<input type="password" name="password" placeholder="Password" required="required" /><br>
				<button type="submit">Log in</button>
				<p>Aun no te has registrado? <a href="<?= $helper->url('user','register');?>"> Registrarme!</a></p>
			</form>
		</div>
	<?php include('views/layout/sidebar-right.php'); ?>
	</div>
	<?php require('views/layout/footer.php'); ?>
</body>

</html>
