<?php
class DaoUsuario extends DaoBase
{
    private static $instance;

    public function __construct() {
        parent::__construct("usuario");
    }

    public static function getInstance()
    {
      if (is_null( self::$instance ) )
      {
        self::$instance = new self();
      }
      return self::$instance;
    }

  //Nos trae un registro que buscamos nombre y contraseña
  public function searchUsuarioByNamePass($username,$password){
    return DataSource::getInstance()->getData("SELECT * FROM $this->table WHERE username = :username AND password = :password",
      array(':username'=>$username,':password'=>$password));
  }

  /*Busca usuario por nombre, si existe devuelve $result con el id, sino es un false.
  Util para unicamente comprobar si existe un usuari con el mismo nombre al register???*/
  public function searchUsuarioByName($nombre) {
    $result = DataSource::getInstance()->getData("SELECT id FROM usuario WHERE username = :nombre",
      array(':nombre'=>$nombre));

    return $result;
  }

  //Inserta el Usuario en la base de datos y nos devuelve la id o 0 si error
  public function insertUsuario($user_name,
                                $apellido,$email,
                                $user_password,
                                $telefono,
                                $descripcion){
      $result = DataSource::getInstance()->setData("INSERT INTO usuario (username, apellido, email, password, telefono, descripcion) VALUES (:nombre,:apellido,:email,:password,:telefono,:descripcion)",
        array(':nombre'=>$user_name,':apellido'=>$apellido,':email'=>$email,':password'=>$user_password,':telefono'=>$telefono,':descripcion'=>$descripcion));
      //llega la id o 0 si error, no devolvemos TO
      return $result;
  }
}
?>
