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


        if (isset($_POST["username"]) && isset($_POST["password"])) {

            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));

            if (!empty($user_name) && !empty($user_password)) {
                //se crear el dao
                $dao = new DaoUsuario();
                $result = $dao->searchUsuarioByNamePass($user_name,$user_password);
                var_dump($result);
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

        if (isset($_POST["username"]) && isset($_POST["password"])  && isset($_POST["email"])) {
            $user_name = htmlspecialchars(trim(strip_tags($_POST["username"])));
            $user_password = htmlspecialchars(trim(strip_tags($_POST["password"])));
            $email = htmlspecialchars(trim(strip_tags($_POST["email"])));

            if (!empty($user_name) && !empty($user_password) && !empty($email)) {
                $dao = new DaoUsuario();
                $user = $dao->searchUsuarioByName($user_name);

                if (!$user) {
                    $id = $dao->insertUsuario($user_name,$email,$user_password);

                    if($id){
                        $_SESSION["login"] = true;
                        $_SESSION["user_id"] = $id;
                        $this->redirect("Site", "index");
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