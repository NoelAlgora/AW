<?php
class UserController extends ControladorBase
{
    public function __construct() {
        parent::__construct();
    }

	public function index()
    {
        return $this->redirect("Site", "index");
    }

    public function logout()
    {
        if(!$this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        session_unset();
        session_destroy();
        session_start();
        $_SESSION["login"] = false;

        $this->view(
            "user/logout.php",
            []
        );
    }

    public function login()
    {
        $formErrors = [];

        if($this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        $_SESSION["login"] = false;


        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));

            if (!empty($user_name) && !empty($user_password)) {
                //se crear el dao
                $dao = new DaoUsuario();
                $result = $dao->searchUsuarioByNamePass($user_name,$user_password);
                var_dump($result);
                if ($result == null){
                    echo "<script type='text/javascript'>alert('Usuario o contraseña incorrectos!')</script>";
                }
                else {
                    $_SESSION["login"] = true;
                    $_SESSION["user_id"] = $result['id'];

                    $this->redirect("Site", "index");
                }
            }
            else
            {
                $formErrors[] = 'Problemas formulario';
            }

        }

        $this->view(
            "user/login.php",
            [
                'formErrors' => $formErrors,
            ]
        );
    }

	public function contacto(){
		$this->view(
            "site/contacto.php",
            [

            ]
        );
	}

    public function register()
    {
        $formErrors = [];

        if($this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        if (isset($_POST["username"]) && isset($_POST["password"])  && isset($_POST["email"]) && isset($_POST["apellido"])&&isset($_POST["telefono"])) {
            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));
            $email = htmlspecialchars(trim(strip_tags($_POST["email"])));
            $telefono = htmlspecialchars(trim(strip_tags($_POST["telefono"])));
            $apellido = htmlspecialchars(trim(strip_tags($_POST["apellido"])));
            $descripcion =  htmlspecialchars(trim(strip_tags($_POST["descripcion"])));

            if (!empty($user_name) && !empty($user_password) && !empty($email) && !empty($telefono) && !empty($apellido) ) {
                $dao = new DaoUsuario();
                $user = $dao->searchUsuarioByName($user_name);

                if (!$user) {
                    $id = $dao->insertUsuario($user_name, $apellido, $email, $user_password, $telefono, $descripcion);

                    if($id){
                        $_SESSION["login"] = true;
                        $_SESSION["user_id"] = $id;
                        $this->redirect("Site", "index");
                    }
                    else {
                        echo "<script type='text/javascript'>alert('Registro incorrecto!')</script>";
                    }
                }
                else { echo "<script type='text/javascript'>alert('El Usuario ya Existe, Intentelo otra vez!')</script>";}
            }
        }

        $this->view(
            "user/register.php",
            [
                'formErrors' => $formErrors,
            ]
        );
    }

		public function perfil(){
				if(!$this->helper()->isUserLogged())
							return $this->redirect("user", "login");

			  $user = $this->helper()->getLoggedUser();

				//Coches alquilados
				$dao = new DaoRent();
				$RentCars = $dao->rentalCarsOfTheUser($user['id']);

				//Coches en leasing
				$dao = new DaoLeasing();
				$LeasingCars = $dao->leasingCarsOfTheUser($user['id']);

				//Coches en propiedad
				$dao = new DaoRentCar();
				$ownedCarsToAlquiler = $dao->userOwnedCars($user['id']);
				
				$dao = new DaoLeasingCar();
				$ownedCarsToLeasing = $dao->userOwnedCars($user['id']);
				// var_dump($result);

        $this->view(
            "user/perfil.php",
            [
                'user' => $user,
								'rentCars' => $RentCars,
								'leasingCars' => $LeasingCars,
								'ownedCarsToLeasing' => $ownedCarsToLeasing,
								'ownedCarsToAlquiler' => $ownedCarsToAlquiler,
            ]
        );
    }
}
?>
