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
