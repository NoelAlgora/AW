<!DOCTYPE html>
<html lang="es">

<head>
	<title>Últimas noticias</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
 <?php include('views/layout/nav.php'); ?>
    <h4>Últimas noticias</h4>
    <div>
      <?php foreach ($noticias as $key => $noticia): ?>
        <div class="resumen_noticia">
          <?= $helper->getNoticiasListImage($noticia['list_img']); ?>
          <div class ="campos_resumen_noticia">
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <H1><?= $noticia['titulo'] ?> </H1></a>
              <?= $noticia['autor'] ?> 
          </div>  
        </div>
      <?php endforeach; ?>
    </div>
</body>

</html>
