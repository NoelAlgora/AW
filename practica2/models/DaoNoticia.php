<?php
class DaoNoticia extends EntidadBase{
  // private $id;
  private $titulo;
  private $autor;
  private $fecha;
  private $cuerpo_n;

  public function __construct() {
        $table = "noticia";
        parent::__construct($table);
    }

  public function getTitulo(){
    return $this->titulo;
  }

  public function getAutor(){
    return $this->autor;
  }

  public function getFecha(){
    return $this->fecha;
  }

  public function getCuerpoNoticia(){
    return $this->cuerpo_n;
  }

  //Inserta una noticia en la base de datos y nos devuelve 0 si hay error
  public function insertNoticia($titulo_n, $autor_n, $fecha_n, $cuerpo_n){
    $result = $this->dataSource->setData("INSERT INTO noticia (titulo, autor, fecha, cuerpo_noticia) VALUES (:titulo, :autor, :fecha, :cuerpo_noticia)",
    array(':titulo'=>$titulo_n,':autor'=>$autor_n,':fecha'=>$fecha_n,':cuerpo_noticia'=>$cuerpo_n));
    //llega la id o 0 si error, no devolvemos TO
    return $result;
  }

  public function getAllNoticia(){
    return $this->dataSource->getAllData("SELECT * FROM $this->table  WHERE id_noticia IS NULL ORDER BY id DESC", array());
  }

  public function fichaNoticia($id){
    return $this->dataSource->getAllData("SELECT * FROM $this->table  WHERE id_noticia = :id", array(':id' => $id));
  }

}

?>
