<?php 

/**
 * 
 */
 class DB
{
	public $con ;

	protected $servername = "localhost" ;

	protected $username = "root" ;

	protected $pass = "";

	protected $dbname = "dbshopmypham";

	public function __construct(){

		$this->con = mysqli_connect($this->servername,$this->username,$this->pass) ;

		mysqli_select_db($this->con,$this->dbname);
		
		mysqli_query($this->con,"SET NAMES 'utf8'");	
	}

	public function queryperform($sql){

		$query = mysqli_query($this->con,$sql);

		if (!$query) {

		  die("Connection failed: " . $conn->connect_error);

		  $status = false ;
		}else
		{
			$status = true ;
		}

		return $status;
	}
	
}

 ?>