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
        return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE user_id IS NULL ORDER BY id DESC", array());
    }

	public function userOwnedCars($id){
	   return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE user_id = :id", array(':id' => $id));
	}
}
?>
