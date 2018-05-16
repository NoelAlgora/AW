
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Crear vehiculo alquiler</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="fondo">
  <div class="container">
    <div class="container_register">
      <p class="font_log">Pon a alquilar tu coche</p>
      <span class="form_error_span">
          <?php foreach ($formErrors as $formError): ?>
          <p><?= $formError ?></p>
          <?php endforeach; ?>
      </span>
      <form id="create_vehiculo_form" action="<?= $helper->url('alquiler','crear_vehiculo');?>" enctype = "multipart/form-data" method="post">
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="matricula">Matricula *</label>
          </div>
          <div class="col-75">
            <input type="text" id="matricula" name="matricula" placeholder="Matricula del vehiculo..." value="<?= $formValues['matricula'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="marca">Marca *</label>
          </div>
          <div class="col-75">
            <input type="text" id="marca" name="marca" placeholder="Marca del vehiculo..." value="<?= $formValues['marca'] ?>" required>
          </div>
        </div>
         <div class="row">
          <div class="col-25">
            <label class="font_log" for="modelo">Modelo *</label>
          </div>
          <div class="col-75">
            <input type="text" id="modelo" name="modelo" placeholder="Modelo del vehiculo..." value="<?= $formValues['modelo'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="motor">Motor *</label>
          </div>
          <div class="col-75">
            <input type="text" id="motor" name="motor" placeholder="Motor del vehiculo..." value="<?= $formValues['motor'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="color">Color *</label>
          </div>
          <div class="col-75">
            <input type="text" id="color" name="color" placeholder="Color del vehiculo..." value="<?= $formValues['color'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="cambio">Cambio *</label>
          </div>
          <div class="col-75">
            <input type="text" id="cambio" name="cambio" placeholder="Cambio del vehiculo..." value="<?= $formValues['cambio'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="combustible">Combustible *</label>
          </div>
          <div class="col-75">
            <input type="text" id="combustible" name="combustible" placeholder="Combustible del vehiculo..." value="<?= $formValues['combustible'] ?>" required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label  class="font_log" for="descripción">Imagen *</label>
          </div>
          <div class="col-75">
            <input type="file" name="list_img" id="list_img" accept=".jpg,.jpeg,.png," required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="precio_dia">Precio *</label>
          </div>
          <div class="col-75">
            <input type="text" id="precio_dia" name="precio_dia" placeholder="Precio por dia..." value="<?= $formValues['precio_dia'] ?>" required> 
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label  class="font_log" for="descripción">Descripción</label>
          </div>
          <div class="col-75">
            <textarea  class="font_log" id="descripcion" name="descripcion" placeholder="Escribe algo sobre tí..."></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Crear">
        </div>
      </form>
    </div>
  </div>
</body>
</html>