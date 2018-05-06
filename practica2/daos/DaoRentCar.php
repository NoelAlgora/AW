<?php
class DaoRentCar extends DaoBase
{
    public function __construct() {
        $table="vehiculo_alquiler";
        parent::__construct($table);
    }

	public function getAllRentCarAvaliable(){
        return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE user_id IS NULL ORDER BY id DESC", array());
    }

    /* Coger el último coche de la base de datos */
	public function getLastRentCarAvaliable(){
        return DataSource::getInstance()->getAllData("SELECT * FROM $this->table  WHERE user_id IS NULL ORDER BY id DESC", array());
    }
}
?>
