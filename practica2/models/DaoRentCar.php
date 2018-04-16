<?php
class DaoRentCar extends EntidadBase
{
    public function __construct() {
        $table="vehiculo_alquiler";
        parent::__construct($table);
    }

	public function getAllRentCarAvaliable(){
        return $this->dataSource->getAllData("SELECT * FROM $this->table  WHERE user_id IS NULL ORDER BY id DESC", array());
    }
}
?>
