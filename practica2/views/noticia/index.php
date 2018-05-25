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
    <div class = "container_crear_noticia">
      <p class="font_log"> Últimas noticias </p>
      <?php foreach ($noticias as $key => $noticia): ?>
        <div class = "row">
          <div class="col-30">
            <div class="row">
              <?= $helper->getNoticiasListImage($noticia['list_img']); ?> 
            </div>
          </div>
          <div class ="col-65">
            <div class ="row">
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <H1><?= $noticia['titulo'] ?> </H1></a>
              <?= $noticia['autor'] ?> 
            </div>
          </div>
          <div class = "row_lg">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php require('views/layout/footer.php'); ?>
</body>

</html>
