<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="u921557902_equalmx";$this->pass="Mzo511Col";$this->host="localhost";$this->ddbb="u921557902_katana";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
