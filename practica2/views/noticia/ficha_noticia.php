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
    <div id="container">
        <p class="noticias"> </p>
            <table> 
            
              <tr>
              <td class = 'listado_noticias'>
              <br><b><H1 align="center">
              <?=$noticia['titulo']; ?>
              </H1></b></br>
              <br>
              Autor: <?=$noticia['autor']; ?>
              <br>
              Fecha: <?=$noticia['fecha']; ?>
              </br>
              <br>
              <?=$noticia['cuerpo_noticia'];?>
              </td>
              </tr>

            </table>
    </div>
</body> 
</html>