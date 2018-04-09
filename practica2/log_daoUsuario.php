<?php
require('dat_source.php');

//se podria utilizar bindparams PDO
class DAOusuario
{

  //Nos trae un registro que buscamos nombre y contraseña
  public function searchUsuarioByNamePass($name,$pass){
    $data_source = DataSource::getInstance();
    $result = $data_source->getData("SELECT username, password FROM usuario WHERE username = :nombre AND password = :password",
      array(':nombre'=>$name,':password'=>$pass));
    return $result;
  }

  /*Busca usuario por nombre, si existe devuelve $result con el id, sino es un false.
  Util para unicamente comprobar si existe un usuari con el mismo nombre al register???*/
  public function searchUsuarioByName($nombre) {
    $data_source = DataSource::getInstance();
    $result = $data_source->getData("SELECT id FROM usuario WHERE username = :nombre",
      array(':nombre'=>$nombre));

    return $result;
  }

  //Inserta el Usuario en la base de datos y nos devuelve la id o 0 si error
  public function insertUsuario($user_name,$email,$user_password){
      $data_source = DataSource::getInstance();
      $result = $data_source->setData("INSERT INTO usuario (username, email, password) VALUES (:nombre,:email,:password)",
        array(':nombre'=>$user_name,':email'=>$email,':password'=>$user_password));
      //llega la id o 0 si error, no devolvemos TO
      return $result;
  }

}
?>
