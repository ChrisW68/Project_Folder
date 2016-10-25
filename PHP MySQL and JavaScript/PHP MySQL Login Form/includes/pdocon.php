<?php 

class Pdocon{
    //The connection properties
    private $host =  "localhost";
    private $user = "root";
    private $pass = '';
    private $dbname = "cus_app";
    
    //Handle connection
    private $dbh;
    
    //handle errors
    private $errmsg;
    
    //statement handler
    private $stmt;
    
    //method to open connection
    public function __construc(){
        $dsn =="mysql:host=" . $this->host . "; dbname=" . $this->dbname;
        
        $options = array(
            PDO::ATTR_PERSISTENT  => true,
            PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION
        );
    }
}