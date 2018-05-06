<?php
class DaoLeasing extends DaoBase
{
    private static $instance;
    
    public function __construct() {
        $table="leasing";
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

	public function leasingCarsOfTheUser($id){
		return DataSource::getInstance()->getAllData("SELECT * FROM $this->table WHERE user_id = :id ORDER BY id DESC", array(':id' => $id));
	}
}
?>
