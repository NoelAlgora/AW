<?php
class DaoRentCar extends DaoBase
{
    private static $instance;

    public function __construct() {
        $table="vehiculo_alquiler";
        parent::__construct($table);
    }

    public static function getInstance()
    {
      if (is_null( self::$instance ) )
      {
        self::$instance = new self();
      }
      return self::$instance;
    }

		//ver si hay algo mejor
		//dame todos los coches cuyo id no aparezca en la tabla de alquileres
	   public function getAllRentCarAvaliable(){
        $result = DataSource::getInstance()->getAllData(
							"SELECT r.* FROM
								 $this->table r
							LEFT JOIN
								alquiler l
							ON
	 							r.id = l.vehiculo_id
							WHERE
								l.vehiculo_id IS NULL",array());

				 // var_dump($result);
        return $result;
    }
		// public function getAllRentCarAvaliable(){
		// 	//toma todo los datos de la tabla vehiculo_alquiler
		// 	 $result = DataSource::getInstance()->getAllData(
		// 				 //seleccionar de la tabla vehiculo_alquiler
		// 				 "SELECT * FROM
		// 					 $this->table
		// 					 c
		// 				 LEFT JOIN
		// 					 (
		// 						 SELECT    MAX(id) max_id, vehiculo_id
		// 						 FROM      alquiler
		// 						 GROUP BY  vehiculo_id
		// 					 ) c_max
		// 				 ON
		// 					 c_max.vehiculo_id = c.id
		// 				 LEFT JOIN
		// 						 alquiler p
		// 				 ON
		// 					 c.id = c_max.max_id
		// 				 WHERE
		// 					 c_max.max_id
		// 				 IS NULL OR
		// 					 p.status = 1", array());
	 //
		// 	 var_dump($result);
		// 	 return $result;
	 // }

	   public function userOwnedCars($user_id){
	        return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE 	owner_user_id = :owner_user_id", array(':owner_user_id' => $user_id));
	   }

	    public function insertUsuario($matricula,
                            		$marca,
                            		$modelo,
                                	$motor,
                                	$cambio,
                                	$color,
                                	$combustible,
                                	$descripcion,
                                	$list_img){

			$result = DataSource::getInstance()->setData("INSERT INTO usuario (username, apellido, email, password, telefono, descripcion) VALUES (:nombre,:apellido,:email,:password,:telefono,:descripcion)",
			array(':nombre'=>$user_name,':apellido'=>$apellido,':email'=>$email,':password'=>$user_password,':telefono'=>$telefono,':descripcion'=>$descripcion));
			//llega la id o 0 si error, no devolvemos TO
			return $result;
		}

}
?>
