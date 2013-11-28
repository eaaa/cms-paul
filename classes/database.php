<?php
class Database {
    private static $db; // will contain the instance of the database object
	private $host;
	private $user;
	private $password;
	private $rows;
	private $result;	
	private $dbName;
	private $connection;	
	private $isReady;
	

	public function __construct() { 		
		$this->result = null;
		$this->isReady = false; 
		// Run initiate function and provide credentials
		$this->initiate("localhost","root","","cms_paul");
		}
	
    public static function getInstance(){
		if (self::$db === null){
			self::$db = new Database;
			//echo "creating a new instance of the database";
		} else {
			//echo "instance already created";
		}
		return self::$db;
	}


	/* Interface functions */
	public function initiate($host=null,$user=null,$password=null,$dbName=null) {
		if(isset($host,$user,$password,$dbName)==false) {
			die("Please provide require settings.");
		}
		$this->setHost($host);
		$this->setUser($user);
		$this->setPassword($password);
		$this->setDbName($dbName);
		$this->isReady = true;
	}
	
	public function connect() {
		if($this->isReady==false) {
			die("Not ready to connect, please initiate connection");
		}
		$connection_string = "mysql:host=".$this->host.";dbname=".$this->dbName;
		$this->connection = new PDO($connection_string, $this->user, $this->password);
		$this->query("SET NAMES 'utf8'",$this->connection); // ensure character/language support
	}	

	public function disconnect() {
		$this->connection = null;
		$this->isReady = false;
		$this->setHost = null;
		$this->setUser = null;
		$this->setPassword = null;
		$this->setDbName = null;
	}

	public function query($sql) {
		$this->result = $this->connection->query($sql);
		$this->loadRows();
		return $this->rows;
	}	
	
	public function countRows() {
		return $this->result->rowCount();	}

	public function loadRows() {
		if(!$this->result) {
			//die("Nothing found!");
			echo "WARNING: Query returned empty";

		}  else {
			$this->rows = array();
			foreach ($this->result as $row) {
	        	$this->rows[] = $row;
	    	}
			return $this->rows;			
		}
	}


	/* setters */
	public function setHost($host){ $this->host = $host; }
	public function setUser($user){ $this->user = $user; }
	public function setPassword($password){ $this->password = $password; }
	public function setDbName($dbName){ $this->dbName = $dbName; }

} // End of Database class
?>