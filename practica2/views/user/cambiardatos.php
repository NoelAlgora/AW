
<!DOCTYPE html>
<html lang="es">

<head>
   <?php $pageTitle = "Cambiar datos!"; ?>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="fondo">
  <div class="container">
    <div class="container_register">
      <p class="font_log">Modifica tus datos</p>
      <span class="form_error_span">
          <?php foreach ($formErrors as $formError): ?>
          <p><?= $formError ?></p>
          <?php endforeach; ?>
      </span>
      <form id="register_form" action="<?= $helper->url('user','cambiardatos');?>" method="post">
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="nombre">Nombre *</label>
          </div>
          <div class="col-75">
            <input type="text" id="username" name="username" placeholder="Tu nombre..." required value="<?= $username ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="apellido">Apellidos *</label>
          </div>
          <div class="col-75">
            <input type="text" id="apellido" name="apellido" placeholder="Tus apellidos..." required value="<?= $apellido ?>">
          </div>
        </div>
         <div class="row">
          <div class="col-25">
            <label class="font_log" for="email">Email *</label>
          </div>
          <div class="col-75">
            <input type="text" id="email" name="email" placeholder="Tu Email..." required value="<?= $email ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="telefono">Teléfono *</label>
          </div>
          <div class="col-75">
            <input type="text" id="telefono" name="telefono" placeholder="Tu teléfono de contacto..." required value="<?= $telefono ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="password">Contraseña *</label>
          </div>
          <div class="col-75">
            <input type="text" id="password" name="password" placeholder="Contraseña..." required value="<?= $password ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label class="font_log" for="repassword">Contraseña *</label>
          </div>
          <div class="col-75">
            <input type="text" id="repassword" name="repassword" placeholder="Repite tu Contraseña..." required value="<?= $repassword ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label  class="font_log" for="descripción">Descripción</label>
          </div>
          <div class="col-75">
            <textarea  class="font_log" id="descripcion" name="descripcion" placeholder="Escribe algo sobre tí..." value="<?= $descripcion ?>"></textarea>
          </div>
        </div>
        <div class="row">  
          <input type="submit" value="Cambiar datos">
        </div>
        <p class="font_log">¿No quieres cambiar tus datos? <a href="<?= $helper->url('user','perfil');?>"> Vuelve a tu perfil!</a></p>
      </form>
    </div>
  </div>
</body>
</html>


  