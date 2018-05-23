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

	public function carFilter(){
		DaoLeasingCar::getInstance()->carsDateFilter();
		
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
		$alquileres = DaoLeasing::getInstance()->leasingOfCar($idCoche);
		$alquiler_str = '';

		foreach ($alquileres as $key => $alquiler) {
			$alquiler_str .= $alquiler["fecha_inicio"].';'.$alquiler["fecha_fin"].';';
		}

		$this->view(
			"leasing/view.php",
			[
				'coche' => $car,
				'alquiler_str' => $alquiler_str,
			]
		);
	}

	public function filter(){


		//se pueden añadir facilmente filtros de cualquier tipo
		if(isset($_POST["aplicar"])){

			$filter = array();
		
			//Como estamos utilizando PDO con prepared statements, no es necesario sanizitar la entrada, en el DAO y DataSource la entrada sera sanitizada automaticamente
			//es un array no podemos hacer -> htmlspecialchars(trim(strip_tags(...)));
			if (isset($_POST["combustible"])){
				$combustible = array ("combustible" => $_POST["combustible"]);
				if(!empty($combustible)){
					$filter = array_merge($combustible,$filter);
				}
			}

			if (isset($_POST["color"])) {
				$color = array ("color" => $_POST["color"]);
				if(!empty($color)){
					$filter = array_merge($color,$filter);
				}
			}
			if (isset($_POST["marca"])) {
				$marca = array ("marca" => $_POST["marca"]);
				if(!empty($marca)){
					$filter = array_merge($marca,$filter);
				}
			}

			if (isset($_POST["cambio"])){
				$cambio = array ("cambio" => $_POST["cambio"]);
				if(!empty($cambio)){
					$filter = array_merge($cambio,$filter);
				}
			}
			if (!empty($filter)) {
				$result = DaoLeasingCar::getInstance()->carFilter($filter);
			}
			else {
				$result = DaoLeasingCar::getInstance()->getAllLeasingCarAvaliable();
			}
		}
		else {
			$result = DaoLeasingCar::getInstance()->getAllLeasingCarAvaliable();
		}

		$this->view(
			"leasing/index.php",
			[
				'result' => $result,
			]
		);
	}


}
?>
