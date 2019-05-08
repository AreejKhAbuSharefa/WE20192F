<?php
/**
 * 
 */
class DbConnection
{
	private $connection;
	private static $DbConnection;
	private function __construct()
	{
		$this->connection = new mysqli('localhost','root','root','university')
		or die('Error Connection');
	}

	public static function getDbConnection(){
		if(!isset(self::$DbConnection))
			self::$DbConnection = new self();
		return self::$DbConnection;
	}

	public function verifyUser($userName, $password){
		$rs = $this->connection->query("Select * From users Where userName='$userName' And password='$password'");
		if(mysqli_num_rows($rs))
			return true;
		else
			return false;
	}
}

?>