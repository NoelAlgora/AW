<!DOCTYPE html>
<html lang="es">

<head>
  <?php $pageTitle = "Últimas noticias"; ?>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div id="container">
        <p class="noticias"> Ultimas noticias </p>
         <?php 
            $db = mysqli_connect('localhost','root','','caralcarro');
            $listaNoticias = mysqli_query($db, "SELECT titulo, autor, fecha, cuerpo_noticia FROM noticia");

            echo "<table>";   
            while ($noticia = mysqli_fetch_assoc($listaNoticias)){

              echo "<tr>";
              echo "<td class = 'listado_noticias'>";
              echo "<br><b>";
              echo $noticia['titulo'];
              echo "</b></br>";
              echo $noticia['cuerpo_noticia'];
              echo "</td>";
              echo "</tr>";
            }
            echo "</table>"; 
         ?>
    </div>
</body>
</html>