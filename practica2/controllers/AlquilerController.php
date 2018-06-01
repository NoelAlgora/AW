<?php
class AlquilerController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

    public function dateCarFilter(){

        if (isset($_POST["inicio"]) && isset($_POST["fin"]))
        {
            $fecha_recogida = htmlspecialchars(trim(strip_tags($_POST["inicio"])));
            $fecha_devolucion = htmlspecialchars(trim(strip_tags($_POST["fin"])));


            if (!empty($fecha_recogida) && !empty($fecha_devolucion)) {
                
                $result = DaoRentCar::getInstance()->carsDateFilter($fecha_recogida,$fecha_devolucion);

                }   
            else {
            $result = DaoRentCar::getInstance()->getAllRentCarAvaliable();
        }

                
        }
        else {
            $result = DaoRentCar::getInstance()->getAllRentCarAvaliable();
        }

        $this->view(
            "alquiler/index.php",
            [
                'result' => $result,
            ]
        );

        
        
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

        $idCoche = urldecode($_GET['id']);

        $car = DaoRentCar::getInstance()->getById($idCoche);
        $alquileres = DaoRent::getInstance()->RentingOfCar($idCoche);
        $alquiler_str = '';

        foreach ($alquileres as $key => $alquiler) {
            $alquiler_str .= $alquiler["fecha_inicio"].';'.$alquiler["fecha_fin"].';';
        }

        $this->view(
            "alquiler/view.php",
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
                $result = DaoRentCar::getInstance()->carFilter($filter);
            }
            else {
                $result = DaoRentCar::getInstance()->getAllRentCarAvaliable();
            }
        }
        else {
            $result = DaoRentCar::getInstance()->getAllRentCarAvaliable();
        }

        $this->view(
            "alquiler/index.php",
            [
                'result' => $result,
            ]
        );
    }


	public function crear_vehiculo()
	{
		$formValues = [ "matricula" => "", "marca" => "","modelo" => "", "motor" => "",
						"cambio" => "", "color" => "", "combustible" => "", "descripcion" => "", "precio_dia" => 0];
        $formErrors = [];

        if(!$this->helper()->isUserLogged())
            return $this->redirect("Site", "index");


        if (isset($_POST["matricula"]) && isset($_POST["marca"]) && isset($_POST["modelo"])
        	&& isset($_POST["motor"]) && isset($_POST["cambio"]) && isset($_POST["color"])
        	&& isset($_POST["combustible"]) && isset($_POST["descripcion"]) && isset($_POST["precio_dia"]))
        {
            $formValues['matricula'] = htmlspecialchars(trim(strip_tags($_POST["matricula"])));
            $formValues["marca"] = htmlspecialchars(trim(strip_tags($_POST["marca"])));
            $formValues["modelo"] = htmlspecialchars(trim(strip_tags($_POST["modelo"])));
            $formValues["motor"] = htmlspecialchars(trim(strip_tags($_POST["motor"])));
            $formValues["cambio"] = htmlspecialchars(trim(strip_tags($_POST["cambio"])));
            $formValues["color"] = htmlspecialchars(trim(strip_tags($_POST["color"])));
            $formValues["combustible"] = htmlspecialchars(trim(strip_tags($_POST["combustible"])));
            $formValues["descripcion"] = htmlspecialchars(trim(strip_tags($_POST["descripcion"])));
            $formValues["precio_dia"] = htmlspecialchars(trim(strip_tags($_POST["precio_dia"])));

        	foreach ($formValues as $clave => $valor)
            {
        		if(empty($valor))
        		{
    				$formErrors[] = "El campo ".$clave." no puede estar vacio";
        		}
            }

            if(!isset($_FILES['list_img']))
                $formErrors[] = "Debes subir una imagen";
            else
                if(in_array(strtolower(end(explode('.',$_FILES['list_img']['name']))),array("jpeg","jpg","png"))=== false)
                    $formErrors[]="Extension not allowed, please choose a JPEG or PNG file.";

            foreach ($_FILES['images_carousel']['name'] as $filename) 
                if($filename != '' && in_array(strtolower(end(explode('.',$filename))),array("jpeg","jpg","png"))=== false)
                    $formErrors[]="Extension not allowed, please choose a JPEG or PNG file.";

            if(empty($formErrors))
            {
                $coche = DaoRentCar::getInstance()->getBy("matricula", $formValues["matricula"]);

                if (!$coche) {

                    $list_img = uniqid() . "." . strtolower(end(explode('.',$_FILES['list_img']['name'])));

                    $id = DaoRentCar::getInstance()->insertVehiculo($formValues["matricula"], $formValues["marca"], $formValues["modelo"],
                    												$formValues["motor"],$formValues["cambio"], $formValues["color"],
                    												$formValues["combustible"], $list_img, $formValues["descripcion"], $formValues["precio_dia"]);

                    if($id){
                        $uploadFolder = 'uploads/alquiler/'.$id.'/';
                        if (!is_dir($uploadFolder))
                            mkdir($uploadFolder);

                        foreach ($_FILES['images_carousel']['name'] as $index => $filename)
                            if($filename != '')
                                move_uploaded_file($_FILES['images_carousel']['tmp_name'][$index], $uploadFolder.uniqid().".".strtolower(end(explode('.',$filename))));

                        move_uploaded_file($_FILES['list_img']['tmp_name'],$uploadFolder.$list_img);

                        $this->redirect("alquiler", "fichaVehiculo", $id);
                    }
                    else {
                        $formErrors[] = "Error al insertar en la base de datos!";
                    }
                }
                else {
                    $formErrors[] = "Ya existe un coche con esa matricula!";
                }
            }
        }

        $this->view(
            "alquiler/crear_vehiculo.php",
            [
                'formErrors' => $formErrors,
                'formValues' => $formValues,
            ]
        );
	}
}

?>
