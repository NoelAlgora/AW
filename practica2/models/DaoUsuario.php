<?php
class DaoUsuario extends EntidadBase
{
    public function __construct() {
        $table="usuario";
        parent::__construct($table);
    }

  //Nos trae un registro que buscamos nombre y contraseña
  public function searchUsuarioByNamePass($name,$pass){
    return $this->dataSource->getData("SELECT * FROM $this->table WHERE username = :nombre AND password = :password",
      array(':nombre'=>$name,':password'=>$pass));
  }

  /*Busca usuario por nombre, si existe devuelve $result con el id, sino es un false.
  Util para unicamente comprobar si existe un usuari con el mismo nombre al register???*/
  public function searchUsuarioByName($nombre) {
    $result = $this->dataSource->getData("SELECT id FROM usuario WHERE username = :nombre",
      array(':nombre'=>$nombre));

    return $result;
  }

  //Inserta el Usuario en la base de datos y nos devuelve la id o 0 si error
  public function insertUsuario($user_name,$email,$user_password){
      $result = $this->dataSource->setData("INSERT INTO usuario (username, email, password) VALUES (:nombre,:email,:password)",
        array(':nombre'=>$user_name,':email'=>$email,':password'=>$user_password));
      //llega la id o 0 si error, no devolvemos TO
      return $result;
  }

}
?>
