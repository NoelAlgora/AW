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

	public function rentCarView(){

		$dao = new DaoRentCar();
		$result = $dao->getAllRentCarAvaliable();

		// var_dump($result);
		$this->view(
			"site/rentCarView.php",
			[
				'result' => $result,
			]
		);
	}
}
?>
