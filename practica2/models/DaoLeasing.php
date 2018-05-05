<?php
class DaoLeasing extends EntidadBase
{
    public function __construct() {
        $table="leasing";
        parent::__construct($table);
    }

		public function leasingCarsOfTheUser($id){
					return $this->dataSource->getAllData("SELECT * FROM $this->table WHERE user_id = :id ORDER BY id DESC", array(':id' => $id));
		}

}
?>
