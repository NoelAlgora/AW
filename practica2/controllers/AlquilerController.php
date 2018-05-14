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

	public function crear_vehiculo()
	{
		$error = false;

		$formErrors = [];
		/*$formErrors = [ "matricula" => "", "marca" => "","modelo" => "", "motor" => "",
						"cambio" => "", "color" => "", "combustible" => "", "descripcion" => "", "precio_dia" => ""];*/

		$formValues = [ "matricula" => "", "marca" => "","modelo" => "", "motor" => "",
						"cambio" => "", "color" => "", "combustible" => "", "descripcion" => "", "precio_dia" => 0];

        if($this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        if (isset($_POST["matricula"]) && isset($_POST["marca"]) && isset($_POST["modelo"]) 
        	&& isset($_POST["motor"]) && isset($_POST["cambio"]) && isset($_POST["color"]) 
        	&& isset($_POST["combustible"]) && isset($_POST["descripcion"]) && isset($_POST["precio_dia"]))
        {
        	$formValues["matricula"] = htmlspecialchars(trim(strip_tags($_POST["matricula"])));
        	$formValues["marca"] = htmlspecialchars(trim(strip_tags($_POST["marca"])));
        	$formValues["modelo"] = htmlspecialchars(trim(strip_tags($_POST["modelo"])));
        	$formValues["motor"] = htmlspecialchars(trim(strip_tags($_POST["motor"])));
        	$formValues["cambio"] = htmlspecialchars(trim(strip_tags($_POST["cambio"])));
        	$formValues["color"] = htmlspecialchars(trim(strip_tags($_POST["color"])));
        	$formValues["combustible"] = htmlspecialchars(trim(strip_tags($_POST["combustible"])));
        	$formValues["descripcion"] = htmlspecialchars(trim(strip_tags($_POST["descripcion"])));
        	$formValues["precio_dia"] = htmlspecialchars(trim(strip_tags($_POST["precio_dia"])));

        	foreach ($formValues as $clave => $valor)
        		if(empty($valor))
        		{
    				$formErrors[$clave] = "El campo no puede estar vacio";
        		}

                $coche = DaoRentCar::getInstance()->getBy("matricula", $formValues["matricula"]);

                if (!$coche) {
                    $id = DaoRentCar::getInstance()->insertVehiculo($formValues["matricula"], $formValues["marca"], $formValues["modelo"],
                    												$formValues["motor"],$formValues["cambio"], $formValues["color"],
                    												$formValues["combustible"], $formValues["descripcion"], $formValues["precio_dia"]);

                    if($id){
                        $this->redirect("user", "fichaVehiculo", $id);
                    }
                    else {
                        $formErrors["general"] = "Error al insertar en la base de datos!";
                    }
                }
                else {
                    $formErrors["matricula"] = "Ya existe un coche con esa matricula!";
                }
            }
            else
            {
            	$formErrors["general"] = "Errores en el formulario"; //NO SE HA POSTEADO LO QUE NECESITAMOS
            }
        }

        $this->view(
            "user/register.php",
            [
                'formErrors' => $formErrors,
                'formValues' => $formValues,
            ]
        );
	}
}

?>
