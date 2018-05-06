<?php
class Ayuda{

    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO,$id=0){
        $urlString="index.php?controller=".$controlador."&action=".$accion."&id=".$id;
        return $urlString;
    }

    public function isUserLogged(){
    	return isset($_SESSION["login"]) && $_SESSION["login"] && isset($_SESSION["user_id"]);
    }

    public function isAdmin(){
        return $this->isUserLogged() && $this->getLoggedUser()['user_type'] == 1;
    }

    public function getLoggedUser(){

    	if(isset($_SESSION["login"]) && $_SESSION["login"] && isset($_SESSION["user_id"]))
    	{
    		return DaoUsuario::getInstance()->getById($_SESSION["user_id"]);
    	}
    	else
    		return null;
    }

	public function getCarListImage($img_name){
			if(empty($img_name)){
					$path = "carvisuals/270x180/not_found.png";
			}
			else {	$path = "carvisuals/270x180/" . $img_name;}
			return "<img src=".$path." alt=".$img_name." />";
	}
}
?>
