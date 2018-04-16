
<!DOCTYPE html>
<html lang="es">

<head>
   <?php $pageTitle = "Registrate!"; ?>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="fondo">
  <div class="container">
    <div class="container_register">
      <p class="font_log">Unete a Nostros!</p>
      <form action="<?= $helper->url('user','register');?>" method="post">
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="nombre">Nombre *</label>
          </div>
          <div class="col-75">
            <input type="text" id="username" name="nombre" placeholder="Tu nombre..." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="apellidos">Apellidos *</label>
          </div>
          <div class="col-75">
            <input type="text" id="apellido" name="apellidos" placeholder="Tus apellidos..." required>
          </div>
        </div>
         <div class="row">
          <div class="col-25">
            <label class="font_log" for="email">Email *</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="Email" placeholder="Tu Email..." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="telefono">Teléfono *</label>
          </div>
          <div class="col-75">
            <input type="text" id="telefono" name="telefono" placeholder="Tu teléfono de contacto..." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="contraseña">Contraseña *</label>
          </div>
          <div class="col-75">
            <input type="text" id="password" name="contraseña" placeholder="Contraseña..." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="contraseñar">Contraseña *</label>
          </div>
          <div class="col-75">
            <input type="text" id="passwordr" name="contraseña" placeholder="Repite tu Contraseña..." required>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label  class="font_log" for="descripción">Descripción</label>
          </div>
          <div class="col-75">
            <textarea  class="font_log" id="descripcion" name="descripción" placeholder="Escribe algo sobre tí..."></textarea>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Registrarse">
        </div>
        <p class="font_log">Ya tienes cuenta? <a href="<?= $helper->url('user','login');?>"> Login!</a></p>
      </form>
    </div>
  </div>
</body>
</html>


  