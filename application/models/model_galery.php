<?php

class Model_Galery extends Model
{
	
	public function get_data()
	{	
			$sql=mysql_query("SELECT * FROM img",self::$con);
		return $sql;
		
	}

}

?>