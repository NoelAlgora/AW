<header>
  <h4>Cabecera con logo y cositas</h4>
  <div class="saludo">
    <?php if ( $helper->isUserLogged() ): ?>
      <p>Usuario: <?= $helper->getLoggedUser()['username']  ?></p>
      <p><a href="<?= $helper->url('user','logout')?>">Log out</a></p>
    <?php else: ?>
      <p>Usuario desconocido</p>
      <p><a href="<?=$helper->url('user','login')?>">Login</a></p>
    <?php endif;?>
  </div>
</header>
