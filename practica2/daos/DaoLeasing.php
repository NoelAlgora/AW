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

	public function leasingCarsOfTheUser($user_id){
		$result = DataSource::getInstance()->getAllData(
					"SELECT c.id,c.marca,c.modelo,c.matricula,r.fecha_fin,r.fecha_inicio,r.id AS leasingid FROM
						 $this->table r
					LEFT JOIN
						 vehiculo_leasing c
					ON
						r.user_id = :user_id
					AND
						r.vehiculo_id = c.id
					ORDER BY r.fecha_fin DESC"
						,array(':user_id'=>$user_id));

		 // var_dump($result);
		return $result;
	}

	public function devolverAlquiler($leasing_id)
	{
		return DataSource::getInstance()->setData("UPDATE $this->table SET status = 1 WHERE id = :id",
			array(':id'=>$leasing_id));
	}

	public function insertAlquiler($vehiculo_id, $date_start,$date_end,$user_id)
	{
			//Comprobamos que el vehiculo no esta alquilado ya
			$result = DataSource::getInstance()->getData("SELECT * FROM $this->table WHERE vehiculo_id = :vehiculo_id AND status = 0",
				array(':vehiculo_id'=>$vehiculo_id));

			// var_dump($result);
			if(!$result)
			{
				// $date_now = date("Y-m-d H:i:s");
				// $date_end = strtotime(date("Y-m-d H:i:s", strtotime($date_now)) . " +1 month");//HAY QUE AÑADIR SELECCIONAR LA FECHA Y ESO....
				// $date_end = date("Y-m-d H:i:s", $date_end);

				$result = DataSource::getInstance()->setData(
					"INSERT INTO
						$this->table (user_id, vehiculo_id, fecha_inicio, fecha_fin)
					VALUES
						(:user_id,:vehiculo_id,:date_start,:date_end)",array(':user_id'=>$user_id,':vehiculo_id'=>$vehiculo_id,':date_start'=>$date_start,':date_end'=>$date_end));
			}

			return $result;
	}

}
?>
