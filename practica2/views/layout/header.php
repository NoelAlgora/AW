<header>
  <div class="saludo">
    <a href="index.php"><img class="logo_header" img="logo.png" /></a>
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
