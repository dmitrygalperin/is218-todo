<?php
class Database {
	protected static $sql;
	private static $dsn = 'mysql:host=sql.njit.edu;dbname=dg94';
	private static $username = "dg94";
	private static $password = "Qugvi42q";

		//returns PDO object
		public function connect() {
			if(!isset(self::$sql)) {
				try {
					self::$sql = new PDO(self::$dsn, self::$username, self::$password);
				} catch (PDOException $e) {
					echo $e->getMessage();
					exit();
				}
			}

			return self::$sql;
		}

		//executes a query and returns the result
		public function query($query) {
	        try {
	    		$sql = $this->connect();
	    		$statement = $sql->prepare($query);
	    		$statement->execute();
	    		$result = $statement->fetchAll();
	    		$statement->closeCursor();
	        } catch (PDOException $e) {
	            return $e;
	        }

			return $result;
		}
}
?>
