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
        <p class="noticias"> Noticia </p>
         <?php 
         $ID = $_GET['id_noticia']; // CON ESTA VARIABLE HABRIA QUE LLAMAR A LA FUNCION verUnaNoticia DEL CONTROLADOR DE NOTICIAS
         //
         
            echo "<table>";   
            
              echo "<tr>";
              echo "<td class = 'listado_noticias'>";
              echo "<br><b>";
              echo $datos['titulo'];
              echo "</b></br>";
              echo "<br>";
              echo "Autor: ".$datos['autor'];
              echo "<br>";
              echo "Fecha: ".$datos['fecha'];
              echo "</br>";
              echo "<br>";
              echo $ndatos['cuerpo_noticia'];
              echo "</td>";
              echo "</tr>";

            echo "</table>"; 
            */


         ?>
    </div>
    <?php include('views/layout/sidebar-right.php'); ?>
    <?php require('views/layout/footer.php'); ?>
</body>
</html>