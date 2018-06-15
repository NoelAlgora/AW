<?php
class SiteController extends ControladorBase
{

    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->view("site/index.php");
    }

    public function contact()
    {
        $this->view("site/contacto.php");
    }
    
    public function politica()
    {
        $this->view("site/politica.php");
    }

    public function reservar()
    {
        $this->view("site/reservar.php");
    }

    public function info_caralcarro()
    {
        $this->view("site/info_caralcarro.php");
    }

    public function condiciones()
    {
        $this->view("site/condiciones.php");
    }
    
}
?>
