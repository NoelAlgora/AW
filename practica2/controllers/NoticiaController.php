<?php
class NoticiaController extends ControladorBase{

	public function __construct() {
    	parent::__construct();
	}

	public function fichaNoticia(){
		$this->view(
			"site/ficha_noticia.php",
			[
				// 'result' => $result
			]
		);
	}

	public function noticias(){

		//
		// aqui lo que estas haciendo es decir que la vista que quieres es noticias.php ,
		// y en esa vista estas conectandote a la base de datos.
		//
		// lo que tendria que ser es que aqui se llamase a la base de datos y se pasaran a las VISTA
		// las noticias que tienen que mostrar. fijate en otras vistas como se pillan los datos devueltos

		//en vez de tomar todo el cuerpo de la noticia, puedes tomar solo el titulo, y lluego en la vista dar la opcion de ver la ficha completa

		$this->view(
			"site/noticias.php",
			[
				// 'result' => $result ->> donde tienes que tener los datos que seran devueltos
			]
		);
	}

	// public function index()
  //   {
  //       $this->view(
  //           "noticia/publicar_noticia.php",
  //           []
  //       );
  //   }

    public function CrearNoticia(){
        $formErrors = [];

        if(!$this->helper()->isUserLogged())
            return $this->redirect("Site", "login");

        // $_SESSION["login"] = false;
				$fecha_n = date("Y-m-d H:i:s");

				  // if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["fecha"]) && isset($_POST["cuerpo_noticia"])) {

        if (isset($_POST["titulo"]) && isset($_POST["autor"]) && isset($_POST["cuerpo_noticia"])) {

            $titulo_n = htmlspecialchars(trim(strip_tags($_POST["titulo"])));
            $autor_n = htmlspecialchars(trim(strip_tags($_POST["autor"])));
            // $fecha_n = htmlspecialchars(trim(strip_tags($_POST["fecha"])));
            $cuerpo_n = htmlspecialchars(trim(strip_tags($_POST["cuerpo_noticia"])));

            if (!empty($titulo_n) && !empty($autor_n) && !empty($fecha_n) && !empty($cuerpo_n)) {
                //se crear el dao
                $dao = new DaoNoticia();
                $result = $dao->insertNoticia($titulo_n, $autor_n, $fecha_n, $cuerpo_n);

                var_dump($result);
                if ($result == null){
                    echo "<script type='text/javascript'>alert('Algún campo incorrecto de la noticia!')</script>";
                }
                else {
                    //$_SESSION["login"] = true;
                    //$_SESSION["user_id"] = $result['id'];
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
