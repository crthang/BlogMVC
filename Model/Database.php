<?php
class Database{

    public $conn = null;
    private $server = 'localhost';
    private $dbName = 'blogmvc';
    private $user = 'root';
    private $password = '';

    //hàm connect đến database
    public function connect(){
        $this->conn = new mysqli($this->server , $this->user ,$this->password,$this->dbName );

        if($this->conn->connect_error){
            printf($this->conn->connect_error);
            exit();
        }

        $this->conn->set_charset("utf8");
    }
    //hàm ngắt kết nối database
    public function closeDatabase(){

        if($this->conn){
            $this->conn->close();
            
        }

    }

}


?>