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
    <div id="container">
        <p class="noticias"> Ultimas noticias </p>
          <table>
         <?php 
            //$db = mysqli_connect('localhost','root','','caralcarro');
            //$listaNoticias = mysqli_query($db, "SELECT id_noticia, titulo, cuerpo_noticia FROM noticia");?>

            <?php foreach ($noticias as $key => $noticia): ?>
              <tr>
              <td class = 'listado_noticias'>
              <br><b>
              <a href='../noticia/ficha_noticia.php?id_noticia=$id_n'> <?= $noticia['titulo'] ?></a>";
              </b></br>
              <?= $noticia['cuerpo_noticia']; ?>
              </td>
              </tr>
            <?php endforeach; ?>
          </table>
        <?php include('views/layout/sidebar-right.php'); ?>
    </div>
    <?php require('views/layout/footer.php'); ?>
</body>
</html>
