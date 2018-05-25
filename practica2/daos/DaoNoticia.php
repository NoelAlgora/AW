<?php
class DaoNoticia extends DaoBase
{
    private static $instance;

	public function __construct() {
		parent::__construct("noticia");
	}

	public static function getInstance()
	{
		if (is_null( self::$instance ) )
		{
		self::$instance = new self();
		}
		return self::$instance;
	}

	//Inserta una noticia en la base de datos y nos devuelve 0 si hay error
	public function insertNoticia($titulo_n, $autor_n, $fecha_n, $cuerpo_n, $list_img_n){
		$result = DataSource::getInstance()->setData("INSERT INTO $this->table (titulo, autor, fecha, cuerpo_noticia, list_img) VALUES (:titulo, :autor, :fecha, :cuerpo_noticia, :list_img)",
		array(':titulo'=>$titulo_n,':autor'=>$autor_n,':fecha'=>$fecha_n,':cuerpo_noticia'=>$cuerpo_n,':list_img'=>$list_img_n));
		//llega la id o 0 si error, no devolvemos TO
		return $result;
	}
}
?>
