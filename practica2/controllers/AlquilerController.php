<?php
class AlquilerController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
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


	public function fichaVehiculo(){

				$idCoche = urldecode($_GET['id']);

				$dao = new DaoRentCar();
				$car = $dao->getById($idCoche);

				$this->view(
					"site/fichavehiculo.php",
					[
						 'coche' => $car,
					]
				);
			}


}

?>
