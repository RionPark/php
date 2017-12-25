<?php

class DBCon {
    private $host = "localhost";
    private $db_name = "php";
    private $username = "root";
    private $password = "r1r2r3";
    private $conn;
    
    // get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    
        return $this->conn;
    }
}
?>