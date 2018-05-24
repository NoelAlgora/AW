<!DOCTYPE html>
<html lang="es">

<head>
  <?php $pageTitle = "Ficha noticia"; ?>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <?php include('views/layout/nav.php'); ?>
    <div class = "container_crear_noticia">
      <div class = "row">
        <div class = "col-65">
          <h1 class= "titulo_ficha_noticia"> <?=$noticia['titulo']; ?> </h1> 
          <p id="id_autor">Escrito por: <?=$noticia['autor']; ?></p>
          <p> <?=$noticia['fecha'];  ?> </p>
        </div>
        <div class = "col-35">
          <?= $helper->getNoticiasListImage($noticia['list_img']); ?>
        </div>
      </div>
      <div class = "row_lw">
          
      </div>
      <div class = "row">
        <p> <?=$noticia['cuerpo_noticia'];  ?> </p>
      </div>
    </div>
    <?php require('views/layout/footer.php'); ?>
</body>
</html>
