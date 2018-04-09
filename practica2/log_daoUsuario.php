<?php
require('log_IUsuario.php');
require('dat_source.php');
require('log_usuario.php');

//No se si por cada metodo una conexion , o una conexion por DAO -> factory + dao??

//se podria utilizar bindparams PDO
class DAOusuario implements IUsuario
{

  //Nos trae un registro que buscamos nombre y contraseña
  public function searchUsuarioByNamePass($name,$pass){
    $data_source = new DataSource();
    // echo "naaaame $name";
    // echo "passss $pass";
    $result = $data_source->getData("SELECT username, password FROM usuario WHERE username = :nombre AND password = :password",
      array(':nombre'=>$name,':password'=>$pass));
    $user = null;

    //como podemos devolver el resultado?:
    //implementado:
    //Si es correcto, entonces result != 0
    if ($result){
      $user = new Usuario($result['nombre'],$result['password']);
    }
    return $user;

  }

  /*Busca usuario por nombre, si existe devuelve $result con el id, sino es un false.
  Util para unicamente comprobar si existe un usuari con el mismo nombre al register???*/
  public function searchUsuarioByName($nombre) {
    $data_source = new DataSource();
    $result = $data_source->getData("SELECT id FROM usuario WHERE username = :nombre",
      array(':nombre'=>$nombre));

    return $result;
    //Podriamos devolver un TO pero no es necesario para el uso que se da
  }

  //Inserta el Usuario en la base de datos y nos devuelve la id o 0 si error
  public function insertUsuario(Usuario $usuario){
      $data_source = new DataSource();
      $result = $data_source->setData("INSERT INTO usuario (username, email, password) VALUES (:nombre,:email,:password)",
        array(':nombre'=>$usuario->getNombre(),':email'=>$usuario->getEmail(),':password'=>$usuario->getPassword())); 
      //llega la id o 0 si error, no devolvemos TO
      return $result;
  }

}
?>
