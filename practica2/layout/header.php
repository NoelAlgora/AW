<header>
  <h4>Cabecera con logo y cositas</h4>
  <div class="saludo">
    <?php
      if (isset($_SESSION["login"])){
        echo "<p>Usuario: " . $_SESSION["nombre"] ."</p>";
        echo "<p><a href='pre_logout.php'>Log out</a></p>";
      }
      else {
        echo "<p>Usuario desconocido</p>";
        echo "<p><a href='pre_login.php'>Login</a></p>";
      }
    ?>
  </div>
</header>
