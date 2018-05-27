<!DOCTYPE html>
<html lang="es">

<head>
	<title>Últimas noticias</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/noticias.css" />
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
 <?php include('views/layout/nav.php'); ?>
    <div class = "container">
      <h1>Últimas noticias</h1>
      <?php foreach ($noticias as $key => $noticia): ?>
        <div class = "row">
          <div class="col-30">
            <div class="row">
              <?= $helper->getNoticiasListImage($noticia['list_img']); ?> 
            </div>
          </div>
          <div class ="col-65">
            <div class ="row">
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <H2><?= $noticia['titulo'] ?> </H2></a>
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
