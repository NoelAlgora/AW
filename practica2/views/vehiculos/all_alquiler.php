<!DOCTYPE html>
<html lang="es">

<head>
  <?php $pageTitle = "Inicio"; ?>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <?php $pageTitle = "Alquila tu coche!"; ?>
    <?php require('views/layout/header.php'); ?>
    <?php require('views/layout/nav.php'); ?>
    <div id="container">
      <div>
        <p class="font_log"> Vehículos Disponibles</p><br><br>
         <?php 
            $db = mysqli_connect('localhost','root','','caralcarro');
            $listaCoches = mysqli_query($db, "SELECT id, marca, modelo, imagen FROM vehiculo_alquiler");

            echo "<table>";    
            while ($coche = mysqli_fetch_assoc($listaCoches)){
              echo "<tr>";
              echo "<td class='listado_vehiculos'>";
              echo '<img id="img_alquiler" src="data:image/jpeg;base64,'.base64_encode( $coche['imagen'] ).'"/>';
              echo "</td>";
              echo "<td class='listado_vehiculos'>";
              echo '<div class="info_coche">';
              echo '<p><label class="font_info">Marca: </label>';
              echo $coche['marca'].'</p>';
              echo '<p><label class="font_info">Modelo: </label>';
              echo $coche['modelo'].'</p>';
              echo "</div>";
              echo "</td>";
              echo "</tr>";
            }
            echo "</table>"; 
         ?>
      </div>
    </div>
</body>
</html>