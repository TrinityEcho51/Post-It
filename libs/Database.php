<?php

class Database
{
   /* public $connection;
    public $stav;
    public $kod;*/


    function __construct($server, $uzivatel, $heslo, $db)
    {
        $this->connection = new mysqli($server, $uzivatel, $heslo, $db);
        if ($this->connection->connect_error) {
            die("Pripojenie na databázu zlyhalo na chybe: " . $this->connection->connect_error);
        }

       // $this->connection->mysqli_set_charset($this->$connection,"utf8");
    }


    function __destruct()
    {
        $this->connection->close();
    }



}