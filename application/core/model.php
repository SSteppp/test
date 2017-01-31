<?php
class Model
{
	static protected $con;
	
	 function __construct(){
		  $db=parse_ini_file('setting.ini');
		
		self::$con=mysql_connect($db['host'],$db['user'],$db['pass']);
		mysql_select_db($db['db_name'],self::$con);
		
	}
	public function get_data()
	{
	}
}
?>