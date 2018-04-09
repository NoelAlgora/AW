<?php
class DataSource {

  private static $instancia;
  private $user = "root";
  private $password = "";
  private $dsn = "mysql:host=localhost;dbname=caralcarro";
  private $conexion;

  //PDO para cerrar la conexion con la base de datos??? , habria que "reconectar"??

  private function __construct(){
    try {
      $this->conexion = new PDO($this->dsn,$this->user,$this->password);
    } catch (PDOException $e) {
      echo "Error conexion base de datos: " . $e->getMessage();
    }
  }

  public static function getInstance(){
    if (!self::$instancia){
      self::$instancia =  new DataSource();
    }
    return self::$instancia;
  }

  //falta comprobar errores de la sql y values
  public function getData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    // echo $consulta->queryString;
    //PDO::FETCH_ASSOC: devuelve un array indexado por los nombres de las columnas del conjunto de resultados.
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    // var_dump($resultado);
    return $resultado;
  }

  //lastInsertId problemas hilos,,,etc??
  public function setData($sql,$values){
    $consulta = $this->conexion->prepare($sql);
    $consulta->execute($values);
    //lastInsertId() devuelve la ultima id insertada en la base de datos.
    //problema? si inserto otra cosa, querre el id???
    $resultado = $this->conexion->lastInsertId();
    return $resultado;
  }

}

 ?>
