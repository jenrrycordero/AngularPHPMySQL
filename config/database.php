<?php 

class Database{
    
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;
    
    public function getConnection(){ 
        $config = parse_ini_file('config.ini');
        $this->host = $config['host'];
        $this->db_name = $config['dbname'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->conn = null;
            
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
            
        return $this->conn;
    }
}
