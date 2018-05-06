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

	   public function getAllRentCarAvaliable(){
        $result = DataSource::getInstance()->getAllData("SELECT * FROM $this->table c
              LEFT JOIN (
                    SELECT    MAX(id) max_id, vehiculo_id 
                    FROM      alquiler 
                    GROUP BY  vehiculo_id
              ) c_max ON (c_max.vehiculo_id = c.id)
              LEFT JOIN alquiler p ON (c.id = c_max.max_id)
              WHERE c_max.max_id IS NULL OR p.status = 1", array());

        return $result;
    }

    public function getById($id){
        $result = DataSource::getInstance()->getData("SELECT *, c.id as id FROM $this->table c
              LEFT JOIN alquiler p ON (p.vehiculo_id = c.id)
              WHERE c.id = :id", array(':id' => $id));

        return $result;
    }

	   public function userOwnedCars($id){
	       return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE user_id = :id", array(':id' => $id));
	   }

}
?>
