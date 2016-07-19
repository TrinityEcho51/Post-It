<?php
require "config.php";


spl_autoload_register(
    function ($trieda) {
        include "php/classes/".$trieda.".php";
    }
);

if ( empty($_SESSION["prihlaseny"]) ) {
    $_SESSION["prihlaseny"] = "nie";
}

$databaza = new Databaza(SERVER, UZIVATEL, HESLO, DB);
$databaza->connection->query("SET NAMES utf8");

$generator = new PageGenerator;

if (!empty($_POST["akcia"])) {
    $generator->overAkcie($_POST["akcia"]);
}