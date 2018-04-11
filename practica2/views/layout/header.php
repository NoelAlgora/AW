<header>
  <table id="tabla_inicio">
    <tr>
      <td><a href="index.php"><img src="img/logo.png" /></a></td>
      <td><h2> Bienvenido a CaralCarro!</h2><br></td>
      <td>
        <div class="saludo">
          <?php
            if ( $helper->isUserLogged() ){
              echo "<p>Usuario: " . $helper->getLoggedUser()['username'] ."</p>";
              echo "<p><a href=" . $helper->url('user','logout') .">Log out</a></p>";
            }
            else {
              echo "<p>Usuario desconocido</p>";
              echo "<p><a href=".$helper->url('user','login').">Login</a></p>";
            }
          ?>
        </div>
      </td>
    <tr>
  </table>
</header>
