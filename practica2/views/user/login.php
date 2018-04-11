
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    Login
  </title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="fondo">
  <div id="container">
    <div class="login">
      <h3> Log in </h3>
      <form method="post" action="<?= $helper->url('user','login');?>" method="post">
        <input class="login_username" type="text" name="username" placeholder="Username" required="required" /><br>
        <input class="login_password" type="password" name="password" placeholder="Password" required="required" /><br>
        <button class="login_boton" type="submit">Log in</button>
        <p><b>Aun no te has registrado?<a href="<?= $helper->url('user','register');?>"> Registrarme!</a></b></p>
      </form>
    </div>
  </div>
</body>

</html>
