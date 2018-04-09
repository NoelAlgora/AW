<?php
class Usuario
{
  private $usuario_id;
  private $nombre;
  private $password;
  private $email;

  public function __construct($nom,$email,$con){
    $this->nombre = $nom;
    $this->email = $email;
    $this->password = $con;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setUsuario_id($id){
    $this->$usuario_id = $id;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getUsuario_id(){
    return $this->$usuario_id;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function getPassword(){
    return $this->password;
  }
}
 ?>
