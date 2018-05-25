<!DOCTYPE html>
<html lang="es">
   <head>
      <title>
         <?php echo $coche['marca'] . " " . $coche['modelo']; ?>
      </title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link rel="stylesheet" type="text/css" href="css/ficha_vehiculo.css" />
      <link rel="stylesheet" type="text/css" href="css/slideCarPhotos.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="./js/alquilar.js"></script>
   </head>
   <body>
      <?php include('views/layout/nav.php'); ?>
      <div id="container">
         <div id="contenido_index">
            <h2> FICHA TÉCNICA DEL VEHÍCULO </h2>
            <div class="img_ficha_vehiculo ">
               <div class="slideshow-container">                  <?php
                     $images = $helper->getImagesCarOfFolder($coche['img_folder_name']);
                     foreach ($images as $value=>$image): ?>
                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides fade">
                     <!-- <div class="numbertext">1 / 3</div> -->
                     <img src="<?php echo $image ?>" style="width:100%">
                     <!-- <div class="text">Caption Text</div> -->
                  </div>
                  <?php endforeach; ?>
                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
               </div>
               <br>
               <!-- The dots/circles -->
               <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
               </div>
            </div>
            <div class="alquilar-wrapper">
               <div class="fecha_recogida">
                  <label>Fecha de recogida:</label>
                  <div class="datepicker_fecha_recogida"></div>
               </div>
               <div class="fecha_devolucion">
                  <label>Fecha de devolución:</label>
                  <div class="datepicker_fecha_devolucion"></div>
               </div>
               <button id="limpiar-fechas" class="boton_limpiar">Limpiar fechas</button>
               <div class="alquilar-form-wrapper" data-alquileres="<?= $alquiler_str ?>">
                  <form method="POST" action="<?= $helper->url('leasing','alquilar');?>">
                     <input class="input-datepicker" type="hidden" id="fecha_recogida" name="fecha_recogida">
                     <input class="input-datepicker" type="hidden" id="fecha_devolucion" name="fecha_devolucion">
                     <input type="hidden" name="vehiculo_id" value="<?= $coche['id'] ?>">
                     <button id="submit-alquilar" class="boton_alquilar" type="submit">Alquilar</button>
                  </form>
               </div>
            </div>
            <div class="info_ficha_vehiculo">
               <table class="tabla_info_ficha_vehiculo">
                  <tbody>
                     <tr>
                        <td class="font_log">Marca: </td>
                        <td>
                           <?php echo $coche['marca']; ?>
                        </td>
                        <td class="font_log">Modelo: </td>
                        <td>
                           <?php echo $coche['modelo'];?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font_log">Color: </td>
                        <td>
                           <?php echo $coche['color']; ?>
                        </td>
                        <td class="font_log">Cambio: </td>
                        <td>
                           <?php echo $coche['cambio'];?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font_log">Motor: </td>
                        <td>
                           <?php echo $coche['motor']; ?>
                        </td>
                        <td class="font_log">Combustible: </td>
                        <td>
                           <?php echo $coche['combustible'];?>
                        </td>
                     </tr>
                     <tr>
                        <td class="font_log">Plazas: </td>
                        <td>
                           <?php echo $coche['plazas']; ?>
                        </td>
                        <td class="font_log">Precio base por dia: </td>
                        <td>
                           <?php echo $coche['base_price_day'];?>
                        </td>
                     </tr>
                     <tr>
                        <?php echo $coche['descripcion']; ?>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <?php require('views/layout/footer.php'); ?>
   </body>
   <script src="js/slideCarPhotos.js"></script>
</html>