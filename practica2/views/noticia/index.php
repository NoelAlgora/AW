<!DOCTYPE html>
<html lang="es">

<head>
	<title>Últimas noticias</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<<<<<<< HEAD
    <?php require('views/layout/header.php'); ?>
    <?php include('views/layout/nav.php'); ?>
    <h4>Últimas noticias</h4>
    <div>
      <?php foreach ($noticias as $key => $noticia): ?>
        <div class="resumen_noticia">
          <?= $helper->getNoticiasListImage($noticia['list_img']); ?>
          <div class ="campos_resumen_noticia">
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <H1>              <?= $noticia['titulo'] ?> </H1></a>
              <?= $noticia['autor'] ?> 
          </div>  
        </div>
      <?php endforeach; ?>
    </div>
=======
	<?php include('views/layout/nav.php'); ?>
	<div id="container">
		<div id="contenido">
			<p class="noticias"> Ultimas noticias </p>
			<table>
				<?php foreach ($noticias as $key => $noticia): ?>
				<tr>
					<td class='listado_noticias'>
						<br><b>
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <?= $noticia['titulo'] ?></a>";
              </b></br>
						<?= $noticia['cuerpo_noticia']; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>

		</div>
			<?php include('views/layout/sidebar-right.php'); ?>
	</div>
	<?php require('views/layout/footer.php'); ?>
>>>>>>> 1016a0dfe1f4a3fb2f30cbea84a9ef928f83ed0f
</body>

</html>
