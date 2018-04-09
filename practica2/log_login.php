<?php session_start(); ?>
<?php
require('log_daoUsuario.php');

$user_name = $_REQUEST["username"];
$user_password = $_REQUEST["password"];

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password)) {
	 $_SESSION["login"] = false;
	 	echo "Problemas formulario";
}
else {
  //se crear el dao
  $dao = new DAOusuario();

  //Como comprobar las credenciales? comprobar con la query, comparando hash, comparando los param..??

  //Implementado:
  //En el caso de que $user == null, sigfica que no se ha podido obtener ningun usuario/pass correcto..
  $user = $dao->searchUsuarioByNamePass($user_name,$user_password);

  if ($user == null){
    //Notificar no exito
    echo "Login incorrecto";
  }
  else {
    //Notificar exito
		$_SESSION["login"] = true;
		$_SESSION["nombre"] = $user->getNombre();
    echo "Bienvenido " . $_SESSION["nombre"] ;
  }
}


?>
