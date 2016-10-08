<?php 
//use PDO;

class DatabaseConnect {
	public function dbConnectSimple() {
		$dbsystem = "mysql";
		$host = "127.0.0.1";
		$dbname = "customerdb";
		$username = "customerdb";
		$password =  "customerdb";
		return $this->dbConnect($dbsystem, $host, $dbname, $username, $password);
	}

	public function dbConnect($dbsystem, $host, $dbname, $username, $password) {
		$dsn = $dbsystem . ":host=" . $host . ";dbname=" . $dbname;
		try {
			$connection = new PDO($dsn, $username, $password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $pdoException) {
			$connection = null;
			echo "Error al establecer la conexion " . $pdoException;
			exit();
		}
		//echo "Conectado correctamente a la base de datos " . $dbname;
		return $connection;
	}
}