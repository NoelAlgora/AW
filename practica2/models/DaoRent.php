<?php
class DaoRent extends EntidadBase
{
    public function __construct() {
        $table="alquiler";
        parent::__construct($table);
    }

		public function rentalCarsOfTheUser($id){
					return $this->dataSource->getAllData("SELECT * FROM $this->table WHERE user_id = :id ORDER BY id DESC", array(':id' => $id));
		}

}
?>
