<?php
class UserController extends ControladorBase
{
    public function __construct() {
        parent::__construct();
    }

	public function index()
    {
        $this->view(
            "index.php",
            []
        );
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

		//accede dos veces , una cuando se accede a la pagina de login con el link, y otra cuando
		//se reciben los parametros del login del formulario

        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));

            if (!empty($user_name) && !empty($user_password)) {
                //se crear el dao
                $dao = new DaoUsuario();
                $result = $dao->searchUsuarioByNamePass($user_name,$user_password);
                // var_dump($result);
                if ($result == null){
                    $formErrors[] = "Login incorrecto";
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
						$formErrors[] = 'Registro correcto';
                        // $this->redirect("Site", "index");
                    }
                    else {
                        $formErrors[] = 'Registro incorrecto';
                    }
                }
                else {
                    $formErrors[] = 'Existe un usuario ya';
                }
            }
            else
            {
                $formErrors[] = 'Campos vacios';
            }
        }
        $this->view(
            "user/register.php",
            [
                'formErrors' => $formErrors,
            ]
        );
    }
}
?>
