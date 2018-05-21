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
  <?php require('views/layout/header.php'); ?>
  <?php include('views/layout/nav.php'); ?>
    <article>
      <figure>
        <?= $helper->getNoticiasListImage($noticia['list_img']); ?>
      </figure>
      <h1 class= "titulo_ficha_noticia"> <?=$noticia['titulo']; ?> </h1> 
      <p id="id_autor">Escrito por: <?=$noticia['autor']; ?></p>
      <p> <?=$noticia['fecha'];  ?> </p>
      <p> <?=$noticia['cuerpo_noticia'];  ?> </p>
    </article>
</body>
</html>
