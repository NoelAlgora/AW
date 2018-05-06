<?php
class LeasingController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function leasingCarView(){

		$dao = new DaoLeasingCar();
		$result = $dao->getAllLeasingCarAvaliable();

			// var_dump($result);
		$this->view(
				"site/leasingCarView.php",
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
