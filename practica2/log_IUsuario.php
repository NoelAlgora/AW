<?php
interface IUsuario
{
  //Nos trae un registro que buscamos por nombre y contraseña
  public function searchUsuarioByNamePass($name,$pass);
  //Busca usuario por su nombre y si existe devulve su id
  public function searchUsuarioByName($nombre);
  //Inserta el Usuario en la base de datos y nos devuelve la id
  public function insertUsuario(Usuario $usuario);
}

 ?>
