<?php
class UserController extends ControladorBase
{
    public function __construct() {
        parent::__construct();
    }

	public function index()
    {
        $this->view(
            "index.php"
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
            "user/logout.php"
        );
    }

    public function alquiler()
    {
        $this->view(
            "vehiculos/all_alquiler.php"
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

    public function register()
    {
        $formErrors = [];

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
                    $dao = new DaoUsuario();
                    $user = $dao->searchUsuarioByName($user_name);

                    if (!$user) {
                        $id = $dao->insertUsuario($user_name, $apellido, $email, $password, $telefono, $descripcion);

                        if($id){
                            $_SESSION["login"] = true;
                            $_SESSION["user_id"] = $id;
                            $this->redirect("Site", "index");
                        }
                        else {
                            echo "<script type='text/javascript'>alert('Registro incorrecto!')</script>";
                        }
                    }
                    else { 
                         echo "<script type='text/javascript'>alert('El Usuario ya Existe, Intentelo otra vez!')</script>";
                    }
                }
                else  echo "<script type='text/javascript'>alert('Conseña incorrecta')</script>";

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
