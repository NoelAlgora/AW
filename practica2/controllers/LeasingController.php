<?php
class LeasingController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function leasingCarView(){
		$result = DaoLeasingCar::getInstance()->getAllLeasingCarAvaliable();

			// var_dump($result);
		$this->view(
				"site/leasingCarView.php",
				[
					'result' => $result,
				]
			);
		}


	public function fichaVehiculo(){

		$idCoche = urldecode($_GET['id']);

		$car = DaoLeasingCar::getInstance()->getById($idCoche);

		$this->view(
			"site/fichavehiculo.php",
			[
				 'coche' => $car,
			]
		);
	}


}
?>
