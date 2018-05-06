<?php
class DaoRent extends DaoBase
{
    private static $instance;
	
    public function __construct() {
        $table="alquiler";
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

  	public function rentalCarsOfTheUser($id){
  				return DataSource::getInstance()->getAllData("SELECT * FROM $this->table WHERE user_id = :id ORDER BY id DESC", array(':id' => $id));
  	}

    public function getAll()
    {
        return DataSource::getInstance()->getAllData("SELECT *, c.id as alquiler_id FROM vehiculo_alquiler c LEFT JOIN alquiler p ON p.vehiculo_id = c.id WHERE p.vehiculo_id IS NOT NULL", array());
    }

    public function insertAlquiler($vehiculo_id, $user_id)
    {
        $result = DataSource::getInstance()->getData("SELECT * FROM $this->table WHERE vehiculo_id = :vehiculo_id AND status = 0",
          array(':vehiculo_id'=>$vehiculo_id));

        if(!$result)
        {
          $date_now = date("Y-m-d H:i:s");
          $date_end = strtotime(date("Y-m-d H:i:s", strtotime($date_now)) . " +1 month");//HAY QUE AÑADIR SELECCIONAR LA FECHA Y ESO....
          $date_end = date("Y-m-d H:i:s", $date_end);

          $result = DataSource::getInstance()->setData("INSERT INTO $this->table (user_id, vehiculo_id, fecha_inicio, fecha_fin) VALUES (:user_id,:vehiculo_id,:date_start,:date_end)",
          array(':user_id'=>$user_id,':vehiculo_id'=>$vehiculo_id,':date_start'=>$date_now,':date_end'=>$date_end));
        }

        return $result;
    }
  }
?>
