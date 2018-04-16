<header>
  <h4>Cabecera con logo y cositas</h4>
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
</header>
