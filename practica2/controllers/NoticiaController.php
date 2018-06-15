<?php
class NoticiaController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

    public function index(){
        $noticias = DaoNoticia::getInstance()->getAll();
        $this->view(
            "noticia/index.php",
            [
                'noticias'   => $noticias
            ]
        );
    }

	public function fichaNoticia(){
        $id = urldecode($_GET['id']);
        $noticia = DaoNoticia::getInstance()->getById($id);

		$this->view(
			"noticia/ficha_noticia.php",
			[
                 'noticia' => $noticia,
			]
		);
	}

    public function CrearNoticia(){
        $formErrors = [];

        if(!$this->helper()->isAdmin())
            return $this->redirect("Site", "login");

        // $_SESSION["login"] = false;
				$fecha_n = date("Y-m-d H:i:s");

				  // if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["fecha"]) && isset($_POST["cuerpo_noticia"])) {

        if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["cuerpo_noticia"])) {

            $titulo_n = htmlspecialchars(trim(strip_tags($_POST["titulo"])));
            $autor_n = htmlspecialchars(trim(strip_tags($_POST["autor"])));
            $cuerpo_n = htmlspecialchars(trim(strip_tags($_POST["cuerpo_noticia"])));
            $list_img_n = htmlspecialchars(trim(strip_tags($_POST["list_img"])));

            if (!empty($titulo_n) && !empty($autor_n) && !empty($fecha_n) && !empty($cuerpo_n)) {
                //se crear el dao
                $autorCorrecto = DaoNoticia::getInstance()->compruebaAutor($autor_n);
                $autorCorrecto_n=$autorCorrecto["username"];

                if ($autorCorrecto_n == $autor_n){
                    $result = DaoNoticia::getInstance()->insertNoticia($titulo_n, $autor_n, $fecha_n, $cuerpo_n, $list_img_n);
                    $mensaje = '';
                }
                else{
                    $result = null;
                    $mensaje = 'El autor debe ser un usuario administrador';
                }
                var_dump($result);
                if ($result == null){
                    echo "<script type='text/javascript'>alert('Algún campo es incorrcto. ' + '$mensaje')</script>";
                }
                else {
                	echo "<script type='text/javascript'>alert('La noticia se creo correctamente!')</script>";
                    $this->redirect("Site", "noticias");
                }
            }
            else
            {
                $formErrors[] = 'Problemas formulario';
            }

        }

        $this->view(
            "noticia/crearNoticia.php",
            [
                'formErrors' => $formErrors,
            ]
        );
    }
}
?>
