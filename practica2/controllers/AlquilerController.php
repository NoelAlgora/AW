<?php
class AlquilerController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function rentCarView()
	{

		$result =DaoRentCar::getInstance()->getAllRentCarAvaliable();

		// var_dump($result);
		$this->view(
			"site/rentCarView.php",
			[
				'result' => $result,
			]
		);
	}


	public function fichaVehiculo(){
		$idCoche = urldecode($_GET['id']);

		$car = DaoRentCar::getInstance()->getById($idCoche);

		$this->view(
			"site/fichavehiculo.php",
			[
				 'coche' => $car,
			]
		);
	}


}

?>
