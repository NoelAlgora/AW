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


    public function getAlquilerImageUrl($id, $img_name){
        if(empty($img_name)){
            $path = "img/vehiculo_not_found.png";
        }
        else {  
            $path = "uploads/alquiler/".$id."/".$img_name;
        }

        return $path;
    }

    public function getLeasingImageUrl($id, $img_name){
        if(empty($img_name)){
            $path = "img/vehiculo_not_found.png";
        }
        else {  
            $path = "uploads/leasing/".$id."/".$img_name;
        }
        
        return $path;
    }

	public function getImagesOfCarAlquiler($id){
        $path = "uploads/alquiler/".$id."/*";

		$images_jpg = glob($path.".jpg");
        $images_png = glob($path.".png");

		return array_merge($images_jpg,$images_png);
	}

    public function getImagesOfCarLeasing($id){
        $path = "uploads/leasing/".$id."/*";

        $images_jpg = glob($path.".jpg");
        $images_png = glob($path.".png");

        return array_merge($images_jpg,$images_png);
    }

    public function getAlquilerImage($id ,$img_name){
        if(empty($img_name)){
            $path = "img/vehiculo_not_found.png";
        }
        else {
            $path = "uploads/alquiler/".$id."/".$img_name;
        }
        return "<img src=".$path." alt=".$img_name." />";
    }

    public function getLeasingImage($id, $img_name){
        if(empty($img_name)){
            $path = "img/vehiculo_not_found.png";
        }
        else {
            $path = "uploads/alquiler/".$id."/".$img_name;
        }
        return "<img src=".$path." alt=".$img_name." />";
    }
	
	public function getNoticiasListImage($img_name){
            if(empty($img_name)){
                    $path = "newsvisuals/270x180/not_found.png";
            }
            else {  $path = "newsvisuals/270x180/" . $img_name;}
            return "<img src=".$path." alt=".$img_name." />";
        }
	

    /**
     * Function to create and display error and success messages
     * @access public
     * @param string session name
     * @param string message
     * @param string display class
     * @return string message
     */

    function flash( $name = '', $message = '', $class = 'success' )
    {
        //We can only do something if the name isn't empty
        if( !empty( $name ) )
        {
            //No message, create it
            if( !empty( $message ) && empty( $_SESSION[$name] ) )
            {
                if( !empty( $_SESSION[$name] ) )
                {
                    unset( $_SESSION[$name] );
                }
                if( !empty( $_SESSION[$name.'_class'] ) )
                {
                    unset( $_SESSION[$name.'_class'] );
                }

                $_SESSION[$name] = $message;
                $_SESSION[$name.'_class'] = $class;
            }
            //Message exists, display it
            elseif( !empty( $_SESSION[$name] ) && empty( $message ) )
            {
                $class = !empty( $_SESSION[$name.'_class'] ) ? $_SESSION[$name.'_class'] : 'success';
                echo '<div class="msg-flash '.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$name.'_class']);
            }
        }
    }
}
?>
