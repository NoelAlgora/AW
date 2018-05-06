<?php
class SiteController extends ControladorBase
{

    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $this->view(
            "site/index.php",
            []
        );
    }

}
?>
