<?php
class AlquilerController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function index()
	{

		$result =DaoRentCar::getInstance()->getAllRentCarAvaliable();

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

        $result =DaoRent::getInstance()->getAll();

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
            return $this->goBack();

        $user_id = $this->helper()->getLoggedUser()['id'];

        if (isset($_POST["vehiculo_id"])) 
        {
            $vehiculo_id = htmlspecialchars(trim(strip_tags($_POST["vehiculo_id"])));

            if (!empty($vehiculo_id)) {
                $id = DaoRent::getInstance()->insertAlquiler($vehiculo_id, $user_id);
            } 
        }

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
                $id = DaoPrestamo::getInstance()->devolverPrestamo($alquiler_id);
            } 
        }

        $this->goBack();
    }

	public function fichaVehiculo(){
		if(!$this->helper()->isUserLogged() || !isset($_GET['id']))
            return $this->redirect("alquiler", "index");
            
		$id = urldecode($_GET['id']);

		$car = DaoRentCar::getInstance()->getById($id);

		$this->view(
			"alquiler/view.php",
			[
				 'coche' => $car,
			]
		);
	}
}

?>
