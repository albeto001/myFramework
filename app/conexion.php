<?php
class conexion{
	private $servername = "localhost";
	private $username = "vendocag_alberto";
	private $password = "zaq12wsx";
	private $dbname = "vendocag_albertoRobles";

	function __construct(){
		$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->connection->connect_error) {
		    die("Connection failed: " . $this->connection->connect_error);
		}
	}

	public function query($sql){
		$data = array();
		$result = $this->connection->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $data[] = $row;
		    }
		    return $data;
		} else {
		    return false;
		}
	}
}