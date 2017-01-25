<?
class Model
{
	static protected $con;
	
	 function __construct(){
		
		self::$con=mysql_connect("localhost","root","");
		mysql_select_db("db",self::$con);
		
	}
	public function get_data()
	{
	}
}
?>