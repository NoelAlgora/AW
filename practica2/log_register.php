<?php
require('log_daoUsuario.php');

$user_name = htmlspecialchars(trim(strip_tags($_REQUEST["username"])));
$user_password = htmlspecialchars(trim(strip_tags($_REQUEST["password"])));
$email = htmlspecialchars(trim(strip_tags($_REQUEST["email"])));

if (!isset($user_name) || empty($user_name) || !isset($user_password) || empty($user_password) || !isset($email) || empty($email)) {
	 echo "Problemas formulario";
}
else {
  //se crear el dao
  $dao = new DAOusuario();

  //para comprobar si existe otro usuario
  $user = $dao->searchUsuarioByName($user_name);

  if (!$user) {
    //no existe un usuario con ese nombre, por lo que habra que crear el usuario y meterlo en la base de datos.
    $id = $dao->insertUsuario($user_name,$email,$user_password);

    if($id){
      echo "Registro correcto";
			//notificar login correcto
    }
    else {
      echo "Registro incorrecto";
			//notificar login incorrecto
    }

  }
  else {
    // notificar que existe un usuario con ese nombre y solicitar otro
    echo "Existe un usuario ya";
  }
}


?>
