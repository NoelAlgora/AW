
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Registro
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="fondo">
  <div id="container">
    <div class="login">
      <h3>Registro</h3>
      <form class="login_form" action="<?= $helper->url('user','register');?>" method="post">
        <input class="login_username" type="text" name="username" placeholder="Username" required="required" /><br>
        <input class="login_password" type="password" name="password" placeholder="Password" required="required" /><br>
        <input class="login_username" type="text" name="email" placeholder="Email" required="required" /><br>
        <button class="login_boton" type="submit">Registrar</button>
        <p>Ya tienes cuenta? <a href="pre_login.php"> Login!</a></p>
      </form>
    </div>
  </div>
</body>

</html>
