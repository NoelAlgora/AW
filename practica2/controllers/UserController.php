<?php
class UserController extends ControladorBase
{
    public function __construct() {
        parent::__construct();
    }

	public function index()
    {
        return $this->redirect("site", "index");
    }

    public function logout()
    {
        if(!$this->helper()->isUserLogged())
            return $this->redirect("site", "index");

        session_unset();
        session_destroy();
        session_start();
        $_SESSION["login"] = false;

        $this->helper()->flash("logout" , "Sesion cerrada con exito!");

        $this->redirect("site", "index");
    }

    public function login()
    {
        $formErrors = [];

        $user_name = "";
        $user_password = "";

        if($this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));

            if (!empty($user_name) && !empty($user_password)) {
                //se crear el dao
                
                $contra=DaoUsuario::getInstance()->searchUsuarioByPass($user_name);
                $contraCifrada=$contra["password"];

                

                if (!password_verify($user_password,$contraCifrada)){
                    $formErrors[] = "¡Usuario o contraseña incorrecto!";
                }
                else {
                    $user = DaoUsuario::getInstance()->searchUsuarioByNamePass($user_name);
                    $_SESSION["login"] = true;
                    $_SESSION["user_id"] =  $user['id'];

                    $this->redirect("site", "index");
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
                'user_name' => $user_name,
                'user_password' => $user_password,
            ]
        );
    }

	// public function contacto(){
	// 	$this->view(
  //           "site/contacto.php",
  //           [
	//
  //           ]
  //       );
	// }

    public function register()
    {
        $formErrors = [];

        $user_name = "";
        $password = "";
        $repassword = "";
        $email = "";
        $telefono = "";
        $apellido = "";
        $descripcion =  "";

        if($this->helper()->isUserLogged())
            return $this->redirect("Site", "index");

        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["repassword"]) &&
            isset($_POST["email"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]))
        {
            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $password = htmlspecialchars(trim(strip_tags($_POST["password"])));
            $repassword = htmlspecialchars(trim(strip_tags($_POST["repassword"])));
            $email = htmlspecialchars(trim(strip_tags($_POST["email"])));
            $telefono = htmlspecialchars(trim(strip_tags($_POST["telefono"])));
            $apellido = htmlspecialchars(trim(strip_tags($_POST["apellido"])));
            $descripcion =  htmlspecialchars(trim(strip_tags($_POST["descripcion"])));
	    $pass_cifrado=password_hash($password, PASSWORD_DEFAULT);

            if (!empty($user_name) && !empty($password) && !empty($email) && !empty($telefono) && !empty($apellido) ) {
                if($repassword == $password)
                {
                    $user = DaoUsuario::getInstance()->searchUsuarioByName($user_name);

                    if (!$user) {
                        $id = DaoUsuario::getInstance()->insertUsuario($user_name, $apellido, $email, $pass_cifrado, $telefono, $descripcion);

                        if($id){
                            $_SESSION["login"] = true;
                            $_SESSION["user_id"] = $id;
                            $this->redirect("Site", "index");
                        }
                        else {
                            $formErrors[] = "Registro incorrecto!";
                        }
                    }
                    else {
                        $formErrors[] = "El Usuario ya Existe, Intentelo otra vez!";
                    }
                }
                else
                    $formErrors[] = "Las contraseñas no coinciden";
            }
        }

        $this->view(
            "user/register.php",
            [
                'formErrors' => $formErrors,
                'user_name' => $user_name,
                'user_password' => $user_password,
                'repassword' => $repassword,
                'email' => $email,
                'telefono' => $telefono,
                'apellido' => $apellido,
                'descripcion' => $descripcion,
            ]
        );
    }

    public function fichaVehiculoAlquiler(){

        $idCoche = urldecode($_GET['id']);
        $car = DaoRentCar::getInstance()->getById($idCoche);
    
        $this->view(
            "user/view.php",
            [
                'coche' => $car,
            ]
        );
    }



    public function fichaVehiculoLeasing(){

        $idCoche = urldecode($_GET['id']);
        $car = DaoLeasingCar::getInstance()->getById($idCoche);
     
        $this->view(
            "user/view.php",
            [
                'coche' => $car,
            ]
        );
    }

	public function perfil(){
		if(!$this->helper()->isUserLogged())
			return $this->redirect("user", "login");

        $user = $this->helper()->getLoggedUser();

		$RentCars = DaoRent::getInstance()->rentalCarsOfTheUser($user['id']);
		$LeasingCars = DaoLeasing::getInstance()->leasingCarsOfTheUser($user['id']);
		$ownedCarsRent = DaoRentCar::getInstance()->userOwnedCars($user['id']);
		$ownedCarsLeasing = DaoLeasingCar::getInstance()->userOwnedCars($user['id']);

		$ownedCars = array_merge($ownedCarsRent,$ownedCarsLeasing);

        $this->view(
            "user/perfil.php",
            [
                'user' => $user,

				'rentCars' => $RentCars,
				'leasingCars' => $LeasingCars,
				'ownedCarsToAlquiler' => $ownedCarsRent,
				'ownedCarsToLeasing' => $ownedCarsLeasing,
            ]
        );
    }


    public function cambiarDatos() {
        $formErrors = [];

        if(!$this->helper()->isUserLogged())
            return $this->redirect("user", "login");

        $init_user = $this->helper()->getLoggedUser();

        $username = $init_user['username'];
        $password = "";
        $repassword = "";
        $email = $init_user['email'];
        $telefono = $init_user['telefono'];
        $apellido = $init_user['apellido'];
        $descripcion =  $init_user['descripcion'];

        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["repassword"]) &&
            isset($_POST["email"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]))
        {
            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $password = htmlspecialchars(trim(strip_tags($_POST["password"])));
            $repassword = htmlspecialchars(trim(strip_tags($_POST["repassword"])));
            $email = htmlspecialchars(trim(strip_tags($_POST["email"])));
            $telefono = htmlspecialchars(trim(strip_tags($_POST["telefono"])));
            $apellido = htmlspecialchars(trim(strip_tags($_POST["apellido"])));
            $descripcion =  htmlspecialchars(trim(strip_tags($_POST["descripcion"])));
            $pass_cifrado=password_hash($password, PASSWORD_DEFAULT);

            if (!empty($user_name) && !empty($password) && !empty($email) && !empty($telefono) && !empty($apellido) ) {
                if($repassword == $password)
                {
                    $user = DaoUsuario::getInstance()->searchUsuarioByName($user_name);

                    if (!$user) {
                        $id = DaoUsuario::getInstance()->insertUsuario($user_name, $apellido, $email, $pass_cifrado, $telefono, $descripcion);

                        if($id){
                            $_SESSION["login"] = true;
                            $_SESSION["user_id"] = $id;
                            $this->redirect("Site", "index");
                        }
                        else {
                            $formErrors[] = "Registro incorrecto!";
                        }
                    }
                    else {
                        $formErrors[] = "El Usuario ya Existe, Intentelo otra vez!";
                    }
                }
                else
                    $formErrors[] = "Las contraseñas no coinciden";
            }
        }

        $this->view(
            "user/cambiardatos.php",
            [   
                'formErrors' => $formErrors,
                'username' => $username,
                'password' => $password,
                'repassword' => $repassword,
                'email' => $email,
                'telefono' => $telefono,
                'apellido' => $apellido,
                'descripcion' => $descripcion,
            ]
        );
    }
}


?>
