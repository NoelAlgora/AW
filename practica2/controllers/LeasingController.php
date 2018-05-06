<?php
class LeasingController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function index(){
		$result = DaoLeasingCar::getInstance()->getAllLeasingCarAvaliable();

			// var_dump($result);
		$this->view(
				"leasing/index.php",
				[
					'result' => $result,
				]
			);
		}


	public function fichaVehiculo(){

		$idCoche = urldecode($_GET['id']);

		$car = DaoLeasingCar::getInstance()->getById($idCoche);

		$this->view(
			"leasing/view.php",
			[
				 'coche' => $car,
			]
		);
	}


}
?>
