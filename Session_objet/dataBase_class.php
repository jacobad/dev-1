<?php 

/*class DataBase  {

	private $pdo;
	private $query

	public function __construct($pdo, $query){
		$this->pdo = $pdo;
		$this->query = $query;

	}

	public function getPdo(){
		return $this->pdo;
	}
	public function setPdo(){
		$this->pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');
		$this->pdo->exec('SET NAMES UTF8');

	}


	public function getQuery(){
		return $this->query;
	}

	public function setQueryRegister(){
		 $this->query = $pdo->prepare
	(
	    'INSERT INTO users(mail, psw, firstName, lastName, age) VALUES (?, ?, ?, ?, ?)'
	);
	}


	public function setQueryLogin($user){

		$this->query = $pdo->prepare
	(
	    'SELECT * FROM users WHERE email= ?'
	);


	}


	public function __setQueryExecute($email,$psw, $firstName, $lastName, $age){

		$this->query->execute([$email, $psw, $firstName, $lastName, $age])
	}


}*/

class Database
{
	private $pdo;
    
    public function __construct() {
    
    	$this->pdo = new PDO('mysql:host=localhost;dbname=session', 'root', 'troiswa');
    
    }
    
    
    public function query($sql, array $criteria= [] )
    {
    	$this->pdo->exec('SET NAMES UTF8');

		$query = $this->pdo->prepare( $sql );
        
        $query->execute( $criteria ); 
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}
    
    public function queryOne($sql, array $criteria= [] )
    {
    	$this->pdo->exec('SET NAMES UTF8');

		$query = $this->pdo->prepare( $sql );
        
        $query->execute( $criteria ); 
        
        return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function queryAll($sql,array $criteria = []){

		$this->pdo->exec('SET NAMES UTF8');

		$query = $this->pdo->prepare( $sql );
        
        $query->execute( $criteria ); 
	}


	
}























?>