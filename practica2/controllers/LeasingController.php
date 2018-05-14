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

		public function alquilar()
	    {
	        $formErrors = [];

	        if(!$this->helper()->isUserLogged())
	          return $this->redirect("user", "login");

	        $user_id = $this->helper()->getLoggedUser()['id'];

	        if (isset($_POST["vehiculo_id"]) && isset($_POST["fecha_recogida"]) && isset($_POST["fecha_devolucion"]))
	        {
	            $vehiculo_id = htmlspecialchars(trim(strip_tags($_POST["vehiculo_id"])));
	            $fecha_recogida = htmlspecialchars(trim(strip_tags($_POST["fecha_recogida"])));
	            $fecha_devolucion = htmlspecialchars(trim(strip_tags($_POST["fecha_devolucion"])));

	            if (!empty($vehiculo_id) && !empty($fecha_recogida) && !empty($fecha_devolucion)) {
	                $id = DaoLeasing::getInstance()->insertAlquiler(
										$vehiculo_id, $fecha_recogida,$fecha_devolucion,$user_id
									);

									//hacer algo cuando se ha podido alquilar
	            }
	        }

					//Si error...
	        $this->goBack();
	    }

	    public function devolver()
	    {
	        if(!$this->helper()->isUserLogged())
	            return $this->goBack();

	        $user_id = $this->helper()->getLoggedUser()['id'];

	        if (isset($_POST["leasing_id"]))
	        {
	            $leasing_id = htmlspecialchars(trim(strip_tags($_POST["leasing_id"])));

	            if (!empty($leasing_id)) {
	                $id = DaoLeasing::getInstance()->deleteById($leasing_id);
	            }
	        }

	        $this->goBack();
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
