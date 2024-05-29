<?php


class DB {
    private $servername;
    private $username;
    private $password;
    private $dbname;

    function __construct($serv="localhost", $user="sqluser1", $pass="sqluser1", $db="Pict") {
        $this->servername = $serv;
        $this->username = $user;
        $this->password = $pass;
        $this->dbname = $db;
    }

    protected function connectTo()
    {      
        $connect = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
    
        return $connect;
    } 
}
