<?php
class DaoRentCar extends DaoBase
{
    private static $instance;

    public function __construct() {
        $table="vehiculo_alquiler";
        parent::__construct($table);
    }

    public function carFilter($filter){
	
		$stringPDO = "SELECT * FROM $this->table WHERE ";
		$arrayPDO = array();

		$j = count($filter);

		foreach ($filter as $key => $values){
			for ($i = 0; $i < count($filter[$key]); $i++){
					
					//key =
					$stringPDO .= $key . " = ";

					// :key$i
					$aux = ":" . $key . $i;

					//:key$i => valor
					$arrayPDO[$aux] = $filter[$key][$i];

					//key = :key$i
					$stringPDO .= $aux;

					if ($i < count($filter[$key]) - 1){
						$stringPDO .= " OR ";
					}
				
			}

			$j--;

			if($j){
				$stringPDO .= " AND ";
			}
		}

		
		return DataSource::getInstance()->getAllData($stringPDO,$arrayPDO);
    }

    public function carsDateFilter($init_date,$end_date){
		$result =  DataSource::getInstance()->getAllData("
			SELECT r.* FROM 
				$this->table
			LEFT JOIN 
				alquiler l
			ON 
				l.vehiculo_id = r.id
			WHERE
				l.fecha_inicio > :init_date
			AND
				l.fecha_fin < :end_date",
				 array(':init_date' => $init_date, ':end_date' => $end_date));
			
	

			return $result;
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
	    public function insertVehiculo($matricula,
                            		$marca,
                            		$modelo,
                                	$motor,
                                	$cambio,
                                	$color,
                                	$combustible,
                                	$list_img,
                                	$descripcion,
                                	$precio_dia){

			$result = DataSource::getInstance()->setData("INSERT INTO vehiculo_alquiler
						( matricula, marca,
						modelo, motor, cambio, color,combustible,
						list_img, descripcion, base_price_day)
					VALUES (:matricula,:marca,
							:modelo,:motor,:cambio,:color,:combustible,
							:list_img,:descripcion,:precio_dia)",
					array(	':matricula'=>$matricula,':marca'=>$marca,
							':modelo'=>$modelo,':motor'=>$motor, ':cambio'=>$cambio, ':color'=>$color, ':combustible'=>$combustible,
							':list_img'=>$list_img, ':descripcion'=>$descripcion,':precio_dia'=>$precio_dia));
			//llega la id o 0 si error, no devolvemos TO
			return $result;
		}
}
?>
