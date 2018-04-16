<?php
class DaoRentCar extends EntidadBase
{
    public function __construct() {
        $table="vehiculo_alquiler";
        parent::__construct($table);
    }
}
?>
