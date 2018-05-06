<?php
class Ayuda{

    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }

    public function isUserLogged(){
    	return isset($_SESSION["login"]) && $_SESSION["login"];
    }

    public function getLoggedUser(){
    	if(isset($_SESSION["login"]) && $_SESSION["login"] && isset($_SESSION["user_id"]))
    	{
    		$dao = new DaoUsuario;

    		return $dao->getById($_SESSION["user_id"]);
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
