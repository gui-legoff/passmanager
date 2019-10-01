<?php 

/**
   * Class of connection to database
   *
   * @param string $db
   * 
   */

class Db {
    
	 // Instance de PDO.
    protected $_db;
    
	protected function __construct($db){
		$this->setDb($db);
		//echo("class chargé");
	}
	
	public function setDb(PDO $db){
		$this->_db= $db;
	}
}
?>