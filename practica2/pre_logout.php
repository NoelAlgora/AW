<?php $pageTitle = "Log Out"; ?>
<?php
  session_start();
  session_unset();
  session_destroy();
?>
<?php require('layout/header.php'); ?>
<h4>Log out</h4>

<p>Hasta pronto!</p>
<?php require('layout/footer.php'); ?>
