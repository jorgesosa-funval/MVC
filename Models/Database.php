<?php
require_once '../Config/config.php';


class Database
{
    private $hostname;
    private $username;
    private $password;
    private $dbname;
    private $conn;
    
    public function __construct()
    {
        $this->hostname = HOST_NAME;
        $this->username = USER_NAME;
        $this->password = PASSWORD;
        $this->dbname = DB_NAME;

        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
    }


    function getConn()
    {
        return $this->conn;
    }

    function closeConn()
    {
        $this->conn->close();
    }
}
