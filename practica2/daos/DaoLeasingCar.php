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

		// echo $stringPDO;
		// var_dump($arrayPDO);

		return DataSource::getInstance()->getAllData($stringPDO,$arrayPDO);
    }

	 public function getAllLeasingCarAvaliable(){
		$result = DataSource::getInstance()->getAllData(
					"SELECT r.* FROM
						 $this->table r
					LEFT JOIN
						leasing l
					ON
						r.id = l.vehiculo_id
					WHERE
						l.vehiculo_id IS NULL",array());

		  // var_dump($result);
		return $result;
	}

	public function userOwnedCars($user_id){
		return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE 	owner_user_id = :owner_user_id", array(':owner_user_id' => $user_id));
 	 }
}
?>
