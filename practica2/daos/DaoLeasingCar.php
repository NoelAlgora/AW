<?php
class DaoLeasingCar extends DaoBase
{
    private static $instance;

    public function __construct() {
        $table="vehiculo_leasing";
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

	public function getAllLeasingCarAvaliable(){
		return DataSource::getInstance()->getAllData("SELECT * FROM $this->table",array());

		  // var_dump($result);
	}

	public function carsDateFilter($init_date,$end_date){
		$result =  DataSource::getInstance()->getAllData("
			SELECT r.* FROM 
				$this->table
			LEFT JOIN 
				leasing l
			ON 
				l.vehiculo_id = r.id
			WHERE
				l.fecha_inicio > :init_date
			AND
				l.fecha_fin < :end_date",
				 array(':init_date' => $init_date, ':end_date' => $end_date));
			
	

			return $result;
	}

	public function userOwnedCars($user_id){
		return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE 	owner_user_id = :owner_user_id", array(':owner_user_id' => $user_id));
 	 }
}
?>
