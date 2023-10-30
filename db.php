<?php
require_once "database/DAL.php";

class db extends DAL
{

    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }

    public function connect()
    {
        if ($this->db == null) {
            $this->db = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        }
        return $this->db;
    }


    public function disconnect()
    {
        $this->db = null;
    }

    public function fetchData()
    {
        $stmt = $this->connect()->prepare("select * from dishes");
        $stmt->execute();
        while ($result=$stmt->fetch(PDO::FETCH_OBJ)){
            echo $result->name."<hr>";
        }
    }
}

$obj = new db("localhost", "restaurant", "root", "");
$obj->fetchData();