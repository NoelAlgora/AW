<!DOCTYPE html>
<html lang="es">

<head>
  <title> <?php echo $pageTitle; ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php $pageTitle = "Alquila tu coche!"; ?>
    <?php require('views/layout/header.php'); ?>
    <?php require('views/layout/nav.php'); ?>
    <div id="container">
      <div id="tabla_vehiculos">
         <?php 
            $db = mysqli_connect('localhost','root','','caralcarro');
            $consulta = mysqli_query($db, "SELECT count(*) as total FROM vehiculo_alquiler");
            $numeroCoches = mysqli_fetch_array($consulta);
            $listaCoches = mysqli_query($db, "SELECT id, marca, modelo, imagen FROM vehiculo_alquiler");

            echo "<table id='tabla_vehiculos'>";
            echo "<caption><h3><b>Vehículos disponibles en alquiler</b><h3></caption>";
            while ($coche = mysqli_fetch_assoc($listaCoches)){
              for ($i=0; $i < $numeroCoches['total']/4; $i++) { 
                echo "<tr>";
                for ($j=0; $j < 4; $j++) { 
                  /*echo '<td id=><a href = "vehiculo.php?id='.urldecode($coche['id']).'">*/
                  $imagen_coche = $coche['imagen'];
                  echo "<td>$imagen_coche</td>";
                }
                echo "</tr>";
              }
                
            }
            echo "</table>"; 
         ?>
      </div>
      <?php require('views/layout/sidebar-right.php'); ?>
    </div>
    <?php require('views/layout/footer.php'); ?>    
</body>
</html>