<?php
class DaoLeasingCar extends EntidadBase
{
    public function __construct() {
        $table="vehiculo_leasing";
        parent::__construct($table);
    }

	public function getAllLeasingCarAvaliable(){
        return $this->dataSource->getAllData("SELECT * FROM $this->table  WHERE user_id IS NULL ORDER BY id DESC", array());
    }

		public function userOwnedCars($id){
		       return $this->dataSource->getAllData("SELECT * FROM $this->table  WHERE user_id = :id", array(':id' => $id));
		   }
}
?>
