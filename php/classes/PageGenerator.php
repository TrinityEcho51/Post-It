<?php
class PageGenerator
{
    //private $_databazaPripojenie;
    private $_akcia;


    function __construct()
    {
        //global $databaza;
        //$this->_databazaPripojenie = $databaza->connection;
        $this->_akcia = new Actions;
    }


    public function overAkcie($akcia)
    {
        if ($akcia == "Prihlásiť") $this->_akcia->prihlas($_POST["meno"], $_POST["heslo"]);
        if ($akcia == "Odhlásiť") $this->_akcia->odhlas();
        if ($akcia == "Vytvor") $this->_akcia->vytvorPostit();
    }


    public function login()
    {
        include "modules/login.php";
    }


    public function postit($role)
    {
        include "modules/postit.php";
    }


    public function prehlad($role)
    {
        include "modules/prehlad.php";
    }


    public function add()
    {
        include "modules/create.php";
    }
}