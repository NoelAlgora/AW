<?php
class AlquilerController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function index()
	{
		$result = DaoRentCar::getInstance()->getAllRentCarAvaliable();

		// var_dump($result);
		$this->view(
			"alquiler/index.php",
			[
				'result' => $result,
			]
		);
	}

	public function admin(){
        if(!$this->helper()->isAdmin())
            return $this->redirect("Site", "login");

        $result = DaoRent::getInstance()->getAll();

		// var_dump($result);
		$this->view(
			"alquiler/admin.php",
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
                $id = DaoRent::getInstance()->insertAlquiler(
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

        if (isset($_POST["alquiler_id"]))
        {
            $alquiler_id = htmlspecialchars(trim(strip_tags($_POST["alquiler_id"])));

            if (!empty($alquiler_id)) {
                $id = DaoRent::getInstance()->deleteById($alquiler_id);
            }
        }

        $this->goBack();
    }

	public function fichaVehiculo(){
		if(!isset($_GET['id']))
        return $this->redirect("alquiler", "index");

		$id = urldecode($_GET['id']);
		$car = DaoRentCar::getInstance()->getById($id);
		//
		// var_dump($car);
		$this->view(
			"alquiler/view.php",
			[
				 'coche' => $car,
			]
		);
	}
}

?>
