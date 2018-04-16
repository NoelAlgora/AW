<?php
class EntidadBase{
    public $table;
    public $dataSource;
    private $db;

    public function __construct($table) {
        $this->table=(string) $table;

        require_once 'DataSource.php';
        $this->dataSource= DataSource::getInstance();
        $this->db=$this->dataSource->conexion();
    }

    public function getDataSource(){
        return $this->dataSource;
    }

    public function db(){
        return $this->db;
    }

    public function getAll(){
        return $this->dataSource->getAllData("SELECT * FROM $this->table ORDER BY id DESC", array());
    }

    public function getById($id){
        return $this->dataSource->getData("SELECT * FROM $this->table WHERE id = :id", array(':id'=>$id));
    }

    public function getBy($column,$value){
		return $this->dataSource->getAllData("SELECT * FROM $this->table WHERE id = :id", array(':id'=>$id));
    }

    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }

    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }


    /*
     * Aquí podemos montarnos un montón de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */

}
?>
