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
		$this->view(
			"site/fichavehiculo.php",
			[
				// 'result' => $result,
			]
		);
	}


}

?>
