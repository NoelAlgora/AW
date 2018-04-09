<?php $pageTitle = "Login"; ?>
<?php require('layout/header.php'); ?>
<h4>Login</h4>
<form class="login_form" action="log_login.php" method="post">
  <p><label>Nombre de usuario</label><input type="text" name="username"/></p>
  <p><label>Contraseña</label><input type="text" name="password"/></p>
  <button type="submit">Log in</button>
</form>
<?php require('layout/footer.php'); ?>
