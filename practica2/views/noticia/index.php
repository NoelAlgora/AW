<!DOCTYPE html>
<html lang="es">

<head>
  <title>Últimas noticias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php require('views/layout/header.php'); ?>
    <?php include('views/layout/nav.php'); ?>
    <p class="noticias"> <b> Ultimas noticias </b></p>
    <div id="container">
      <div id="contenido">
          <table>
            <?php foreach ($noticias as $key => $noticia): ?>
              <tr>
              <td class = 'listado_noticias'>
              <br><b>
              <a href="<?= $helper->url('noticia','fichaNoticia', $noticia['id']) ?>"> <?= $noticia['titulo'] ?></a>
              </b></br>
              <?= $noticia['cuerpo_noticia']; ?>
              </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <?php include('views/layout/sidebar-right.php'); ?>
    </div>
</body>
</html>
 