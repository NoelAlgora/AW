<?php

	/* Declaramos la variable para guardar la fecha en la que se publicó la noticia*/
	$fecha=date("d/n/Y");
	echo $fecha;

	/* Conectamos a la base de datos */
	$db = mysqli_connect('localhost','root','','caralcarro');

	/* Aquí lo que hacemos es que si algún listillo quiere ir directamente al archivo enviar.php para publicar una noticia en blanco, le salte un error */
	if ((!$_REQUEST["titulo"]) || (!$_REQUEST["autor"]) || (!$_REQUEST["cuerpo_noticia"])) { 
		echo "¡Tienes que completar todos los campos para publicar tu noticia!"; 
	}
	else {

		/* Ingresamos la noticia en la base de datos */
		mysqli_query ($db,"INSERT INTO noticia (titulo, autor, fecha, cuerpo_noticia) VALUES ('$_REQUEST[titulo]', '$_REQUEST[autor]', '$fecha', '$_REQUEST[cuerpo_noticia]')");
	}

?>