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

        $this->view(
            "user/logout.php"
        );
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
                $user = DaoUsuario::getInstance()->searchUsuarioByNamePass($user_name,$user_password);
                if ($user == null){
                    $formErrors[] = "Usuario o contraseña incorrectos!";
                }
                else {
                    $_SESSION["login"] = true;
                    $_SESSION["user_id"] =  $user['id'];

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
                'user_name' => $user_name,
                'user_password' => $user_password,
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

            if (!empty($user_name) && !empty($password) && !empty($email) && !empty($telefono) && !empty($apellido) ) {
                if($repassword == $password)
                {
                    $user = DaoUsuario::getInstance()->searchUsuarioByName($user_name);

                    if (!$user) {
                        $id = $dao->insertUsuario($user_name, $apellido, $email, $password, $telefono, $descripcion);

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
}
?>
