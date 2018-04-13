<header>
  <table id="tabla_inicio">
    <tr>
      <td id="logo_header"><a href="index.php"><img src="img/logo.png" /></a></td>
      <td><p class='font_header'>Bienvenido a CaralCarro!</p></td>
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
