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
            $listaCoches = mysqli_query($db, "SELECT id, marca, modelo, imagen FROM vehiculo_alquiler");
            $i = 0;

            echo "<table id='tabla_vehiculos'>";
            echo "<caption><h3><b>Vehículos disponibles en alquiler</b><h3></caption>";
            echo "<tr>";
            while ($coche = mysqli_fetch_assoc($listaCoches)){
              echo '<td><img id="img_alquiler" src="data:image/jpeg;base64,'.base64_encode( $coche['imagen'] ).'"/>';
              echo $coche['marca']." ".$coche['modelo'];
              echo '</td>';
              $i++;
              if($i % 4 == 0){
                echo '</tr><tr>';
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