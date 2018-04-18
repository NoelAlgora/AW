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
    <div id="container">
        <p class="noticias"> Noticia </p>
         <?php 
         $ID = $_GET['id_noticia'];
         //echo $var;
            $db = mysqli_connect('localhost','root','','caralcarro');
            $listaNoticia = mysqli_query($db, "SELECT titulo, autor, fecha, cuerpo_noticia FROM noticia WHERE id_noticia = $ID");
            $noticia = mysqli_fetch_assoc($listaNoticia);
            //$noticia = $db->query($listaNoticia);
            echo "<table>";   
            
              echo "<tr>";
              echo "<td class = 'listado_noticias'>";
              echo "<br><b>";
              echo $noticia['titulo'];
              echo "</b></br>";
              echo "<br>";
              echo "Autor: ".$noticia['autor'];
              echo "<br>";
              echo "Fecha: ".$noticia['fecha'];
              echo "</br>";
              echo "<br>";
              echo $noticia['cuerpo_noticia'];
              echo "</td>";
              echo "</tr>";

            echo "</table>"; 
         ?>
    </div>
</body>
</html>