<?php  


 <?php 

class Database{
	private $host=DB_HOST;
	private $user=DB_USER;
	private $name=DB_NAME;
	private $pass=DB_PASS;

	private $dbh; //yang akan menjadi objek
	private $stmt; //variabel yang akan menampung proses query dll

	public function __construct(){
		$dsn='mysql:host='.$this->host.';dbname='.$this->name;

		$option=[
					PDO::ATTR_PERSISTENT => true,
            		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				];

				try{
					$this->dbh=new PDO($dsn,$this->user,$this->pass);
				}

				catch(PDOException $e){
					die($e->getMessage());
				}
		
	}

	public function query($query){
		$this->stmt=$this->dbh->prepare($query);
	}

	public function bind($param,$value,$type=null){
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					$type=PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type=PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type=PDO::PARAM_NULL;
					break;
				default:
					$type=PDO::PARAM_STR;
					break;
			}
		}

		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute(){
		$this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount(){
		return $this->stmt->rowCount();
	}

}
































