<?php
class ControladorBase{

    private $helper;

    public function __construct() {
        require_once 'EntidadBase.php';
        require_once 'core/Ayuda.php';
        $this->helper=new Ayuda();
        //require_once 'ModeloBase.php';

        //Incluir todos los modelos
        foreach(glob("models/*.php") as $file){
            require_once $file;
        }

        session_start();
    }

    //Plugins y funcionalidades

/*
* Este método lo que hace es recibir los datos del controlador en forma de array
* los recorre y crea una variable dinámica con el indice asociativo y le da el
* valor que contiene dicha posición del array, luego carga los helpers para las
* vistas y carga la vista que le llega como parámetro. En resumen un método para
* renderizar vistas.
*/
    public function view($vista,$datos = []){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }

        $helper=new Ayuda();
        require_once 'views/'.$vista;
    }

    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

    public function helper()
    {
        return $this->helper;
    }
}
?>
